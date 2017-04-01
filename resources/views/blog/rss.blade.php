<?php echo '<?xml version="1.0" encoding="UTF-8"?>'."\r\n" ?>
<rss version="2.0">
    <channel>
        <title>Andrew Gillard's Blog</title>
        <description>Andrew Gillard's blog about stuff</description>
        <link>http://www.andrewgillard.com/</link>
        <?php foreach ($this->paginator as $entry) : ?>
            <item>
                <title><?php echo $this->escape($entry->title) ?></title>
                <link><?php echo $this->serverUrl() ?><?php echo $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$entry->id), 'default', true) ?></link>
                <pubDate><?php echo $entry->date->toString(Zend_Date::RSS) ?></pubDate>
                <guid isPermaLink="true"><?php echo $this->serverUrl() ?><?php echo $this->url(array('controller'=>'blog', 'action'=>'view', 'id'=>$entry->id), 'default', true) ?></guid>
                <description><![CDATA[
                    <?php echo $this->escape(preg_replace('#\[/?.+?\]#', '', strip_tags($entry->shortBody()))) ?>
                ]]></description>
            </item>
        <?php endforeach; ?>
    </channel>
</rss>

<?php die(); ?>
