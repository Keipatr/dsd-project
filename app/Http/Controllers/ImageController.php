<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        return response()->json(['success' => true, 'file' => ['url' => asset('images/' . $imageName)]]);
    }
    public function deleteImage(Request $request)
{
    $imageUrl = $request->input('image');
    // Delete the image from storage using Storage facade or any other method you prefer
    Storage::delete($imageUrl);

    return response()->json(['message' => 'Image deleted successfully']);
}
}
