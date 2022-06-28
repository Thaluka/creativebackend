<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class websiteController extends Controller
{
    public function getData()
    {
        return Website::all();
    }
}
