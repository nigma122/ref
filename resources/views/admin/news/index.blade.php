@extends('layouts.admin')
@section('content')
  <h1>Новости</h1>
  <a href="{{route('admin.news.create')}}">Добавить Новую</a>
  <div class="row">
    @include('inc.message')
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Заголовок</th>
            <th>Категория</th>
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
            <td>{{ optional($news->category)->title }}</td>
            <td>{{$news->status}}</td>
            <td>{{$news->author}}</td>
            <td></td>
            <td><form method="POST" action="{{ route('admin.news.destroy', ['news' => $news->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">
        Удалить
    </button>
</form>
              <a href="{{ route('admin.news.edit', ['news' => $news->id]) }}" style="font-size:12px;">ред</a></td>
          </tr>
          @empty
          <tr>
            <td colspan="4">Новостей не найдено</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      {{ $newsList->links() }}
    </div>
  </div>
@endsection
