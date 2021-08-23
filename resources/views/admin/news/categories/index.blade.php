@extends('layouts.admin')
@section('content')
<h1>Категории</h1>
<a href="{{route('admin.categories.create')}}">Добавить категорию</a>

<div class="table-response">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#ID</th>
      <th>Заголовок</th>
      <th>Текст</th>
      <th>Управление</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->title}}</td>
      <td>{{$category->description}}</td>
      <td><a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">ред</a>
        <td><a href="javascript:;">уд</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="4">Записей нет</td>
    </tr>
    @endforelse
  </tbody>
</table>
</div>


@endsection
