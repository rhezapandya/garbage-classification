<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Image;

class ModelTestController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function makePrediction(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'image' => $request->file('image'),
        ];

        $response = Http::attach(
            'image',
            file_get_contents($request->file('image')->getRealPath()),
            'image.jpg'
        )->post('http://127.0.0.1:5000/predict', $data);

        // dd($response->status(), $response->headers(), $response->body());

        if ($response->successful()) {
            $predictions = $response->json('prediction');
            $imagePath = $request->file('image')->store('public/images');
            $relativeImagePath = str_replace('public/', '', $imagePath);

            $image = new Image();
            $image->path = $relativeImagePath;
            $image->save();

            return view('landing', [
                'predictions' => $predictions,
                'imagePath' => $imagePath
            ]);
        } else {
            return view('landing');
        }
    }
}
