<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $fillable=['about_id','blog_id','review_id','service_id','team_id','title'];

    public function about()
    {
        return $this->belongsTo(About::class,'about_id','id');
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
    public function review()
    {
        return $this->belongsTo(Review::class,'review_id','id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function team()
    {
        return $this->belongsTo(Team::class,'team_id','id');
    }
}
