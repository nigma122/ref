@extends('layouts.main')
@section('content')
<h2 style="color:red;">Новость с id = {{$id}}</h2>
<div class="row">
  <form method="post" action="{{route('admin.news.store')}}">
    @csrf
    <div class="form-group">
      <label style="color:red;" for="title">Коментарий</label>
      <input type="text" class="form-control" name="user_name" id="user_name" value="">
    </div>
    <div class="form-group">
      <label style="color:red;" for="description">Коментарий</label>
      <textarea name="description" class="form-control" id="description" rows="8" cols="80"></textarea>
    </div>
    <button type="button" class="btn btn-primary" name="button">Сохранить</button>
  </form>
</div>
@endsection
