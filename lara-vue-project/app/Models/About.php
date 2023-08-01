<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable=['title','details','title_1','title_2','title_3','title_4','photo'];
    public function search()
    {
        return $this->hasMany(Search::class);
    }
}
