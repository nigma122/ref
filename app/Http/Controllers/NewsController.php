<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index()
  {
    $this->newsList;
    $this->newsList1;
    $result = array_merge($this->newsList, $this->newsList1);
    $this->result = $result;
  //  print_r($result);
    return view ('news.index', [
      'news' =>$this->result
    ]);
  }

  public function show(int $id)
  {
    $newsList = [];
    foreach ($this->newsList as $news) {
      if ($news['id'] === $id) {
        $newsList[] = $news;
      }
    }

    if(empty($newsList))
    {
      abort(404);
    }

    return view ('news.show', [
      'id' => $id
    ]);
  }

  public function category()
  {
    return view ('news.category', [
      'news' =>$this->newsList
    ]);
  }

}
