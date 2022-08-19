<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function CreateAbout()
    {
        return 'Footer about Title';
    }

    public function AllFooterAbout()
    {
        return 'All About Info';
    }
}
