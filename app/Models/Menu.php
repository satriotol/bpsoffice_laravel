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
    public function menu_galleries()
    {
        return $this->hasMany(MenuGallery::class, 'menu_id', 'id');
    }
    public function menu_description()
    {
        return $this->hasOne(MenuDescription::class, 'menu_id', 'id');
    }
}
