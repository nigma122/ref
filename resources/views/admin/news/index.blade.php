@extends('layouts.admin')
@section('content')
  <h1>Новости</h1>
  <a href="{{route('admin.news.create')}}">Добавить Новую</a>
  <div class="row">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Заголовок</th>
            <th>Статус</th>
            <th>Автор</th>
            <th>Дата добовления</th>
            <th>Управление</th>
          </tr>
        </thead>
        <tbody>
          @forelse($newsList as $news)
          <tr>
            <td>{{$news->title}}</td>
            <td>{{$news->status}}</td>
            <td>{{$news->author}}</td>
            <td>{{now()->format('d-m-Y')}}</td>
            <td><a href=""style="font-size:12px; color:red;">удалить </a><a href="" style="font-size:12px;">ред</a></td>
          </tr>
          @empty
          <tr>
            <td colspan="4">Новостей не найдено</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
