<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    //
    public function index()
    {
        $Services = Service::all();
        $whatsapp = setting::where('key', 'whatsapp')->first();
        $whatsapp2 = setting::where('key', 'whatsapp2')->first();
        $email = setting::where('key', 'email')->first();
        $address = setting::where('key', 'address')->first();
        $whatsapp = setting::where('key', 'whatsapp')->first();
        $facebook = setting::where('key', 'facebook')->first();
        $instagram = setting::where('key', 'instagram')->first();
        $twitter = setting::where('key', 'twitter')->first();
        $youtube = setting::where('key', 'youtube')->first();
        $about_us = setting::where('key', 'about-us')->first();
        return response()->view('front.parent',compact('Services', 'whatsapp', 'email', 'address', 'whatsapp', 'about_us', 'whatsapp2', 'facebook','instagram', 'twitter', 'youtube'));
    }

}
