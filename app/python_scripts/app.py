from flask import Flask, request, jsonify
from flask_cors import CORS

from sklearn.linear_model import LinearRegression
import joblib


app = Flask(__name__)
CORS(app, resources={r"/predict-size": {"origins": "http://127.0.0.1:8000"}})


@app.route('/predict-size', methods=['POST'])
def predict_size():
    data = request.get_json()

    # Load the trained model
    model = joblib.load('trained_model.pkl')

    # Perform prediction
    prediction = model.predict([[data['height'], data['weight'], data['age']]])

    # Create the response
    response = jsonify({'size_prediction': int(prediction[0])})

    # Add CORS headers to the response
    response.headers.add('Access-Control-Allow-Origin', 'http://127.0.0.1:8000')
    response.headers.add('Access-Control-Allow-Headers', 'Content-Type')

    return response

if __name__ == '__main__':
    app.run(debug=True)
