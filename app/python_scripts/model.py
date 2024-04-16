import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
import joblib

# Load data
df = pd.read_csv("C:/Users/Anosha/Desktop/onlineClothingStore/storage/csv_files/sizes.csv")

# Data preprocessing
df['age'] = df['age'].fillna(df['age'].median())
df['height'] = df['height'].fillna(df['height'].median())

df['size'] = df['size'].map({'XXS': 1, 'S': 2, "M": 3, "L": 4, "XL": 5, "XXL": 6, "XXXL": 7})

X = df.drop("size", axis=1)
y = df["size"]

# Train-test split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)

# Model training
clf = LinearRegression()
clf.fit(X_train, y_train)

# Save the trained model
joblib.dump(clf, 'trained_model.pkl')
