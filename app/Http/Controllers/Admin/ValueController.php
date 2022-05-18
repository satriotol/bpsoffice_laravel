<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Value\CreateValueRequest;
use App\Http\Requests\Value\UpdateValueRequest;
use App\Models\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = Value::all();
        return view('admin.value.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.value.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateValueRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->store('image', 'public_uploads');
            $data['image'] = $image;
        };
        Value::create($data);
        session()->flash('success');
        return redirect(route('value.index'));
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
    public function edit(Value $value)
    {
        return view('admin.value.create', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValueRequest $request, Value $value)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->store('image', 'public_uploads');
            $value->deleteImage();
            $data['image'] = $image;
        };
        $value->update($data);
        session()->flash('success');
        return redirect(route('value.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Value $value)
    {
        $value->deleteImage();
        $value->delete();
        session()->flash('success');
        return redirect(route('value.index'));
    }
}
