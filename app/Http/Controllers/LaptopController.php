<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        return view ('laptop.all', [
            "title" => "Laptop",
            "laptops" => Laptop::all(),
        ]);
    }

    public function show($laptop)
    {
        return view ('laptop.detail', [
            'title' => 'detail-laptop',
            'laptop' => Laptop::find($laptop)
        ]);
    }
}