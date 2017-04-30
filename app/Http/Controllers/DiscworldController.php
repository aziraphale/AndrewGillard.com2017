<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscworldController extends Controller
{
    public function index()
    {
        return view('discworld.index');
    }

    public function crecards()
    {
        return view('discworld.cre-cards');
    }

    public function deaths()
    {
        return view('discworld.deaths');
    }

    public function grunthadeaths()
    {
        return view('discworld.gruntha-deaths');
    }

    public function info()
    {
        return view('discworld.information');
    }

    public function langgraphs(Request $request)
    {
        $skillCode  = false;
        $parseError = false;

        if ($request->exists('skills')) {
            $skills = [];
            if (self::parseSkills($request->input('skills'), $skills)) {
                $skillCode = base64_encode(json_encode($skills));
            } else {
                $parseError = true;
            }
        }

        return view('discworld.language-graphs', ['skillCode'=>$skillCode,'parseError'=>$parseError]);
    }

    const LG_BARWIDTH = 45;
    const LG_BARGAP = 10;
    const LG_YAXISWIDTH = 20;
    const LG_PADDING = 5;
    const LG_XAXISHEIGHT = 90;
    const LG_MAXBARHEIGHT = 200;
    const LG_TEXT_SIZE = 8;
    const LG_FONT = 'Verdana.ttf';

    private static function parseSkills($input, &$output)
    {
        $input = trim($input); //Start by removing excess spaces/newlines
        $input = preg_replace('/=+.*=+/mu', '', $input); //Remove any ====SKILLS=== etc lines

        $input = trim($input); //Start by removing excess spaces/newlines

        //Split into rows
        $input = explode("\r\n", $input);

        //Split multi-column skills
        foreach ($input as $k => $v) {
            $input[$k] = explode('      ', $v);
            foreach ($input[$k] as $kk => $vv) {
                $input[$k][$kk] = trim($vv);
            }
        }

        //Now put into the right order
        $cols = count($input[0]);
        $mid = $mid2 = [];
        for ($i = 0; $i < $cols; $i++) {
            foreach ($input as $v) {
                if (isset($v[$i]))
                    $mid[] = preg_replace('/ +/', ' ', str_replace('.', '', rtrim(ltrim($v[$i], ' |'), ' -')));
            }
        }

        foreach ($mid as $v) {
            $mid2[] = (strpos($v, ' ')) ? explode(' ', $v) : $v;
        }

        $languages = ['uberwaldean', 'djelian', 'morporkian', 'ephebian', 'agatean'/*, 'dwarven', 'gnomish'*/];
        //Now turn into a useful array

        foreach ($languages as $v) {
            $output[$v] = ['sp' => 0, 'wr' => 0];
        }

        foreach ($mid2 as $v) {
            if (is_array($v)) {
                //spoken/written
                if ($v[0] === 'spoken') {
                    if (!empty($lastLang) && empty($output[$lastLang]['sp'])) {
                        $output[$lastLang]['sp'] = min($v[1], 100);
                    }
                } elseif ($v[0] === 'written') {
                    if (!empty($lastLang) && empty($output[$lastLang]['wr'])) {
                        $output[$lastLang]['wr'] = min($v[1], 100);
                    }
                }
            } elseif (in_array($v, $languages)) {
                $lastLang = $v;
            }
        }

        return true;
    }

    private static function yAxisText(&$img, $size, $xcoord, $ycoord, $colour, $font, $text)
    {
        $box    = imagettfbbox($size, 0, $font, $text);
        $brx    = $box[2];
        $xcoord -= $brx;
        imagettftext($img, $size, 0, $xcoord, $ycoord, $colour, $font, $text);
    }

    private static function xAxisText(&$img, $size, $xcoord, $ycoord, $colour, $font, $text)
    {
        $box    = imagettfbbox($size, 90, $font, $text);
        $bty    = $box[5];
        $ycoord -= $bty;
        imagettftext($img, $size, 90, $xcoord, $ycoord, $colour, $font, $text);
    }

    public function renderlanggraph(Request $request)
    {
        // 5+40+5+50+5+50+5+50+5+50+5+50+5+5 = 325
        // 5+40+300+5
        $skills = json_decode(base64_decode($request->input('skills-code')), true);
        if (!$skills) {
            die("Invalid skill code.");
        }

        $imgWidth  = self::LG_PADDING + self::LG_YAXISWIDTH + self::LG_BARGAP +
                     (count($skills) * (((self::LG_BARWIDTH + 2) * 2) + self::LG_BARGAP)) + self::LG_PADDING;
        $imgHeight = self::LG_PADDING + self::LG_XAXISHEIGHT + self::LG_MAXBARHEIGHT + self::LG_PADDING;
        $img       = imagecreate($imgWidth, $imgHeight);

        $blue  = imagecolorallocate($img, 20, 20, 255);
        $green = imagecolorallocate($img, 20, 255, 20);
        $white = imagecolorallocate($img, 255, 255, 255);
        $black = imagecolorallocate($img, 0, 0, 0);
        $grey  = imagecolorallocate($img, 190, 190, 190);

        imagefill($img, 0, 0, $white);

        $x       = self::LG_PADDING + self::LG_YAXISWIDTH + self::LG_BARGAP;
        $y       = $imgHeight - (self::LG_PADDING + self::LG_XAXISHEIGHT);
        $originX = $x;
        $originY = $y;
        $xLabelX = $originX + self::LG_BARWIDTH;

        $fontFilename = resource_path("assets/fonts/" . self::LG_FONT);

        //Horizontal lines
        $horX2 = $imgWidth - ((self::LG_BARGAP * 2) + self::LG_PADDING);
        for ($i = 10; $i <= 100; $i += 10) {
            $yay = $originY - (($i / 100) * self::LG_MAXBARHEIGHT);
            self::yAxisText($img, self::LG_TEXT_SIZE, $originX - 5, $yay + 5, $black, $fontFilename, $i);
            imageline($img, $originX, $yay, $horX2, $yay, $grey);
        }

        //Bars
        ksort($skills);
        foreach ($skills as $lang => $values) {
            if ($values['sp'] > 0)
                imagefilledrectangle(
                    $img,
                    $x,
                    $y,
                    $x + self::LG_BARWIDTH,
                    $y - (($values['sp'] / 100) * self::LG_MAXBARHEIGHT),
                    $blue
                );
            if ($values['wr'] > 0)
                imagefilledrectangle(
                    $img,
                    $x + self::LG_BARWIDTH + 1,
                    $y,
                    $x + (self::LG_BARWIDTH * 2) + 1,
                    $y - (($values['wr'] / 100) * self::LG_MAXBARHEIGHT),
                    $green
                );

            if ($values['sp'] > 20)
                imagettftext(
                    $img,
                    self::LG_TEXT_SIZE,
                    90,
                    $x + (self::LG_BARWIDTH / 2) + 5,
                    $y - 10,
                    $white,
                    $fontFilename,
                    'Spoken'
                );
            if ($values['wr'] > 20)
                imagettftext(
                    $img,
                    self::LG_TEXT_SIZE,
                    90,
                    $x + self::LG_BARWIDTH + (self::LG_BARWIDTH / 2) + 5,
                    $y - 10,
                    $black,
                    $fontFilename,
                    'Written'
                );

            self::xAxisText(
                $img,
                self::LG_TEXT_SIZE,
                $x + self::LG_BARWIDTH + 3,
                $y + 10,
                $black,
                $fontFilename,
                ucwords($lang)
            );

            $x += self::LG_BARWIDTH * 2 + self::LG_BARGAP + 2;
        }

        //X-axis
        imageline($img, $originX - 5, $originY + 2, $x, $originY + 2, $black);

        //Y-axis
        imageline($img, $originX - 2, $originY + 5, $originX - 2, self::LG_PADDING, $black);

        header('Content-type: image/png');
        imagepng($img);
        imagedestroy($img);
        die();
    }

    public function locations()
    {
        return view('discworld.locations');
    }

    public function logs()
    {
        return view('discworld.logs');
    }

    public function maps(Request $request, $requestedMap = '')
    {
        $requestedMap = strtolower($requestedMap);

        switch ($requestedMap) {
            case 'monks-of-cool':
                //Zend_Registry::set("extrabreadcrumbs", Zend_Registry::get("extrabreadcrumbs") + array(array("Temple of the Monks of Cool")));
                break;
            case 'pictsie-barrows':
                //Zend_Registry::set("extrabreadcrumbs", Zend_Registry::get("extrabreadcrumbs") + array(array("Pictsie Barrows")));
                break;
        }

        return view('discworld.maps', ['requestedMap' => $requestedMap]);
    }

    public function rods()
    {
        return view('discworld.rods');
    }

    public function sbscript()
    {
        return view('discworld.status-bar-script');
    }
}
