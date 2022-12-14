<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class Item extends Model
{
    protected $hidden = ['created_at', 'updated_at','pivot','image'];
    protected $appends = ['imageurl'];
  
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'items_users');
    }

    public function getImageurlAttribute() {
        return URL::asset('storage/images/'.$this->image);
    }
}
