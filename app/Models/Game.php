<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public bool $onWishlist = false;

    public function gameCategory()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getOnWishlistAttribute()
    {
        return $this->onWishlist;
    }

    public function gameUser()
    {
        return $this->belongsToMany(User::class)->using(ReviewAndWishlist::class)->withPivot([
            'game_rating',
            'text_review',
            'on_wishlist'
        ]);;
    }

    public function gamePublisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'category_id'
    ];

    protected $appends = [
        'on_wishlist'
    ];
}
