<h1>List news</h1>
<br>

<h2>Категории</h2>

<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<?php foreach ($news as $n) : ?>
  <div class="">

    <strong><a href="<?=route('news.show', [
      'id' => $n['id']
      ])?>"><?=$n['title']?></a></strong>
    <p><?=$n['description']?></p>
  </div>
<?php endforeach; ?>
</br>
