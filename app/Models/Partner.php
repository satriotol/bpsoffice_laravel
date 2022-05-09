<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'url'];
    public function deleteImage()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }
}
