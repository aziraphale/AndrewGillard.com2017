@component('layout.components.sidebar-box')
    @slot('title')
        Who Am I?
    @endslot

    <p>
        <a href="<?php /*echo $this->url(array('controller'=>'about'), 'default', true)*/ ?>"><img src="/img/about-box-photo.jpg" alt="[Profile photo]" class="about-box-photo"></a>
        Hi! I'm Andrew, a Web devel&shy;oper and PHP prog&shy;rammer currently living in the south of England.
    </p>

    <p class="about-box-morelink">
        <a href="<?php /*echo $this->url(array('controller'=>'about'), 'default', true)*/ ?>">Want to know more?</a>
    </p>

    @if (env('LOOKING_FOR_WORK'))
        <p>
            I'm available for full-time, contract or permanent work as an experienced, Zend Certified, PHP Web Developer!
            Interested?
            <a href="mailto:cv@andrewgillard.com">Email me</a>,
            or <a href="<?php /*echo $this->url(array('controller'=>'cv'), 'default', true)*/ ?>">see my CV</a>
            or <a href="<?php /*echo $this->url(array('controller'=>'portfolio'), 'default', true)*/ ?>">portfolio</a>.
        </p>
    @endif
@endcomponent
