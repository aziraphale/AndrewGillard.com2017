@component('layout.components.sidebar-box')
    @slot('title')
        Latest Flickr Uploads
    @endslot

<?php
/*$photos = array();
try {
    $flickr = new Zend_Service_Flickr(Zend_Controller_Front::getInstance()->getParam('bootstrap')->getOption('flickrApiKey'));
    $photos = $flickr->userSearch(Zend_Controller_Front::getInstance()->getParam('bootstrap')->getOption('flickrUsername'), array('per_page'=>10, 'page'=>1));
} catch (Exception $ex) {
    if (APPLICATION_ENV != 'production') {
        throw $ex;
    }
}*/
?>

<?php /*if (count($photos)): ?>
    <div class="flickr">
        <?php foreach ($photos as $k => /** @var Zend_Service_Flickr_Result * / $photo): ?>
            <a href="<?php echo $this->escape($photo->Large->clickUri) ?>" title="<?php echo $this->escape($photo->title) ?>; taken at <?php echo $photo->datetaken ?>">
                <img src="<?php echo preg_replace('#(?<=^http)(?=://)#iS', 's', $this->escape($photo->Square->uri)) ?>" alt="[Flickr Photo]" width="75" height="75">
            </a>
            <?php if (($k+1) % 2 == 0): ?>
                <br>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No photos found.</p>
<?php endif; */ ?>
@endcomponent
