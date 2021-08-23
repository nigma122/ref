<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "new";

    public function getNews()
    {
      return \DB::table($this->table)->select(['id', 'title', 'author', 'status', 'description'])->get();
    }

    public function getNewsById(int $id)
    {
      return \DB::table($this->table)->select(['id', 'title', 'author', 'status', 'description'])->find($id);
    }
}
