<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Http\Controllers\Controller;

class News extends Model
{
    use HasFactory;
    protected $table = "new";

    public static array $allowedFields = ['id', 'title', 'author', 'status', 'description'];
    protected $fillable =[
      'categiry_id', 'title', 'description', 'author', 'status'
    ];

    public function category(): BelongsTo
    {
      return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
