<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=['photo','Badge','name','date','title','details','maindetails'];
    public function search()
    {
        return $this->hasMany(Search::class);
    }
}
