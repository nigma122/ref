@extends('layouts.admin')
@section('content')
<h1>Категории</h1>
<a href="{{route('admin.categories.index')}}">К списку категории</a>
<div class="row">
  @include('inc.message')
  <div class="col-12">

  <form method="post" action="{{ route('admin.categories.store') }}">
    @csrf
    <div class="form-group">
      <label for="title">Заголовок</label>
      <input type="text" class="form-control" name="title" id="title" value="">
    </div>
    <div class="form-group">
      <label for="description">Описание</label>
      <textarea name="description" class="form-control" id="description" rows="8" cols="80"></textarea>
    </div>
    <button  class="btn btn-primary" name="button">Сохранить</button>
  </form>
  </div>
</div>
@endsection
