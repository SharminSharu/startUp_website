<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['name','degi','details','photo'];
    public function search()
    {
        return $this->hasMany(Search::class);
    }
}
