@extends('layout.master')

@section('content')

<article>
<div class="blogpost">
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
    </h3>
    <div class="blogpostcontent">
        @if ($post->isHtml())
            {!! $post->body !!}
        @elseif ($post->isMarkdown())
            {!! Markdown::convertToHtml($post->body) !!}
        @else
            <div>{!! BBCode::parse($post->body) !!}</div>
        @endif
    </div>
</div>
</article>

<section>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
    @if (env('APP_ENV') !== 'production')
        var disqus_developer = 1;
    @else
        var disqus_url = "{{url()->full()}}";
    @endif
    var disqus_identifier = '{{$post->id}}';
    var disqus_title = "{{$post->title}}";
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

@endsection
