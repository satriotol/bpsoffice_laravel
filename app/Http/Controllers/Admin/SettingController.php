<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\UpdateSettingRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Auth::user();
        return view('admin.setting.create', compact('setting'));
    }
    public function update(UpdateSettingRequest $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $data = $request->except(['password']);
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        $user->update($data);
        session()->flash('success', 'Account Updated Successfully');
        return redirect(route("setting.index"));
    }
}
