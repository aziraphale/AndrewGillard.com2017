<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogPost
 *
 * @package App
 * @property int id
 * @property Carbon publication_date
 * @property string title
 * @property string slug
 * @property string body
 * @property string format
 * @property string[] categories
 * @property string source
 * @property bool draft
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class BlogPost extends Model {
	use SoftDeletes;

    //protected $table = 'blog_posts'; // default

    /**
     * DB cols that should be considered dates
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at', // with "use SoftDeletes", enables soft deleting for this model
        'publication_date', // converts this attr to a Carbon object
    ];

    protected $casts = [
        // 	id	publication_date	title	slug	body	format	categories	source	draft	created_at	updated_at	deleted_at
        'id' => 'integer',
        'draft' => 'boolean',
    ];

    public function getCategoriesAttribute($value)
    {
        return preg_split('/\s*,+\s*/', $value);
    }

    public function isHtml()
    {
        return ($this->format === 'html');
    }

    public function isMarkdown()
    {
        return ($this->format === 'markdown');
    }

    public function isBbcode()
    {
        return ($this->format === 'bbcode');
    }

    public function shortBody() {
        $out = $this->body;
        if (preg_match("#^(.+?\r?\n\r?\n)#us", $out, $matches1)) {
            if (preg_match("#(.+?\r?\n\r?\n)#us", $out, $matches2, PREG_OFFSET_CAPTURE, strlen($matches1[1]))) {
                $matches1[1] .= $matches2[1][0];
            }
            $out = $matches1[1];
        }
        return $out;
    }

    public function year()
    {
        return $this->publication_date->format('Y');
    }

    public function month()
    {
        return $this->publication_date->format('m');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = strtolower($value);
    }

    public function setFormatAttribute($value)
    {
        $allowed = self::validFormatValues();
        if (!in_array($value, $allowed, true)) {
            throw new \UnexpectedValueException("Value for BlogPost::format attribute must be one of: " . implode(', ', $allowed));
        }
        $this->attributes['format'] = $value;
    }

    public function setCategoriesAttribute($value)
    {
        $allowed = self::validCategoriesValues();
        $values = preg_split('/\s*,+\s*/', $value);

        foreach ($values as $v) {
            if (!in_array($v, $allowed, true)) {
                throw new \UnexpectedValueException("Each comma-separated value for BlogPost::categories attribute must be one of: " . implode(', ', $allowed));
            }
        }
    }

    public function setSourceAttribute($value)
    {
        if ($value === 'null' || $value === 'NULL') {
            $value = null;
        }
        $allowed = self::validSourceValues();
        if (!in_array($value, $allowed, true)) {
            throw new \UnexpectedValueException("Value for BlogPost::source attribute must be one of: " . implode(', ', $allowed));
        }
        $this->attributes['source'] = $value;
    }

    public static function validFormatValues()
    {
        return [
            'html',
            'markdown',
            'bbcode',
        ];
    }

    public static function validCategoriesValues()
    {
        return array_values(self::validCategoriesValuesAndSlugs());
    }

    public static function validCategoriesSlugs()
    {
        return array_keys(self::validCategoriesValuesAndSlugs());
    }

    public static function validCategoriesValuesAndSlugs()
    {
        return [
            'ancient' => 'Ancient',
            'misc' => 'Misc',
            'programming' => 'Programming',
            'web-development' => 'Web Development',
            'technology' => 'Technology',
            'linux' => 'Linux',
            'windows' => 'Windows',
            'android' => 'Android',
            'electronics' => 'Electronics',
            '3d-printing' => '3D Printing',
            'life' => 'Life',
            'hackaday' => 'Hackaday',
            'youtube' => 'YouTube',
        ];
    }

    public static function categoryNameToSlug($name)
    {
        return array_search($name, self::validCategoriesValuesAndSlugs());
    }

    public static function categorySlugToName($slug)
    {
        return self::validCategoriesValuesAndSlugs()[$slug];
    }

    public static function validSourceValues()
    {
        return [
            'Hackaday',
            'YouTube',
            null,
        ];
    }
}

/*
class Blog_Row extends Zend_Db_Table_Row_Abstract {
}
*/
