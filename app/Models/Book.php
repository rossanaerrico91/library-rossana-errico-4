<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable=['title','pages','image','author_id'];

    public function categories():BelongsToMany{
        return $this->belongsToMany(Category::class,'category_book');
    }

    public function author():BelongsTo {
        return $this->belongsTo(Author::class);
    }
}
