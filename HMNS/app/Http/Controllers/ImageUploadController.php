<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class ImageUploadController extends Controller
{
    /**
     * Show the image upload form.
     */
    public function showUploadForm()
    {
        return view('upload');
    }

    /**
     * Handle image upload and classification.
     */
    public function uploadImage(Request $request)
    {
        // Validate the incoming file
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if the uploaded file is valid
        if ($request->file('file')->isValid()) {
            // Store the uploaded image in the 'public/images' directory
            $path = $request->file('file')->store('images', 'public');

            // Call the classifyImage method to get classification data
            $classification = $this->classifyImage($path);

            // Return a JSON response with the success message, image path, and classification result
            return response()->json([
                'success' => 'Image uploaded and classified successfully!',
                'path' => $path,
                'classification' => $classification
            ]);
        }

        // Return an error response if the file upload failed
        return response()->json(['error' => 'Failed to upload image'], 400);
    }

    /**
     * Classify the uploaded image by sending it to the Node.js API.
     */
    public function classifyImage($imagePath)
{
    $nodeApiUrl = 'http://localhost:3000/classify'; // Replace with your actual Node.js server URL

    try {
        // Convert the image to base64 format
        $imageBase64 = base64_encode(file_get_contents(storage_path('app/public/' . $imagePath)));

        // Send the base64 image to the Node.js server
        $response = Http::post($nodeApiUrl, [
            'imageBase64' => $imageBase64,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        // Log an error message if classification was unsuccessful
        Log::error('Classification failed: ' . $response->body());
        return ['error' => 'Classification failed'];
    } catch (\Exception $e) {
        // Log the exception message if something goes wrong
        Log::error('Error during classification: ' . $e->getMessage());
        return ['error' => 'Classification encountered an error'];
    }
}

}
