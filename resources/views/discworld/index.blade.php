<article>
    <p>This is the Discworld MUD section of my site.</p>
    <ul>
        <li>
            <a href="<?php echo $this->url(array('action'=>'cre-cards')) ?>">Creator Cards</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'deaths')) ?>">My Deaths</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'gruntha-deaths')) ?>">Gruntha's Deaths</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'information')) ?>">Information</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'language-graphs')) ?>">Language Graphs</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'locations')) ?>">Passage Locations</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'logs')) ?>">Logs</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'maps')) ?>">Maps</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'rods')) ?>">Faith Rods</a>
        </li>
        <li>
            <a href="<?php echo $this->url(array('action'=>'status-bar-script')) ?>">Status Bar Script</a>
        </li>
    </ul>
</article>

<?php echo $this->partial("last-mod-time.phtml", array("filename"=>__FILE__)) ?>
