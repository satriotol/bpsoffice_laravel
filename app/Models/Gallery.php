<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['image'];

    public function deleteImage()
    {
        Storage::disk('public_images')->delete($this->attributes['image']);
    }
}
