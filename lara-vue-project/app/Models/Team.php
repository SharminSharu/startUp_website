<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=['name','degi','photo'];

    public function search()
    {
        return $this->hasMany(Search::class);
    }
}
