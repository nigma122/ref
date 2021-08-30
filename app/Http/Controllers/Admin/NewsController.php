<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $newsList = News::with('category')->paginate(
      config('paginate.admin.categories')
    );
        return view('admin.news.index', [
          'newsList'=> $newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
        return view('admin.news.create', [
          'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {


        $news = News::create($request->validated());

        if($news)
        {
          return redirect()->route('admin.news.index')->with('success', __('message.admin.news.create.success'));
        }

        return brack()->withInput()->with('error', __('message.admin.news.create.fail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {

        $categories = Category::all();
        return view('admin.news.edit', [
          'news' => $news,
          'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateNewsRequest  $request
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {

      $data = $request->validated();
      $news = $news->fill($data)->save();

      if($news)
      {
      return redirect()->route('admin.news.index')->with('success',  __('message.admin.news.update.success'));
      }
      return brack()->withInput()->with('error', __('message.admin.news.update.file'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


      $news = News::find($id);
      $news->delete();
      return redirect()->route('admin.news.index')->with('success', 'Новость успешно удалена');
    }
}
