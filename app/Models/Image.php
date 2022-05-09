<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['image_gallery', 'image_contact', 'image_carrier'];

    public function getImageGalleryAttribute($value)
    {
        return url('storage/' . $value);
    }
    public function deleteImageGallery()
    {
        Storage::disk('public')->delete($this->attributes['image_gallery']);
    }
    public function getImageContactAttribute($value)
    {
        return url('storage/' . $value);
    }
    public function deleteImageContact()
    {
        Storage::disk('public')->delete($this->attributes['image_contact']);
    }
    public function getImageCarrierAttribute($value)
    {
        return url('storage/' . $value);
    }
    public function deleteImageCarrier()
    {
        Storage::disk('public')->delete($this->attributes['image_carrier']);
    }
}
