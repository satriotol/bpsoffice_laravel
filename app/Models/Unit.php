<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'address', 'phone', 'fax', 'email', 'image'];
    public function deleteImage()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image']);
    }
}
