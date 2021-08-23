<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function getCategories()
    {
      return \DB::table($this->table)->get();
    }

    public function getCatigoryById(int $id)
    {
      return \DB::table($this->table)->find($id);
    }
}
