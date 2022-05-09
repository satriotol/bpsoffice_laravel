<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['image_gallery', 'image_contact', 'image_carrier'];

    public function deleteImageGallery()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image_gallery']);
    }
    public function deleteImageContact()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image_contact']);
    }
    public function deleteImageCarrier()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image_carrier']);
    }
}
