@extends('layouts.admin')
@section('content')
<h1>Новости</h1>
<a href="{{route('admin.news.index')}}">Добавить Новость</a>
<div class="row">
  <form method="post" action="{{route('admin.news.store')}}">
    @csrf
    <div class="form-group">
      <label for="title">Заголовок</label>
      <input type="text" class="form-control" name="title" id="title" value="">
    </div>
    <div class="form-group">
      <label for="description">Описание</label>
      <textarea name="description" class="form-control" id="description" rows="8" cols="80"></textarea>
    </div>
    <button type="button" class="btn btn-primary" name="button">Сохранить</button>
  </form>
</div>
@endsection
