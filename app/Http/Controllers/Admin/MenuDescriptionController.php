<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateMenuDescriptionRequest;
use App\Models\Menu;
use App\Models\MenuDescription;
use Illuminate\Http\Request;

class MenuDescriptionController extends Controller
{
    public function create(Menu $menu)
    {
        return view('admin.menu_description.create', compact('menu'));
    }
    public function store(CreateMenuDescriptionRequest $request)
    {
        $data = $request->all();
        $description = $data['description'];
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $description = $dom->saveHTML();
        MenuDescription::create($data);
        session()->flash('success');
        return redirect(route('menu.show', $data['menu_id']));
    }
    public function edit(MenuDescription $menu_description, Menu $menu)
    {
        return view('admin.menu_description.create', compact('menu_description', 'menu'));
    }
    public function update(CreateMenuDescriptionRequest $request, MenuDescription $menu_description)
    {
        $data = $request->all();
        $description = $data['description'];
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $description = $dom->saveHTML();
        $menu_description->update($data);

        session()->flash('success');
        return redirect(route('menu.show', $data['menu_id']));
    }
    public function destroy(MenuDescription $menu_description)
    {
        $menu_description->delete();
        session()->flash('success');
        return redirect(route('menu.show', $menu_description->menu_id));
    }
}
