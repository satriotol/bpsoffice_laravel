<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\CreateImageRequest;
use App\Http\Requests\Image\UpdateImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateImageRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image_gallery')) {
            $image_gallery = $request->image_gallery->store('image_gallery', 'public');
            $data['image_gallery'] = $image_gallery;
        };
        if ($request->hasFile('image_contact')) {
            $image_contact = $request->image_contact->store('image_contact', 'public');
            $data['image_contact'] = $image_contact;
        };
        if ($request->hasFile('image_carrier')) {
            $image_carrier = $request->image_carrier->store('image_carrier', 'public');
            $data['image_carrier'] = $image_carrier;
        };
        Image::create($data);
        session()->flash('success');
        return redirect(route('image.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('admin.image.create', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        $data = $request->all();
        if ($request->hasFile('image_gallery')) {
            $image_gallery = $request->image_gallery->store('image_gallery', 'public');
            $image->deleteImageGallery();
            $data['image_gallery'] = $image_gallery;
        };
        if ($request->hasFile('image_contact')) {
            $image_contact = $request->image_contact->store('image_contact', 'public');
            $image->deleteImageContact();
            $data['image_contact'] = $image_contact;
        };
        if ($request->hasFile('image_carrier')) {
            $image_carrier = $request->image_carrier->store('image_carrier', 'public');
            $image->deleteImageCarrier();
            $data['image_carrier'] = $image_carrier;
        };
        $image->update($data);
        session()->flash('success');
        return redirect(route('image.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
