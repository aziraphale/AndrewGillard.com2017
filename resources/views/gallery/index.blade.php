<?php
$outerCache = Zend_Cache::factory("Output", "File", array('lifetime'=>300), array('cache_dir'=>APPLICATION_PATH.'/tmp'));
$innerCache = Zend_Cache::factory("Output", "File", array('lifetime'=>31536000 /* 1 year */), array('cache_dir'=>APPLICATION_PATH.'/tmp'));
if (!($outerCache->start("albums"))) {
    ?>

<article class="flickralbums">
    <h2>Flickr Albums (Sets)</h2>
    <?php if ($this->flickrAlbums): ?>
        <?php foreach ($this->flickrAlbums as /** @var AG_Flickr_PhotosetResult */ $album): ?>
            <?php if (!$innerCache->start("album_{$album->id}_{$album->date_update}")): /* nice hacky cache id, there... */ ?>
                <?php $img = $album->Small(); ?>
                <div class="albumlistentry">
                    <a href="http://www.flickr.com/photos/lorddeath/sets/<?php echo $album->id ?>" title="<?php echo $this->escape($album->description) ?>">
                        <img src="<?php echo $img->uri ?>" width="<?php echo $img->width ?>" height="<?php echo $img->height ?>" alt="<?php echo $this->escape($album->title) ?>" />
                        <br />
                        <span class="albumlisttitle"><?php echo $this->escape($album->title) ?></span>
                    </a>
                </div>
                <?php $innerCache->end(); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No Flickr albums to list.</p>
    <?php endif; ?>
</article>

<article class="localalbums">
    <h2>Local Albums</h2>
    <?php if ($this->albums): ?>
        <p>Note that I don't really use this gallery very much (if at all) any more; most of my photo uploads go to <a href="http://www.flickr.com/photos/lorddeath/">my Flickr profile</a>.</p>
        <?php foreach ($this->albums as $album): ?>
            <?php $img = $album->findFirstImage(); ?>
            <div class="albumlistentry">
                <a href="<?php echo $this->url(array('action'=>'album', 'id'=>$album->id, 'atitle'=>$album->name), 'galleryalbum') ?>">
                    <img src="<?php echo $this->baseUrl() ?>/img/gallery/<?php echo $this->escape($album->dirName) ?>/<?php echo $this->escape($img->filename)?>.thumb" width="<?php echo $img->tWidth ?>" height="<?php echo $img->tHeight ?>" alt="<?php echo $this->escape($album->name) ?>" />
                    <br />
                    <span class="albumlisttitle"><?php echo $this->escape($album->name) ?></span>
                </a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No albums to list.</p>
    <?php endif; ?>
</article>

<?php
    $outerCache->end();
}
?>
