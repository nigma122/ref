@extends('layouts.admin')
@section('content')
<h1>редактировать Новости</h1>

<div class="row">
  @include('inc.message')
  <form method="post" action="{{route('admin.news.update', ['news' => $news])}}">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="category_id">Категории</label>
      <select class="form-control" id="category_id" name="category_id">
        <option value="0">Выбрать категорию</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}"
          @if($news->category_id === $category->id) selected @endif>
          {{$category->title}}
        </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">Заголовок</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
      @error('title')
      <div class="alert alert-danger"> {{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="author">Автор</label>
      <input type="text" class="form-control" name="author" id="author" value="{{ $news->author }}">
      @error('author')
      <div class="alert alert-danger" style="color:red"> {{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Изображение</label>
      <input type="text" class="form-control" name="image" id="image" value="{{ $news->image }}">
      @error('image')
      <div class="alert alert-danger" style="color:red"> {{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Статус</label>
      <select class="form-control" id="status" name="status">
        <option value="DRAFT" @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
        <option value="PUBLISHED" @if($news->status === 'PUBLISHED') selected @endif>PUBLISHED</option>
        <option value="DELETED" @if($news->status === 'DELETED') selected @endif>DELETED</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Описание</label>
      <textarea name="description" class="form-control" id="description" rows="8" cols="80">{{!! $news->description !!}}</textarea>
    </div>
    <button  class="btn btn-primary" name="button">Сохранить</button>
  </form>
</div>
@endsection
