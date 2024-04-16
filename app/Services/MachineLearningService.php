<?php

namespace App\Services;

use Phpml\Dataset\CsvDataset;
use Phpml\Preprocessing\Imputer;
use Phpml\Preprocessing\Normalizer;
use Phpml\Classification\LightGBM\Classifier;
use Phpml\Metric\Accuracy;
use Phpml\Metric\F1Score;
use Phpml\Metric\Precision;
use Phpml\Metric\Recall;

class MachineLearningService
{
    private $classifier;

    public function __construct()
    {
        // Initialize your classifier
        $this->initializeClassifier();
    }

    public function trainAndEvaluateClassifier()
    {
        // Load dataset
        $dataset = new CsvDataset('path/to/sizes.csv', 4, true);
        
        // Separate features (X) and labels (y)
        $X = $dataset->getSamples();
        $y = $dataset->getTargets();
        
        // Handle missing values (imputation)
        $imputer = new Imputer();
        $imputer->transform($X);
        
        // Normalize features
        $normalizer = new Normalizer();
        $normalizer->transform($X);
        
        // AL : Light Gradient Boosting Machine (30%)
        $LGBM = new Classifier();
        $LGBM->train($X_train, $y_train);
        $training_prediction = $LGBM->predict($X_train);
        $testing_prediction = $LGBM->predict($X_test);
        
        // Training Metrics
        $training_accuracy = accuracy_score($y_train, $training_prediction);
        $training_f1 = f1_score($y_train, $training_prediction, 'weighted');
        $training_precision = precision_score($y_train, $training_prediction, 'weighted');
        $training_recall = recall_score($y_train, $training_prediction, 'weighted');
        
        // Testing Metrics
        $testing_accuracy = accuracy_score($y_test, $testing_prediction);
        $testing_f1 = f1_score($y_test, $testing_prediction, 'weighted');
        $testing_precision = precision_score($y_test, $testing_prediction, 'weighted');
        $testing_recall = recall_score($y_test, $testing_prediction, 'weighted');
        
        echo 'Training Model Performance Check';
        echo 'Accuracy Score: ' . $training_accuracy;
        echo 'F1 Score: ' . $training_f1;
        echo 'Precision Score: ' . $training_precision;
        echo 'Recall Score: ' . $training_recall;
        
        echo 'Testing Model Performance Check';
        echo 'Accuracy Score: ' . $testing_accuracy;
        echo 'F1 Score: ' . $testing_f1;
        echo 'Precision Score: ' . $testing_precision;
        echo 'Recall Score: ' . $testing_recall;
        
        // Calculate BMI
        $height_meters = 165.1 / 100;  // Convert height to meters
        $weight_kg = 61;
        $bmi = $weight_kg / ($height_meters ** 2);
        
        // Example of size recommendation for new data with BMI
        $new_data = [[$weight_kg, 34, $height_meters, $bmi]];  // Example of new data (weight, age, height, BMI)
        $predicted_size = $LGBM->predict($new_data);
        echo 'Predicted Size: ' . $predicted_size;
    }

    private function initializeClassifier()
    {
        // Initialize your classifier
        $this->classifier = new Classifier();
    }

    public function predictSize($weight, $height, $age)
    {
        // Calculate BMI
        $height_meters = $height / 100; // Convert height to meters
        $bmi = $weight / ($height_meters ** 2);

        // Make predictions based on BMI and age
        $predictedSize = $this->classifier->predict([[ $weight, $age, $height_meters, $bmi ]]);

        return $predictedSize;
    }
}
