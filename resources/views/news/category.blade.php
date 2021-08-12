<h2>Категория = </h2>
@foreach ($news as $n)
  <div class="">

    <strong><a href="{{route('news.show', [
      'id' => $n['id']
      ])}}"><?=$n['title']?></a></strong>
    <p><?=$n['description']?></p>
  </div>
  
@endforeach
</br>
