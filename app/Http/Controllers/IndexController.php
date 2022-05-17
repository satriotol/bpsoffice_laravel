<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carrier;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Unit;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $about = About::first();
        $menus = Menu::where('status', 1)->get();
        view()->share(compact('about', 'menus'));
    }

    public function home()
    {
        $sliders = Slider::all();
        $units = Unit::all();
        $partners = Partner::all();
        $about = About::first();
        return view('home', compact('sliders', 'units', 'partners', 'about'));
    }

    public function detail_unit(Unit $unit)
    {
        $units = Unit::all();
        return view('detail_unit', compact('unit', 'units'));
    }
    public function galleries()
    {
        $image = Image::first();
        $galleries = Gallery::all();
        return view('gallery', compact('galleries', 'image'));
    }
    public function contact()
    {
        $image = Image::first();
        $about = About::first();
        return view('contact', compact('about', 'image'));
    }
    public function karir()
    {
        $image = Image::first();
        $carriers = Carrier::all();
        return view('karir', compact('carriers', 'image'));
    }
    public function menu($slug)
    {
        $menu = Menu::where('slug', $slug)->where('status', 1)->first();
        return view('menu', compact('menu'));
    }
}
