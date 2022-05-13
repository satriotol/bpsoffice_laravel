<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MenuGallery extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'menu_id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function deleteImage()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }
}
