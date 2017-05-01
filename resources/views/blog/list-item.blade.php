<?php
/** @type \App\BlogPost $post */
?>
<article class="blogpost">
    <h2>
        <a href="{{action('BlogController@view', ['year'=>$post->year(), 'month'=>$post->month(), 'slug'=>$post->slug])}}">
            {{$post->title}}
        </a>
    </h2>
    <h3 class="blogsubheading">
        <span class="postdate"><span class="postdatetitle">Posted on</span> {{$post->publication_date->format('D, j M Y \a\t H:i:s')}}</span>

        <span class="categories">
            in
            @foreach ($post->categories as $category)
                <a href="{{action('BlogController@category', ['category'=>\App\BlogPost::categoryNameToSlug($category)])}}">{{$category}}</a>
            @endforeach
        </span>

        <span class="commentslink"><a href="{{action('BlogController@view', ['year'=>$post->year(), 'month'=>$post->month(), 'slug'=>$post->slug])}}#disqus_thread" data-disqus-identifier="{{$post->id}}">Comments</a></span>
    </h3>
    <div class="blogpostcontent">
        @if ($post->isHtml())
            {!! $post->shortBody() !!}
        @elseif ($post->isMarkdown())
            {!! Markdown::convertToHtml($post->shortBody()) !!}
        @else
            <div>{!! BBCode::parse($post->shortBody()) !!}</div>
        @endif
        <p class="readmorelink"><a href="{{action('BlogController@view', ['year'=>$post->year(), 'month'=>$post->month(), 'slug'=>$post->slug])}}">Read more...</a></p>
    </div>
</article>
