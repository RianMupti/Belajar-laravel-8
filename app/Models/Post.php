<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeSaring($query, array $fillters) {
        // dd($query);
        // isset menghasilkan boolean
        // if(isset($fillters['search']) ? $fillters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $fillters['search'] . '%')
        //           ->orWhere('body', 'like', '%' . $fillters['search'] . '%');
        // }

        // null coalesing operator
        // arrow function
        // method when -> digging deeper
        $query->when($fillters['search'] ?? false, fn($query, $search) => 
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%')
        );

        $query->when($fillters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        
        
        // relasi dengan table category
        // $query->when($fillters['category'] ?? false, fn($query, $category) => 
        //     $query->whereHas('category', fn($query) =>
        //         $query->where('slug', $category)
        //     )
        // );
        
        $query->when($fillters['authors'] ?? false, function($query, $authors) {
                return $query->whereHas('author', fn($query) =>
                    $query->where('username', $authors)
                );
            });
    }
    
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
