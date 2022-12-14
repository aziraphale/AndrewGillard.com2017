@extends('layout.master')

@section('title', "Portfolio")

@section('content')

    <?php
    $pfImgUrl = function ($id) {
        return "/img/portfolio/$id.png";
    };
    $pfThumbUrl = function ($id) {
        return "/img/portfolio/thumbs/$id.jpg";
    };
    $vcScreen = function ($id) {
        return "/img/portfolio/viper-cart-screens/?file=" . urlencode($id) . ".png";
    };
    ?>

    @if (env('LOOKING_FOR_WORK'))
        <article class="availableforwork">
            <p>I'm currently available for full-time, permanent work as an experienced, Zend Certified, Web Developer. If
                you're interested in hiring me, please email me at
                <a href="mailto:cv@andrewgillard.com">cv@andrewgillard.com</a> or
                <a href="{{action('CvController@index')}}">check out my CV</a>.</p>
        </article>
    @endif

    <article>
        <p>Here is a list of notable Web projects that I have worked on, either for work or as my own personal projects,
            ordered from most recent to oldest, with the years in which the projects were in active development displayed to
            the right of the project name. In the sub-heading of each site I have listed a few of the
            <strong>significant</strong> technologies/languages/services used - i.e. CSS and JavaScript, for example, won't
            be listed unless they played a large part in the project.</p>
        <p>The project names are links that will take you to the site in question, a demonstration of the software, or a
            gallery of screenshots from the project if the project isn't publicly available (whichever is applicable).</p>
    </article>

    <section class="portfoliosite ncrm">
        <h2>
            <a href="http://www.ncrm.ac.uk/">NCRM - National Centre for Research Methods</a>
            <span class="pfdate">2014</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li>jQuery</li>
            <li>Dreamweaver templates</li>
            <li>Composer</li>
            <li>Modernizr</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('ncrm') ?>">
                <img src="<?= $pfThumbUrl('ncrm') ?>" alt="NCRM" width="250" height="272">
            </a>
        </aside>
        -->
        <p>Over a total of approximately eight months spanning a three-year period, I maintained, fixed and improved the
            NCRM's main website in my role as a consultant developer. Some of the larger tasks included applying a brand
            new design to the whole site, and creating a new "portal" area of the site, complete with a secure registration
            and authentication system which allowed the user to choose between creating a new account for the NCRM site or
            logging in using their existing institutional ID (e.g. University account), which required integrating with a
            third-party authentication system.</p>
    </section>

    <section class="portfoliosite ncrm">
        <h2>
            <a href="http://www.ncrm.ac.uk/RMF2014/ipad/">NCRM - Research Methods Festival 2014 - iPad Survey App</a>
            <span class="pfdate">2014</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li>jQuery &amp; mobile/touch functionality</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('ncrm-rmf14-ipad') ?>">
                <img src="<?= $pfThumbUrl('ncrm-rmf14-ipad') ?>" alt="NCRM RMF2014 iPad Survey App" width="250" height="272">
            </a>
        </aside>
        -->
        <p>Designed to be used exclusively on four Apple iPad devices at NCRM's bi-annual Research Methods Festival, this
            website/app asked a simple question and invited users to enter their own textual response. As we had full
            control over the end devices, we were able to use some technologies that otherwise would have been impractical
            or required too much development time. The result is a very animated, fluid interface that looks much like a
            native app while requiring only fairly basic Web technologies to create.</p>
        <p>And yes, someone answered the question with just one word: "Boobs".</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="https://irc-logs.sihnon.net/_new/">Quassel IRC Client - Log Search Web App</a>
            <span class="pfdate">2014</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li>jQuery</li>
            <li>Bootstrap</li>
            <li>Composer</li>
            <li>Bower</li>
            <li>SCSS</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('quassellog') ?>">
                <img src="<?= $pfThumbUrl('quassellog') ?>" alt="Quassel Log Search" width="250" height="272">
            </a>
        </aside>
        -->
        <p>I make heavy use of a distributed IRC client called Quassel, which stores all of its chat logs in a central MySQL
            database on my main remote server. This system is very convenient for seamlessly jumping between many client
            devices (desktop PC, laptop, smartphone, etc.), but it has the disadvantage of making it difficult to quickly
            search through what can amount to many years' worth of chat logs.</p>
        <p>In order to facilitate easy searching of these logs, a Web-based log search script was created by someone by the
            name of <a href="https://gitorious.org/quassel-backlog-search">m4yer</a>. While functional, this script was
            rather basic and the code seemed a little outdated. As such, I set out to rewrite it with up-to-date techniques
            such as full OO programming, MVC, and using systems like Bootstrap, Composer, Bower and SCSS, while also adding
            extra functionality at the same time.</p>
        <p>Unfortunately this project is still in-progress and frustratingly-incomplete, however
            <a href="https://github.com/aziraphale/Quassel-LogSearch/tree/rewrite">the code that I've pushed to github</a>
            is, at least, a good indication of the direction in which I was going, as well as the style of code that I write
            when I have few restraints controlling me.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="">Personal Video Download Gallery</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>ffmpeg/libav</li>
            <li>jQuery + UI</li>
            <li>Composer</li>
            <li>ImageMagick</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('video-gallery') ?>">
                <img src="<?= $pfThumbUrl('video-gallery') ?>" alt="Video Download Gallery" width="250" height="272">
            </a>
        </aside>
        -->
        <p>Rather like the photo/image gallery listed below, this script aims to present a directory of video files to a visitor via a Web interface - again, with no/minimal configuration in each directory in which it's used. It operates on two directory levels, allowing for one level of categorisation of the videos.</p>
        <p>Each video is analysed by the script (using an ffmpeg/libav library) which extracts details such as the video's dimensions, length, video and audio codecs, number of audio channels, and so on. These data are then cached in a hidden file to minimise subsequent load time and load on the server. The script also generates both static and animated thumbnail images (using ffmpeg/libav and ImageMagick) from the video source: the static image is displayed normally, being temporarily replaced with the animated image when the user hovers their mouse cursor over the video details. These thumbnail images are obviously also cached.</p>
        <p>There's no built-in way of displaying/embedding the videos within the browser window, as this is both extremely difficult to get to work without using plugins, transcoding video, etc., and because it was simply not something I needed the script to do! Instead it's easy for viewers to just download the video files to their own computers and watch them there (or stream them, if their browser or other video player supports that).</p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://breastscreeningfacts.org/">Breakthrough Breast Cancer Interactive Screening Guide</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li>jQuery</li>
            <li>CSS</li>
            <li><a href="https://github.com/JoelBesada/scrollpath">jQuery Scroll Path</a></li>
            <li>LESS</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('btbc-bsf') ?>">
                <img src="<?= $pfThumbUrl('btbc-bsf') ?>" alt="Breakthrough Breast Cancer Guide" width="250" height="272">
            </a>
        </aside>
        -->
        <p>This was developed for the Breakthrough Breast Cancer charity as a way of communicating difficult information to women regarding screening for breast cancer. It was designed to be very striking, "different" and a bit playful in order to lighten the mood of what can be a very dark and tough subject.</p>
        <p>To that end we used a jQuery library that I had previously discovered called Scroll Path which causes a Web browser to appear to scroll in a non-linear manner - instead of merely scrolling up and down, the the standard ways of scrolling through a Web page instead cause the browser to appear to scroll in many directions in a convoluted path through the content. The simple fact that most people had never seen a website like this before caused it to gain a lot of attention for the charity and no doubt had a large part to play in its subsequent winning of four separate awards (see below).</p>
        <p>This website has <strong>won four awards!</strong></p>
        <ul>
            <li>
                <a href="http://www.amrc.org.uk/our-work/science-communication-awards/2014-science-communication-awards-the-winning-entries#cat3">
                    The Association of Medical Research Charities (AMRC) &mdash;
                    2014 Science Communications Awards &mdash;
                    "Communicating Controversial Topics"
                </a>
            </li>
            <li>
                <a href="http://www.interactivemediaawards.com/winners/certificate.asp?param=286341&amp;cat=1">
                    The 2014 Interactive Media Awards (IMA) &mdash;
                    Outstanding Achievement &mdash;
                    Advocacy
                </a>
            </li>
            <li>
                <a href="http://www.interactivemediaawards.com/winners/certificate.asp?param=286341&amp;cat=2">
                    The 2014 Interactive Media Awards (IMA) &mdash;
                    Outstanding Achievement &mdash;
                    Healthcare
                </a>
            </li>
            <li>
                <a href="http://bma.org.uk/about-the-bma/bma-library/patient-information-awards">
                    The British Medical Association (BMA) &mdash;
                    Patient Information Awards 2014 &mdash;
                    Screening Award Winner
                </a>
            </li>
        </ul>
        <p><a href="http://www.maxx-design.co.uk/casestudy/156/breakthrough-interactive-screening-guide">See also MAXX
            Design's case study of this on their website.</a></p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="https://andrewgillard.com/dns-check.php">MAXX Design Client DNS Configuration Test Script</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>DNS</li>
            <li>`<code>dig</code>`</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('dns-check') ?>">
                <img src="<?= $pfThumbUrl('dns-check') ?>" alt="DNS Configuration Test" width="250" height="272">
            </a>
        </aside>
        -->
        <p>A common problem at MAXX was that clients who owned and retained control of their own domain names would need to set up the appropriate DNS records to point their domains at MAXX's Web servers. This only required two records, but for people who aren't already familiar with DNS this would often still prove too complicated and was only further complicated by certain domain registrars/hosts having incomprehensible, functionally-limited or downright broken control panels - and some even had staff who claimed that the records that were required were actually impossible to set.</p>
        <p>Since I was the most technically-inclined person in the office, I was always the one who was asked (either by colleagues or clients) to check on the state of client domains to see if the domain had yet been set up correctly - this saved them the time of contacting the remotely-located sysadmin. This rapidly became a large waste of my time, having to frequently type and run a handful of `dig` commands. I therefore wrote, over the period of a few weeks, a script to automate all of the work for me, to the point that it was possible for me to supply a URL to colleagues, or even clients, which would check the domain, report exactly what was wrong and how to fix it. This could even be supplied to clients' domain hosts, though I don't think that ever happened.</p>
        <p>Essentially this is just an example of me writing a PHP script to automate a common, time-consuming task (in this case it was a Web-based script, but many of my automation scripts are purely command line-based).</p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://www.britanniaknowledge.com/">Britannia Pharmaceuticals - Knowledge Management System</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('brit-km') ?>">
                <img src="<?= $pfThumbUrl('brit-km') ?>" alt="Britannia Knowledge Management" width="250" height="272">
            </a>
        </aside>
        -->
        <p>Britannia Pharmaceuticals asked MAXX to create for them a Web system that would enable the sharing of documents between themselves and their worldwide partners. This site was the result.</p>
        <p>It's relatively basic and mostly consists of an authentication system, an upload form with a way of selecting which organisations should be allowed to view which documents, and a system for searching, browsing and viewing the uploaded documents.</p>
        <p>The complex part is that each uploaded document has all textual content extracted so that the search engine is able to find matches inside the uploaded documents. The formats searched include Microsoft Word, Excel and PowerPoint (both the old Office pre-2007 .doc/.xls/.ppt formats and the new, XML-based, .docx/.xlsx/.pptx formats) and PDF. The text extraction was primarily conducted using third-party libraries, such as `antiword`, and the XML-based formats are easy for a PHP script to interpret, however I was unable to find a reader for the old PowerPoint (.ppt) format and ended up reverse-engineering much of the PPT format myself, as the documentation was far too long and complex for the time I had available.</p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://www.britannia-approval.com/">Britannia Pharmaceuticals - Approval System</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('brit-approval') ?>">
                <img src="<?= $pfThumbUrl('brit-approval') ?>" alt="Britannia Approval System" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
        <p><a href="http://www.maxx-design.co.uk/casestudy/166/britannia-pharmaceuticals-online-approval-system">See also
            MAXX Design's case study of this on their website.</a></p>
    </section>

    <section class="portfoliosite maxx">
        <h2><a href="http://www.sane.org.uk/">SANE</a><span class="pfdate"></span></h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('sane') ?>">
                <img src="<?= $pfThumbUrl('sane') ?>" alt="SANE" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://www.maxx-design.co.uk/tweets/">MAXX Design - ???Tweet??? Campaign</a>
            <span class="pfdate">2012</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('maxx-tweet') ?>">
                <img src="<?= $pfThumbUrl('maxx-tweet') ?>" alt="MAXX Design's ???Tweet??? Campaign" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
        <p><a href="http://www.maxx-design.co.uk/casestudy/148/maxx-tweet-mailer-campaign">See also MAXX Design's case study
            of this on their website.</a></p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://www.pdqualityoflife.com/">The Parkinson Hub - Quality of Life</a>
            <span class="pfdate">2012-2013</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('phub-qol') ?>">
                <img src="<?= $pfThumbUrl('phub-qol') ?>" alt="The Parkinson Hub - Quality of Life" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://store.southernsinfonia.co.uk/">Southern Sinfonia Store</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('southsinf-store') ?>">
                <img src="<?= $pfThumbUrl('southsinf-store') ?>" alt="Southern Sinfonia's Store" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://www.barjo.co.uk/">Barjo</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('barjo') ?>">
                <img src="<?= $pfThumbUrl('barjo') ?>" alt="Barjo" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
        <p><a href="http://www.maxx-design.co.uk/casestudy/199/barjo-website-identity">See also MAXX Design's case study of
            this on their website.</a></p>
    </section>

    <section class="portfoliosite maxx">
        <h2>
            <a href="http://www.breakthroughyear.org.uk/">Breakthrough Breast Cancer Year in Review</a>
            <span class="pfdate">2013</span>
        </h2>
        <ul class="pftech">
            <li> </li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('btbc-year') ?>">
                <img src="<?= $pfThumbUrl('btbc-year') ?>" alt="Breathrough Breast Cancer Year Review" width="250" height="272">
            </a>
        </aside>
        -->
        <p><em>Still in the process of writing this...</em></p>
        <p><a href="http://www.maxx-design.co.uk/casestudy/132/breakthrough-breast-cancer-annual-review">See also MAXX
            Design's case study of this on their website.</a></p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="">PHP-Developed IRC "Bot"</a>
            <span class="pfdate">2011-2014</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>PHP-IRC</li>
            <li>several APIs (Twitter, Tumblr, Imgur, YouTube, etc.)</li>
            <li>OpenGraph</li>
        </ul>
        <!--
        <aside>
            <a href="<?= $pfImgUrl('php-irc-bot') ?>">
                <img src="<?= $pfThumbUrl('php-irc-bot') ?>" alt="PHP-IRC Bot" width="250" height="272">
            </a>
        </aside>
        <p><em>Still in the process of writing this...</em></p>
        -->
        <p></p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="http://www.andrewgillard.com/">Andrew's Stuff</a>
            <span class="pfdate">2012</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li><a href="http://framework.zend.com/">Zend Framework</a></li>
            <li>HTML5</li>
            <li>CSS3</li>
            <li><a href="https://dev.twitter.com/">Twitter API</a></li>
            <li><a href="http://www.flickr.com/services/api/">Flickr API</a></li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('andrewgillardcom') ?>">
                <img src="<?= $pfThumbUrl('andrewgillardcom') ?>" alt="Andrew's Stuff Screenshot" width="250" height="272">
            </a>
        </aside>
        <p>This is the most recent iteration of my personal website. This time around it was created using the
            <strong>Zend Framework</strong> in fully-MVC mode, with semantic <strong>HTML5</strong> markup and utilising
            some of the newer features of <strong>CSS3</strong>, such as shadows, gradients and rounded corners. The RSS
            feed still exists, and it now has a dedicated <strong>printer</strong>-friendly stylesheet and a dedicated
            <strong>mobile-device</strong> stylesheet, both of which are activated automatically when printing a page or
            viewing the site on a small-screen mobile device (smartphones, not tablets), respectively.</p>
        <p>As this is only my personal site, very little effort was put into making the design work fully in all browsers.
            As such, older browser versions (especially of Internet Explorer) will have some style quirks, such as lacking
            support for the gradient backgrounds, shadows or rounded corners. However, all browsers should at least be able
            to display the site in a way that makes it readable and usable, if not necessarily pretty - even down to
            IE6.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="http://www.andrewgillard.com/furcode.php">Furry Code Generator</a>
            <span class="pfdate">2012</span>
        </h2>
        <ul class="pftech">
            <li>HTML5</li>
            <li>JavaScript</li>
            <li><a href="http://jquery.com/">jQuery</a></li>
            <li><a href="http://jqueryui.com/">jQuery UI</a></li>
            <li>CSS3</li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('furcodegenerator') ?>">
                <img src="<?= $pfThumbUrl('furcodegenerator') ?>" alt="Furry Code Generator Screenshot" width="250" height="254">
            </a>
        </aside>
        <p>You may have heard of the <a href="http://www.geekcode.com/">Geek Code</a> - essentially a way to describe one's
            "geekiness" in the form of a string of characters - although, being originally written in 1993 and not receiving
            an updated since 1996, it is greatly showing its age these days (with a heavy emphasis on UNIX flavours besides
            Linux, discussion of Netscape as a major Web browser, Windows not existing beyond Windows 95, OS/2 mentions and
            even VMS - oh, and apparently DOOM is the best game ever). Well, this is the same thing, but for
            <a href="http://en.wikifur.com/wiki/Furry">furries</a>.</p>
        <p>Given the complexity of these codes, many people have written encoder and decoder applications or websites for
            the geek code, furry code and the other "codes", however, due to the age of these codes (few, if any, received
            any attention after the 1990s...), the interfaces are similarly dated. I decided that it was high time to bring
            the furry code kicking and screaming (or, perhaps, clawing and meowing) into the 21st century.</p>
        <p>This script, therefore, is a complex work of <strong>JavaScript</strong>, <strong>jQuery</strong> and
            <strong>jQuery UI</strong>. PHP is involved in generating the HTML, but only to reduce the repetitiveness and
            redundancy of the source code - if one were to save the generated HTML, it would run quite happily in any
            modern Web browser.</p>
        <p>This script makes extremely heavy use of jQuery UI for its interface, to the point that it can take a couple of
            seconds simply to render the HTML and execute the JavaScript when the page loads, even with 2012's JavaScript
            engines such as <a href="http://en.wikipedia.org/wiki/SpiderMonkey_(JavaScript_engine)">SpiderMonkey</a>
            (Firefox) and <a href="http://en.wikipedia.org/wiki/V8_(JavaScript_engine)">V8</a> (Chrome) - unfortunately, no
            amount of JavaScript compiling will increase the speed of DOM manipulations, and that is what the vast majority
            of the code in this project does (primarily it's the calls to jQuery UI's <code>button()</code> method to
            convert checkboxes and radio buttons to more consistently- and attractively-styled buttons).</p>
        <p>In fact, it can be enlightening to view the page with JavaScript disabled (and with one CSS tweak to make the
            tables actually visible), so that
            <a href="/img/portfolio/furcodegenerator_nojs.png">it becomes clear just how much
            of the page is rendered dynamically</a>. Of note is that all buttons revert back to being either radio buttons
            or checkboxes, and all without labels - their labels are read, by JavaScript, from HTML5 "data" attributes on
            the buttons themselves. The "Jump To Section" box also stops functioning and becomes empty, as it is populated
            solely based on the content of the page.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="/gallery-demo/">Simple Image Gallery</a>
            <span class="pfdate">2011???2012</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li><a href="http://www.php.net/manual/en/book.image.php">PHP GD</a></li>
            <li><a href="http://www.php.net/manual/en/book.exif.php">JPEG EXIF</a></li>
            <li><a href="http://jquery.com/">jQuery</a></li>
            <li>CSS3</li>
            <li>Mobile Support</li>
            <li><a href="https://developers.google.com/maps/documentation/geocoding/">Google Geocoding API</a></li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('gallery') ?>">
                <img src="<?= $pfThumbUrl('gallery') ?>" alt="Simple Image Gallery Screenshot" width="250" height="327">
            </a>
        </aside>
        <p>This script was designed to be a very simple, graphical replacement for the Apache Web server's
            <a href="http://httpd.apache.org/docs/2.0/mod/mod_autoindex.html">autoindex module</a> - i.e. the script could
            be placed inside a directory of image files and it would, when accessed, automatically display a list of the
            images in that directory, along with showing <strong>thumbnails</strong> and the <strong>EXIF data</strong>
            stored by digital cameras, if applicable.</p>
        <p>This script is also designed to display conveniently on <strong>mobile devices</strong>, where it transforms into
            a single column of images instead of its normal grid formation.</p>
        <p>As part of its display of digital cameras' EXIF data, if there is any <strong>geographical information</strong>
            stored in the image (rare with standalone digital cameras, but very common among smartphones' cameras), it will
            use the Google Geocoding API to translate the stored latitude/longitude coordinates into a human-readable
            address, as well as linking to the Google Map view of the exact location. This can be used to excellent effect
            when the photo's subject is a large feature of the landscape, such as
            <a href="/gallery-demo/?file=IMAG0217.jpg">this photograph of a recessed, circular
            area in Basingstoke Common</a>, where the
            <a href="http://maps.google.co.uk/maps?q=N51%C2%B015%2755.9%22+W1%C2%B03%2735.17%22">Google Maps satellite view
            for the image's coordinates</a> accurately shows the location from which the image was taken and offers an
            alternate perspective of the same area of land.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="/shopping-list-demo/">Simple Shopping List</a>
            <span class="pfdate">2011-2012</span>
        </h2>
        <ul class="pftech">
            <li>HTML5</li>
            <li><a href="http://jquery.com/">jQuery</a></li>
            <li><a href="http://jqueryui.com/">jQuery UI</a></li>
            <li>CSS3</li>
            <li>Mobile Support</li>
            <li>Offline Web App</li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('shoppinglist') ?>">
                <img src="<?= $pfThumbUrl('shoppinglist') ?>" alt="Simple Shopping List Screenshot" width="250" height="188">
            </a>
        </aside>
        <p>I created this Web app because I was unable to find a shopping list application for my phone with the features
            that I required without having <em>too many</em> features and, therefore, becoming bloated and confusing.
            Therefore, I designed this application to do exactly what I need it to do and, as such, it has no real
            configuration to speak of and the list of displayed products is stored as a PHP array in a hard-coded file on
            the server, with no user interface for editing it.</p>
        <p>This Web app utilises <strong>HTML5's "offline" support</strong> to allow it to be used even without an Internet
            connection, which is a vital feature when using the app inside a supermarket, where the mobile signal is often
            very poor or non-existent. It also uses custom mobile CSS to ensure that it is as user-friendly on mobile
            devices as is possible.</p>
    </section>

    <section class="portfoliosite cbs">
        <h2>
            <a href="/img/portfolio/viper-cart-screens/">Viper Cart</a>
            <span class="pfdate">2007-2012</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>PDO/MySQL</li>
            <li><abbr title="Craig Brass Systems">CBS</abbr> Framework</li>
            <li>JavaScript</li>
            <li><a href="http://jquery.com/">jQuery</a> + <a href="http://jqueryui.com/">UI</a></li>
            <li><a href="http://www.opensearch.org/Home">OpenSearch</a></li>
            <li><a href="http://www.sitemaps.org/">Sitemaps</a></li>
            <li>IPv6 Support</li>
            <li>HTML5 (FileReader, Ajax file uploads)</li>
            <li class="hasChildren">
                Payment Gateway Integration
                (<ul><!--
                    --><li><a href="https://checkout.google.com/">Google Checkout</a></li>
                    <li><a href="https://www.paypal-business.co.uk/add-paypal-to-online-shop/index.htm">PayPal
                            Checkout</a></li>
                    <li><a href="https://www.paypal-business.co.uk/accept-online-payments-with-paypal/index.htm">PayPal
                            Payments</a></li>
                    <li>HSBC</li>
                    <li><a href="http://www.nochex.com/">NoChex</a></li>
                    <li><a href="http://www.worldpay.com/">WorldPay</a></li>
                    <li>etc.</li><!--
                --></ul>)<!--
            --></li>
            <li>Courier Tracking Integration (City Link, USPS, DHL)</li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('vipercart') ?>">
                <img src="<?= $pfThumbUrl('vipercart') ?>" alt="Viper Cart Screenshot" width="250" height="495">
            </a>
        </aside>
        <p class="pfmoremargin"><a href="http://www.vipercart.com/index.php">Viper Cart</a>, an
            <strong>e-commerce</strong>/shopping cart platform, was the primary software product that I developed at my
            previous job, at <a href="http://www.craigbrasssystems.com/">Craig Brass Systems Ltd.</a>. It was created with
            two goals in mind: to replace the cart software that was powering the existing
            <a href="http://www.itselixir.com/">Its Elixir</a> store, and then to sell the finished software product to
            other businesses looking for a similar solution. The development of Viper Cart spanned several years, starting
            while I was working for the company during the industrial placement year of my university course, and then
            continuing after I graduated. For much of that time period I was working alone which, while slowing down
            development somewhat, did give me a great deal of freedom to implement functionality as I saw fit and removed
            the inevitible complexities of working as a team. However, for a couple of years we had some additional
            developers working for us, during which time my job also involved <strong>managing those developers</strong>,
            reviewing their code and ensuring that it was of a suitable quality and wasn't buggy or insecure.</p>
        <p>A major component of Viper Cart was the creation of a <strong>framework</strong> - a large collection of classes
            that were designed to be <strong>portable</strong> and easily used in other projects in order to speed up
            development by <strong>re-using common components</strong> and functionality. This became known as the Craig
            Brass Systems Framework, or "<strong>CBS Framework</strong>", as I've referred to it elsewhere on this page. By
            the end of the development process, the CBS Framework consisted of more than <strong>45,000 lines of PHP code
                spread over 150 classes</strong>, in addition to four third-party libraries
            (<a href="http://swiftmailer.org/">SwiftMailer</a>,
            <a href="http://sourceforge.net/projects/nusoap/">NuSOAP</a>, <a href="http://mailchimp.com/">MailChimp</a> and
            <a href="http://code.google.com/p/php-email-address-validation/">an email address validation class</a>). The
            framework allowed easy use of, amongst other things, our <strong>templating</strong> system, user-input
            <strong>validation</strong>, <strong>database</strong> access (wrapping
            <a href="http://uk.php.net/manual/en/book.pdo.php">PDO</a>, which I consider to be overly verbose in normal
            usage), error-handling/reporting, <strong>Ajax</strong> functions, caching, <strong>CAPTCHA</strong>
            image-generation, an extensive <strong>date/time</strong> class, access to functions for formatting filesizes,
            English sentences and similar, a class to easily and transparently handle <strong>IPv4 and IPv6
            addresses</strong> including range calculations and database storage, pagination, <strong>currency</strong>
            display and manipulation, and sessions. Several large <strong>JavaScript classes</strong>, totalling almost
            <strong>7,000 lines</strong>, were also created as part of the framework, providing <strong>Ajax</strong>,
            user-input <strong>validation</strong> and graphical <strong>dialog box</strong> (replacing JavaScript's native
            <code>alert()</code>, <code>prompt()</code> and <code>confirm()</code> functions, which Internet Explorer has
            started being awkward with) functionality, amongst other features.</p>
        <p>This framework and the JavaScript classes were created because, when the project was started in 2007, products
            such as the <a href="http://framework.zend.com/">Zend Framework</a> and <a href="http://jquery.com/">jQuery</a>
            were in their infancy and not well-known or widely-used. <a href="http://jqueryui.com/">jQuery UI</a> hadn't
            even been released at that time. Later in the development process, we did start using <strong>jQuery</strong>
            and <strong>jQuery UI</strong> to speed up development, and I wrote several <strong>plugins</strong> to ease the
            use of certain functionality.</p>
        <p>I also created
            <a href="http://www.coolapplab.com/version_control_subversion_database_importer_exporter/index.html">a PHP
            script for exporting a MySQL database to a format that makes sense for version control systems</a> (two files
            for each table - a file to define the structure and a file containing the table data, with one record per line,
            so that `diff`s between two versions would be readable and useful), as well as importing the same files back
            into the database when another developer has updated them. I also wrote a <strong>9,000-line installation
            script</strong> that downloads, extracts and installs the entirety of Viper Cart, sets up the database and
            configures the software as desired by the user; a <strong>6,000-line upgrade script</strong> which, rather than
            blindly replacing changed files, applies a "diff" of changes to the existing file (performing some initial
            sanity checks first), so that, in theory, <strong>users' own modifications to the software can be
            retained</strong>, which will hopefully result in adminstrators being more willing to upgrade/patch their
            installations, knowing that there's a good chance that upgrading <em>won't</em> revert their modifications; and
            a <strong>4,500-line PHP script</strong> to generate both the install and upgrade scripts by exporting requested
            revisions from version control and packaging up both the most recent version and the modifications between the
            two specified revisions.</p>
        <p>Viper Cart integrated with many <strong>payment gateways</strong>, including
            <a href="https://www.2checkout.com/">2CheckOut</a>, <a href="http://www.authorize.net/">Authorize.Net</a>,
            Direct One, HSBC, <a href="http://www.nochex.com/">NoChex</a>, PayPal, SagePay,
            <a href="http://www.worldpay.com/">WorldPay</a> and Google Checkout, and also integrated with <strong>Google's
            Products</strong> system. These payment gateways were implemented as part of a <strong>plug-in</strong> system
            that was designed to allow new gateways to be added with just the addition of an extra PHP class file, and no
            changes to the existing code. It was designed from the ground-up to be <strong>search engine-friendly</strong>
            and, to that end, each product, category, manufacturer, news article and information page had what we referred
            to as a "SEO name" - an alphanumeric string that was used to reference that entity in the URL. This allowed
            Viper Cart's URLs to look like "/manufacturer/example-manufacturer/index.html" instead of the more common, but
            arguably cheating, SEO URL method of "/manufacturer/123-example-manufacturer.html", with the entity's numeric ID
            in the URL and the system's page dispatcher would ignore the name and only read the ID. I also created a
            <a href="http://www.sitemaps.org/">Sitemaps</a> group of classes that produced the required XML for search
            engines supporting the Sitemaps system.</p>
        <p>Other notable features that I wrote for Viper Cart include giving it
            <a href="<?= $vcScreen('ACP - IP Address Management') ?>">full IPv6 support</a>,
            an <a href="http://www.opensearch.org/">OpenSearch</a> widget,
            a <a href="<?= $vcScreen('VC - Search Form') ?>">custom, advanced product search system</a>,
            a <a href="<?= $vcScreen('ACP - Users Online') ?>">Web browser user-agent analyser</a>
            (including support for several mobile devices) for statistics collection, and
            <a href="<?= $vcScreen('ACP - Admin Permissions') ?>">fine-grained access control lists</a>
            (ACLs) for the adminstration system. It also integrated with the
            <a href="http://www.postcodeanywhere.co.uk/">Postcode Anywhere</a> API and a database of USA <strong>ZIP
            codes</strong> and <strong>Canadian post codes</strong> in order to do post/zip code-to-address lookups for
            customers in the US, UK and Canada, saving customers time when entering addresses and helping to ensure that
            addresses are entered accurately.</p>
        <p>Having <a href="http://www.itselixir.com/">Its Elixir</a> using an early version of the software provided
            invaluable real-world usage and testing data, as well as an extensive database of product and customer data that
            greatly aided in development. The version of Viper Cart currently running on Its Elixir is a couple of years
            old, however most of the changes since then have been in the creation of the administator control panel; the
            customer side of the software is fully-functional.</p>
    </section>

    <section class="portfoliosite cbs">
        <h2>
            <a href="http://www.craigbrasssystems.com/">Craig Brass Systems</a>
            <span class="pfdate">2008???2011</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>PDO/MySQL</li>
            <li><abbr title="Craig Brass Systems">CBS</abbr> Framework</li>
            <li>
                <a href="http://www.invisionpower.com/products/board/"><abbr
                        title="Invision Power Board aka IP.Board">IPB</abbr></a> Integration
            </li>
            <li>Payment Gateway Integration
            </li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('craigbrassssytems') ?>">
                <img src="<?= $pfThumbUrl('craigbrasssystems') ?>" alt="Craig Brass Systems Screenshot" width="250" height="218">
            </a>
        </aside>
        <p>The Craig Brass Systems website is the corporate site for my former employer. It consists of various
            informational pages, pulls data from both <strong>IP.Board</strong> and an <strong>OpenFire XMPP</strong>
            messaging server, and has a login-protected customer area allowing customers to place orders, download purchased
            software products and submit support tickets. This site also uses the <strong>CBS Framework</strong>.</p>
        <p>As this site has an order process, it integrates with <strong>payment gateways</strong> to allow customers to
            securely make payments on a third party website (either PayPal or Worldpay) before being redirected back to this
            site to download their purchased software.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="/img/portfolio/lorddeathnet-screens/">Lord d'Eath's Stuff</a>
            <span class="pfdate">2004???2011</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li>XHTML</li>
            <li><a href="http://www.smarty.net/">Smarty</a></li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('lorddeathnet') ?>">
                <img src="<?= $pfThumbUrl('lorddeathnet') ?>" alt="Lord d'Eath's Stuff Screenshot" width="250" height="267">
            </a>
        </aside>
        <p>This is the previous incarnation of this very website, my personal blog-and-such site. I created it in 2004,
            using <strong>MySQL</strong> to store the blog posts, comments and gallery information, and with
            <strong>Smarty</strong> as the templating engine. The main system behind this site didn't then change much until
            2012 when the entire site was re-created (see its own entry above).</p>
        <p>One major change that I did make more recently was the addition of <strong>Search Engine Optimisation</strong>
            (SEO) techniques, primarily to the URLs used. This changed the URLs from being, for example,
            http://www.lorddeath.net/?page=blog to being http://www.lorddeath.net/Blog/.</p>
    </section>

    <section class="portfoliosite cbs">
        <h2>
            <a href="http://www.craigbrass.net/">Craig Brass' Blog</a>
            <span class="pfdate">2009</span>
        </h2>
        <aside>
            <a href="<?= $pfImgUrl('craigbrassnet') ?>">
                <img src="<?= $pfThumbUrl('craigbrassnet') ?>" alt="Craig Brass' Blog Screenshot" width="250" height="238">
            </a>
        </aside>
        <ul class="pftech">
            <li>PHP</li>
            <li>PDO/MySQL</li>
            <li>XHTML</li>
            <li><abbr title="Craig Brass Systems">CBS</abbr> Framework</li>
            <li>
                <a href="https://dev.twitter.com/">Twitter</a>,
                <a href="http://www.flickr.com/services/api/">Flickr</a> &amp;
                <a href="https://developers.google.com/youtube/">YouTube</a> APIs
            </li>
        </ul>
        <p>I created this website in a few weeks for my previous employer to be used as his personal site to host a blog and
            a few information pages. It utilises the aforementioned <strong>CBS Framework</strong>, and pulls in data from
            <strong>Twitter</strong>, <strong>Flickr</strong> and <strong>YouTube</strong>. The graphical design of this
            site was created by a third-party designer, though I wrote most of the HTML for it.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="/files/Level_3_Project.pdf">My Final Year University Project</a>
            <span class="pfdate">2008-2009</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li>XHTML</li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('thirdyearproject') ?>">
                <img src="<?= $pfThumbUrl('thirdyearproject') ?>" alt="Third Year Project Screenshot" width="250" height="499">
            </a>
        </aside>
        <p>My <a href="/files/Level_3_Project.pdf">final-year project</a> at university
            consisted of the creation of an improved version of Amazon.com's <strong>product recommendation engine</strong>.
            Amazon's existing product recommendation system does not (or, at least, did not in 2008 when I started the
            project) helpfully handle gift purchases. This would cause your own product recommendations to be polluted by
            suggestions of products that would appeal to the recipient of the gift you've bought, instead of ones that would
            appeal to yourself.</p>
        <p>Amazon offers/offered a checkbox for each product in your purchase history to exclude it from recommendations,
            however I felt that this could be taken a step further by using that purchase to suggest products to the gift's
            recipient, instead of simply ignoring the purchase entirely. I also included ideas for extending the system with
            additional <strong>social networking</strong> features, such as reminding people of a friend's upcoming birthday
            along with suggesting a suitable gift.</p>
        <p>This project involved the use of MySQL <strong>stored procedures</strong> for performance reasons, and the PHP
            code included in the appendices of <a href="/files/Level_3_Project.pdf">the report
                document</a> is a reasonable <strong>guide of my personal code style and quality</strong> (whereas the PHP
            projects on GitHub that are linked to at the side of this page are mostly personal projects with little need to
            be nicely-structured or documented, so they generally aren't).</p>
    </section>

    <article class="portfoliosite personal">
        <h2>
            <a href="http://www.web2messenger.com/">Web2Messenger</a>
            <span class="pfdate">2005???2008</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
            <li><a href="http://en.wikipedia.org/wiki/Microsoft_Notification_Protocol">MSN Messenger Service</a></li>
            <li>XHTML</li>
            <li><a href="http://www.smarty.net/">Smarty</a></li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('web2messenger') ?>">
                <img src="<?= $pfThumbUrl('web2messenger') ?>" alt="Web2Messenger Screenshot" width="250" height="270">
            </a>
        </aside>
        <p>Web2Messenger was a joint project between me and a Dutch friend of mine, Frans-Willem Hardijzer, that allows
            users to receive anonymous messages from their own Web sites directly to their <strong>.NET Messenger
            Service</strong> client such as <strong>Windows Live Messenger</strong>, as well as utilising
            dynamically-generated images detailing their online status.  Due to time constraints and others reasons, we had
            to shut down Web2Messenger in 2011, though its development had been stagnant since 2008 and it was seeing very
            little use. By the time we shut it down, the service had delivered almost <strong>70,000 messages to more than
            16,000 users</strong>, making it by far my most-used website.</p>
        <p>The server-side code is PHP utilising <strong>Smarty</strong> and <strong>MySQL</strong> with the client-side
            code being a mix of XHTML 1.0, CSS and JavaScript, and a RSS feed is available.  The back-end "bot" processes
            that connect to the Messenger Service were originally written by me in <strong>PHP</strong>, however they were
            subsequently re-written, by Frans-Willem, in C++ for performance reasons.  Web2Messenger has also been
            translated into Spanish, French and Portuguese and the language of the whole Web site can be changed instantly
            and updated easily if necessary.</p>
        <p>Towards the end of the useful lifetime of Web2Messenger, I created a <strong>Facebook application</strong> that
            inserted the user's Messenger status on their Facebook profiles, together with a link back to that user's
            Web2Messenger page, allowing profile visitors to send them instant messages.</p>
        <p>Even though the service has been shut down, the website is still running for historical interest. I also have a
            more in-depth article about Web2Messenger on the
            <a href="{{action('Web2messengerController@index')}}">Web2Messenger page of
            this site</a>.</p>
    </article>

    <section class="portfoliosite personal">
        <h2>
            <a href="http://www.udcx.com/">Unofficial Dark Century: X</a>
            <span class="pfdate">2004???2006</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>MySQL</li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('udcx') ?>">
                <img src="<?= $pfThumbUrl('udcx') ?>" alt="uDCX Screenshot" width="250" height="315">
            </a>
        </aside>
        <p>A fan-site for an on-line Role-Playing Game (RPG) I used to play regularly, Neverwinter Nights, uDCX is primarily
            a collection of guides and similar documents and, as such, doesn't use MySQL very much, but the standard PHP,
            XHTML 1.0, CSS and JavaScript combination is still employed.  The colour scheme of this site was chosen to fit
            with the game itself, which has a very dark interface - I do not, generally, make a habit of designing sites
            with such a heavy use of black as this one does. The code behind this website was mostly written by me, with a
            friend and fellow gamer writing most of the content and playing a large part in the site's graphical design.</p>
    </section>

    <section class="portfoliosite personal">
        <h2>
            <a href="http://www.udcx.com/GMaps/">Google Maps API-powered uDCX Maps</a>
            <span class="pfdate">2006</span>
        </h2>
        <ul class="pftech">
            <li>PHP</li>
            <li>XHTML</li>
            <li>JavaScript</li>
            <li><a href="https://developers.google.com/maps/">Google Maps API</a></li>
        </ul>
        <aside>
            <a href="<?= $pfImgUrl('udcx_gmaps') ?>">
                <img src="<?= $pfThumbUrl('udcx_gmaps') ?>" alt="uDCX Maps Screenshot" width="250" height="207">
            </a>
        </aside>
        <p>An extension to the above site is this map of the DC:X game-world which is powered by the <strong>Google Maps
            API</strong>, including a completely custom "skin" (designed to replicate the in-game map interface) and
            <strong>tileset</strong> (which was created by manually piecing together screenshots of the in-game map - I had
            a lot more free time back then...). Using the API itself and creating the interactivity of the rest of the page
            vastly improved my JavaScript knowledge as well as allowing me to learn how to utilise the Google Maps API
            itself.</p>
    </section>

@endsection
