<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function index()
    {
        return view ('camera.all', [
            "title" => "Cameras",
            "cameras" => Camera::all(),
        ]);
    }

    public function show($camera)
    {
        return view ('camera.detail', [
            'title' => 'detail-camera',
            'camera' => Camera::find($camera )
        ]);
    }
}
