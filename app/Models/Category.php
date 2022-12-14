<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use Illuminate\Support\Facades\URL;

class Category extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at', 'image'];
    protected $appends = ['imageurl'];

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function getImageurlAttribute() {
        return URL::asset('storage/images/categories/'.$this->image);
    }
}
