<article>
    <h2>Image View</h2>
    <?php if (!$this->image): ?>
        <p>Invalid image.</p>
    <?php else: ?>
        <p><a href="<?php echo $this->url(array('controller'=>'gallery', 'action'=>'album', 'id'=>$this->image->album, 'atitle'=>$this->image->findAlbum()->name), 'galleryalbum', true) ?>/">&laquo; Back</a></p>
        <p class="gallery_img" id="gallery_image">
            <a href="<?php echo $this->baseUrl() ?>/img/gallery/<?php echo $this->escape($this->album->dirName) ?>/<?php echo $this->escape($this->image->filename) ?>">
                <img id="gallery_img" src="<?php echo $this->baseUrl() ?>/img/gallery/<?php echo $this->escape($this->album->dirName) ?>/<?php echo $this->escape($this->image->filename) ?>" alt="Image #<?php echo $this->image->id ?>">
            </a>
        </p>
        <script type="text/javascript">
        var img = document.getElementById('gallery_img');
        img.onload = function() { doResize(img, document.getElementById('gallery_image')); }
        </script>
        <div class="gallery_data_surround">
            <table class="gallery_data">
                <tbody>
                    <?php foreach ($this->exifData as $key => $value): ?>
                        <tr>
                            <th><?php echo $this->escape($key) ?></th>
                            <td><?php echo $this->escape($value) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p><a href="<?php echo $this->url(array('controller'=>'gallery', 'action'=>'album', 'id'=>$this->image->album, 'atitle'=>$this->image->findAlbum()->name), 'galleryalbum', true) ?>/">&laquo; Back</a></p>
    <?php endif; ?>
</article>
