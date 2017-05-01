@extends('layout.master')

@section('content')

    <h2>Posts in ‘{{$categoryName}}’</h2>

{{$posts->links()}}

@each('blog.list-item', $posts, 'post', 'blog.list-empty')

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
