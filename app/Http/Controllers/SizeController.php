<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class SizePredictionController extends Controller
{
    public function predictSize(Request $request)
    {
        // Extract input data
        $height = $request->input('height');
        $weight = $request->input('weight');
        $age = $request->input('age');

        // Calculate BMI
        $heightMeters = $height / 100;
        $bmi = $weight / ($heightMeters ** 2);

        // Example of size recommendation for new data with BMI
        $newData = [$weight, $age, $heightMeters, $bmi];

        // Predict clothing size based on BMI
        $predictedSize = $this->predictClothingSize($bmi);

        // Return the predicted size
        return response()->json(['predictedSize' => $predictedSize]);
    }

    private function predictClothingSize($bmi)
    {
        // Determine clothing size based on BMI
        if ($bmi < 18.5) {
            return 'S'; // Small
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            return 'M'; // Medium
        } elseif ($bmi >= 24.9 && $bmi < 29.9) {
            return 'L'; // Large
        } elseif ($bmi >= 29.9 && $bmi < 34.9) {
            return 'XL'; // Extra Large
        } elseif ($bmi >= 34.9) {
            return 'XXL'; // Extra Extra Large
        } else {
            return 'M'; // Default to Medium size if BMI calculation fails
        }
    }
}
