<?php echo $this->paginator->render() ?>

<?php foreach ($this->paginator as $entry) : ?>
    <article class="blogpost">
	    <h2>
		    <a href="<?php echo $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$entry->id, 'title'=>$entry->title), 'blogpost', true) ?>">
			    <?php echo $this->escape($entry->title) ?>
		    </a>
	    </h2>
        <h3 class="blogsubheading">
            <span class="postdate"><span class="postdatetitle">Posted at</span> <?php echo $entry->date->toString("EEE, d MMM yyyy, HH:mm:ss") ?></span>
            <span class="commentslink"><a href="<?php echo $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$entry->id, 'title'=>$entry->title), 'blogpost', true) ?>#disqus_thread" data-disqus-identifier="<?php echo $entry->id ?>">Comments</a></span>
        </h3>
        <div class="blogpostcontent">
            <?php if ($entry->isHtml): ?>
                <?php echo $entry->shortBody() ?>
            <?php else: ?>
	            <div><?php echo $this->bbcode->render($entry->shortBody()) ?></div>
            <?php endif; ?>
            <p class="readmorelink"><a href="<?php echo $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$entry->id, 'title'=>$entry->title), 'blogpost', true) ?>">Read more...</a></p>
        </div>
    </article>
<?php endforeach; ?>

<script type="text/javascript">
<?php if (APPLICATION_ENV != 'production'): ?>
var disqus_developer = 1;
<?php endif; ?>
var disqus_shortname = 'andrewgillard';
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

<?php echo $this->paginator->render() ?>
