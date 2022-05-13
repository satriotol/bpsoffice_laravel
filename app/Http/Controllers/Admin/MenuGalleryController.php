<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuGallery\CreateMenuGalleryRequest;
use App\Models\Menu;
use App\Models\MenuGallery;
use Illuminate\Http\Request;

class MenuGalleryController extends Controller
{
    public function create(Menu $menu)
    {
        return view('admin.menu_gallery.create', compact('menu'));
    }
    public function store(CreateMenuGalleryRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $img) {
                $image = $img->store('image', 'public_uploads');
                $data['image'] = $image;
                MenuGallery::create($data);
            }
        };
        session()->flash('success');
        return redirect(route('menu.show', $data['menu_id']));
    }
    public function edit(MenuGallery $menu_gallery, Menu $menu)
    {
        return view('admin.menu_gallery.create', compact('menu_gallery', 'menu'));
    }
    public function update(CreateMenuGalleryRequest $request, MenuGallery $menu_gallery)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->store('image', 'public_uploads');
            $menu_gallery->deleteImage();
            $data['image'] = $image;
        };
        $menu_gallery->update($data);
        session()->flash('success');
        return redirect(route('menu.show', $data['menu_id']));
    }
    public function destroy(MenuGallery $menu_gallery)
    {
        $menu_gallery->deleteImage();
        $menu_gallery->delete();
        session()->flash('success');
        return redirect(route('menu.show', $menu_gallery->menu_id));
    }
}
