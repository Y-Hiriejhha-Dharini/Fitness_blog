<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    // protected $with = ['Category','author'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters)
    {
        // if($filter)
        // {
        //     $query
        //         ->where('title','like','%'.request()->search.'%')
        //         ->orWhere('body','like','%'.request()->search.'%');
        // }

        // if($filters['search'] ?? false)
        // {
        //     $query
        //         ->where('title','like','%'.request()->search.'%')
        //         ->orWhere('body','like','%'.request()->search.'%');
        // }

            $query->when($filters['search'] ?? false, fn($query, $search)=>
                $query->where(fn($query)=>
                    $query->where('title','like','%'.$search.'%')
                            ->orWhere('body','like','%'.$search.'%')
                )
            );


            $query->when($filters['categories'] ?? false, function($query, $categories){
                $query
                    ->whereHas('Category', fn($query) =>
                        $query->where('slug',$categories)
                    );
            });
                
            $query->when($filters['authors'] ?? false, function($query, $author){
                $query
                    ->whereHas('author', fn($query) =>
                        $query->where('username',$author)
                    );
            });
    }
}
