<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PredictionController extends Controller
{
    public function predictSize(Request $request)
    {
        $data = $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age' => 'required|numeric',
        ]);

        // Send data to Python API
        $response = Http::post('http://localhost:5000/predict-size', $data);

        // Check if the request was successful
        if ($response->successful()) {
            // Get the predicted size from the response
            $predictedSize = $response->json()['size_prediction'];

            // Return the predicted size
            return response()->json(['predicted_size' => $predictedSize]);
        } else {
            // Handle the error if the request failed
            return response()->json(['error' => 'Failed to get prediction'], 500);
        }
    }
}
