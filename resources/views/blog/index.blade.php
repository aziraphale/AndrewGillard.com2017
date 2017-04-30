@extends('layout.master')

@section('content')

{{$posts->links()}}

@foreach ($posts as $post)
    <article class="blogpost">
	    <h2>
		    <a href="{{action('BlogController@view', ['id'=>$post->id, 'slug'=>$post->slug])}}">
			    {{$post->title}}
		    </a>
	    </h2>
        <h3 class="blogsubheading">
            <span class="postdate"><span class="postdatetitle">Posted at</span> {{$post->publication_date->format("D, j M Y H:i:s")}}</span>
            <span class="commentslink"><a href="{{action('BlogController@view', ['id'=>$post->id, 'slug'=>$post->slug])}}#disqus_thread" data-disqus-identifier="{{$post->id}}">Comments</a></span>
        </h3>
        <div class="blogpostcontent">
            @if ($post->isHtml())
                {!! $post->shortBody() !!}
            @elseif ($post->isMarkdown())

            @else
	            <div>{!! BBCode::parse($post->shortBody()) !!}</div>
            @endif
            <p class="readmorelink"><a href="{{action('BlogController@view', ['id'=>$post->id, 'slug'=>$post->slug])}}">Read more...</a></p>
        </div>
    </article>
@endforeach

<script type="text/javascript">
@if (env('APP_ENV') !== 'production')
    var disqus_developer = 1;
@endif
var disqus_shortname = 'andrewgillard';
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

{{$posts->links()}}

@endsection
