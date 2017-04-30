<?= '<?xml version="1.0" encoding="UTF-8"?>'."\r\n" ?>
<rss version="2.0">
    <channel>
        <title>Andrew Gillard's Blog</title>
        <description>Andrew Gillard's blog about stuff</description>
        <link>http://www.andrewgillard.com/</link>
        @foreach ($posts as $post)
            <item>
                <title>{{$post->title}}</title>
                <link>{{action('BlogController@view', ['id'=>$post->id, 'slug'=>$post->slug])}}</link>
                <pubDate>{{$post->publication_date->format(\Carbon\Carbon::RSS)}}</pubDate>
                <guid isPermaLink="true">{{action('BlogController@view', ['id'=>$post->id])}}</guid>
                <description><![CDATA[
                    {{preg_replace('#\[/?.+?\]#', '', strip_tags($entry->shortBody()))}}
                ]]></description>
            </item>
        @endforeach
    </channel>
</rss>
