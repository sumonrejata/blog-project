<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\FooterAddress;

class FooterController extends Controller
{
    public function CreatAboutDesc()
    {
        return view('backend/footer/create');
    }

    public function InsertAboutDesc(Request $request)
    {
        Footer::create([
            'description' =>$request->description,
        ]);
        return back();
    }

    public function AllFooterAboutDesc()
    {
        $footer_desc = Footer::all();
        return view('backend/footer/index', compact('footer_desc'));
    }

    // Footer Location Query Start

    public function CreateAddress()
    {
        return view('backend/footer_location/create');
    }

    public function InsertAddress(Request $request)
    {
        FooterAddress::create([
            'icon' =>$request->icon,
            'address' =>$request->address,
        ]);
        return back();
    }

    public function ShowAddress()
    {
        $footer_add = FooterAddress::all();
        return view('backend/footer_location/index', compact('footer_add'));
    }


    // Footer Gallery Query start

    public function CreatefooterGallery()
    {
        return view('backend/footer_gallery/create');
    }

    public function Showfootergallery()
    {
        return view('backend/footer_gallery/index');
    }





}
