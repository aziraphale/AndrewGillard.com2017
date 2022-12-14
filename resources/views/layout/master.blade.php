<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="verify-v1" content="/Fs6hzL+GWMWHiljMdhbegI8FrPkqQ7brWp8Cfun0LU=">
        @stack('meta')

        <title>@yield('title') - Andrew's Stuff</title>

        <link href="/css/main.css" media="screen" rel="stylesheet" type="text/css">
        <link href="/css/jquery-ui-1.8.18.redmond.css" media="screen" rel="stylesheet" type="text/css">
        <link href="/css/print.css" media="print" rel="stylesheet" type="text/css">
        <link href="/css/mobile.css" media="screen" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:400,600" media="all" rel="stylesheet" type="text/css">

        <link rel="alternate" href="{{--action('BlogController@rss')--}}" type="application/rss+xml" title="Andrew's Stuff - News">
        <link rel="icon" href="{{asset('img/favicon.ico')}}">

        <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="/js/jquery-ui-1.8.18.min.js"></script>
        <script type="text/javascript" src="/js/misc.js"></script>
        @stack('scripts')
        <script>
        var _prum = [['id', '52b7dfbbabe53d2772000000'],
                    ['mark', 'firstbyte', (new Date()).getTime()]];
        (function() {
            var s = document.getElementsByTagName('script')[0]
              , p = document.createElement('script');
            p.async = 'async';
            p.src = '//rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
        </script>
    </head>
    <body>
        <header>
            <h1><a href="{{action('BlogController@index')}}">Andrew's Stuff</a></h1>

            <nav>
                @include('layout.components.navigation')
            </nav>
        </header>

        <aside class="sidebar">
            @include('layout.sidebar.about')
            @include('layout.sidebar.sites')
            @include('layout.sidebar.github')
            @include('layout.sidebar.furry')
            @include('layout.sidebar.twitter')
            {{--@include('layout.sidebar.flickr')--}}
        </aside>

        <div class="content" id="mainbody">
            @yield('content')
        </div>

        <footer>
            <p>??2004-{{\Carbon\Carbon::now()->format('Y')}} Andrew Gillard</p>

            {{--<ul>
                <li><a href="http://jigsaw.w3.org/css-validator/validator?uri={{url()->full()}}" title="Valid CSS!" class="sprite-footer-css"></a></li>
                <li><a href="http://validator.w3.org/check?uri={{url()->full()}}" title="Valid HTML5!" class="sprite-footer-html5"></a></li>
                <li><a href="http://www.php.net/" title="Powered by PHP" class="sprite-footer-php"></a></li>
                <li><a href="http://www.mysql.com/" title="Powered by MySQL" class=sprite-footer-mysql></a></li>
                <li><a href="{{action('BlogController@rss')}}" title="RSS Feed" class="sprite-footer-rss"></a></li>
            </ul>--}}
        </footer>

        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-4155842-1']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
    </body>
</html>

<?php
/*->headLink()->appendStylesheet($this->baseUrl() . "/css/main.css", "screen")
//    ->headLink()->appendStylesheet($this->baseUrl() . "/css/main.css", "screen and (min-device-width: 601px)")
->headLink()->appendStylesheet($this->baseUrl() . "/css/jquery-ui-1.8.18.redmond.css", "screen")
->headLink()->appendStylesheet($this->baseUrl() . "/css/print.css", "print")
//    ->headLink()->appendStylesheet($this->baseUrl() . "/css/mobile.css", "handheld")
//    ->headLink(array('href'=>$this->baseUrl() . "/css/mobile.css", 'media'=>"all and (max-device-width: 600px)", 'rel'=>'stylesheet', 'type'=>'text/css'))
//    ->headLink(array('href'=>$this->baseUrl() . "/css/mobile.css", 'media'=>"all", 'rel'=>'stylesheet', 'type'=>'text/css'))
//    ->headLink()->appendStylesheet($this->baseUrl() . "/css/mobile.css", "all and (max-device-width: 600px)")
//    ->headLink()->appendStylesheet($this->baseUrl() . "/css/mobile.css", "all and (-webkit-device-pixel-ratio:0.75)")
//    ->headLink()->appendStylesheet($this->baseUrl() . "/css/mobile.css", "all and (-webkit-device-pixel-ratio:1.0)")
//    ->headLink()->appendStylesheet($this->baseUrl() . "/css/mobile.css", "all and (-webkit-device-pixel-ratio:1.5)")
->headLink()->appendStylesheet($this->baseUrl() . "/css/mobile.css", "screen")
->headLink()->appendStylesheet("http://fonts.googleapis.com/css?family=Source+Code+Pro:400,600", "all")*/
/*$this->headScript()
    ->appendFile($this->baseUrl() . '/js/jquery-1.7.2.min.js')
    ->appendFile($this->baseUrl() . '/js/jquery-ui-1.8.18.min.js')
    ->appendFile($this->baseUrl() . '/js/misc.js')
    ->appendFile($this->baseUrl() . '/js/ie-fix-html5.js', 'text/javascript', array('conditional'=>'lt IE 9'))
    ->appendFile("https://platform.twitter.com/anywhere.js?id=i4bNsKCLceEAbuaGiZPhw&amp;v=1")
    ;*/
    /*<header>
        <div id="breadcrumbs">
            <strong>Location:</strong>
            <?php echo $this->navigation()->breadcrumbs()->setPartial(null)->setLinkLast(true)->setSeparator(" ?? ")->setMinDepth(0); ?>
            <?php if (Zend_Registry::isRegistered("extrabreadcrumbs")): ?>
                <?php /* another fun hack.. * / ?>
                <?php $extraBreadcrumbs = Zend_Registry::get("extrabreadcrumbs"); ?>
                <?php if ($extraBreadcrumbs): ?>
                    <?php foreach ($extraBreadcrumbs as $extraBreadcrumb): ?>
                        <?php
                        if(count($extraBreadcrumb) < 2 || empty($extraBreadcrumb[1])) {
                            $extraBreadcrumb[1] = $requestUri;
                        }
                        ?>
                        ?? <a href="<?php echo $extraBreadcrumb[1] ?>"><?php echo $this->escape($extraBreadcrumb[0]) ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>*/
?>
