<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'slider', 'status', 'slug'];

    const TYPE = ['GAMBAR', 'DESKRIPSI'];

    const STATUS = [
        0 => 'TIDAK AKTIF',
        1 => 'AKTIF',
    ];

    public function deleteImage()
    {
        Storage::disk('public_uploads')->delete($this->attributes['slider']);
    }
}
