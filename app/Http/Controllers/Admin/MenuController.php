<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Menu::TYPE;
        $statuses = Menu::STATUS;
        return view('admin.menu.create', compact('types', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMenuRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');
        if ($request->hasFile('slider')) {
            $slider = $request->slider->store('image', 'public_uploads');
            $data['slider'] = $slider;
        };
        Menu::create($data);
        session()->flash('success');
        return redirect(route('menu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $types = Menu::TYPE;
        $statuses = Menu::STATUS;
        return view('admin.menu.create', compact('types', 'statuses', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');
        if ($request->hasFile('slider')) {
            $slider = $request->slider->store('image', 'public_uploads');
            $menu->deleteImage();
            $data['slider'] = $slider;
        };
        $menu->update($data);
        session()->flash('success');
        return redirect(route('menu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        $menu->deleteImage();
        session()->flash('success');
        return redirect(route('menu.index'));
    }
}
