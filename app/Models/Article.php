<?php

// app/Models/Article.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getUpperTitle()
    {
        dd($this->title);  // Debug title when called

        return strtoupper($this->title);
    }
    protected $fillable = [
    'title',
    'body',
    'category_id',
];

}