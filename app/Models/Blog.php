<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'intro',
        'body',
        'user_id',
        'category_id',
        'thumbnail',
    ];

    public function scopeFilter($query,$filter)
    {
        // dd($filter['search']);
        $query->when($filter['search']??false,function($query,$search){
            $query->where(function($query)use($search){
                $query->where('title','LIKE','%'.$search.'%')->orWhere('body','LIKE','%'.$search.'%');
            });
        });

        $query->when($filter['user']??false,function($query,$username){
            $query->whereHas('author',function($query)use($username){
                $query->where('username',$username);
            });
        });

        $query->when($filter['category']??false,function($query,$slug){
            $query->whereHas('category',function($query)use($slug){
                $query->where('slug',$slug);
            });
        });

    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
