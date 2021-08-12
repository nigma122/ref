@extends('layouts.admin')
@section('content')
<h1>Категории</h1>
<a href="{{route('admin.categories.index')}}">Добавить Категорию</a>
<div class="row">
  <form method="post">
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
