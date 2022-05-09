<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'lat', 'lng', 'investation', 'image', 'address', 'phone', 'email'];

    public function deleteImage()
    {
        Storage::disk('public_images')->delete($this->attributes['image']);
    }
}
