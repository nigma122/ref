@extends('layouts.main')
@section('content')
@forelse($newsList as $news)
<img src="img/blog/1.jpg" alt="">
<div class="post-date">April 1, 2019</div>
<h3><a href="{{route('news.show', ['news' => $news->id])}}"></a></h3>
<div class="post-metas">
  <h3>{{$news->title}}</h3>
</div>
<p>{{$news->description}} </p>
<a href="{{route('news.show', ['news' => $news->id])}}" class="site-btn">Read More</a>
@empty
@endforelse
@endsection
