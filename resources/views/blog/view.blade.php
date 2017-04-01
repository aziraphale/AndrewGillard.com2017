<article>
<div class="blogpost">
    <h2>
        <a href="<?php echo $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$this->entry->id, 'title'=>$this->entry->title), 'blogpost', true) ?>">
            <?php echo $this->escape($this->entry->title) ?>
        </a>
    </h2>
    <h3 class="blogsubheading">Posted at <?php echo $this->entry->date->toString("EEE, d MMM yyyy, HH:mm:ss") ?></h3>
    <div class="blogpostcontent">
        <?php if ($this->entry->isHtml): ?>
            <?php echo $this->entry->body ?>
        <?php else: ?>
            <p><?php echo $this->bbcode->render($this->entry->body) ?></p>
        <?php endif; ?>
    </div>
</div>
</article>

<section>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
    <?php if (APPLICATION_ENV != 'production'): ?>
        var disqus_developer = 1;
    <?php else: ?>
        var disqus_url = "<?php echo $this->serverUrl() . $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$this->entry->id, 'title'=>$this->entry->title), 'blogpost', true) ?>";
    <?php endif; ?>
    var disqus_identifier = '<?php echo $this->entry->id ?>';
    var disqus_title = "<?php echo $this->escape($this->entry->title) ?>";
    var disqus_shortname = 'andrewgillard';
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
</section>

<?php if (count($this->entry->findTopLevelComments())): ?>
    <section>
        <h3>Archived Comments</h3>
        <div class="blogcomments">
            <?php function printComments($view, $comments) { ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="comment">
                        <h4><?php echo $comment->title ?> by <?php echo $comment->posterName ?> at <?php echo $comment->date ?></h4>
                        <p><?php echo $view->bbcode->render($comment->comment) ?></p>

                        <?php if (count($comment->findChildComments())): ?>
                            <?php printComments($view, $comment->findChildComments()) ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
            <?php printComments($this, $this->entry->findTopLevelComments()); ?>
        </div>
    </section>
<?php endif; ?>
