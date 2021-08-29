@extends('layouts.admin')
@section('content')
<h1>Новости</h1>

<div class="row">
  <form method="post" action="{{route('admin.news.store')}}">
    @csrf
    <div class="form-group">
      <label for="category_id">Категории</label>
      <select class="form-control" id="category_id" name="category_id">
        <option value="0">Выбрать категорию</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">Заголовок</label>
      <input type="text" class="form-control" name="title" id="title" value="">
    </div>
    <div class="form-group">
      <label for="author">Автор</label>
      <input type="text" class="form-control" name="author" id="author" value="">
    </div>
    <div class="form-group">
      <label for="image">Изображение</label>
      <input type="text" class="form-control" name="image" id="image" value="">
    </div>
    <div class="form-group">
      <label for="image">Статус</label>
      <select class="form-control" id="status" name="status">
        <option value="DRAFT" @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>
        <option value="PUBLISHED" @if(old('status') === 'PUBLISHED') selected @endif>PUBLISHED</option>
        <option value="DELETED" @if(old('status') === 'DELETED') selected @endif>DELETED</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Описание</label>
      <textarea name="description" class="form-control" id="description" rows="8" cols="80"></textarea>
    </div>
    <button type="button" class="btn btn-primary" name="button">Сохранить</button>
  </form>
</div>
@endsection
