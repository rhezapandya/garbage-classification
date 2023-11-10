# Import Library
from flask import Flask, request, jsonify
import numpy as np
import tempfile
import tensorflow as tf
from keras.models import load_model
from keras.preprocessing.image import load_img, img_to_array

# Init Flask
app = Flask(__name__)

# Load Keras model (.h5)
model = load_model('GarbageClassification-1.h5')


@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Get image from request
        image_file = request.files['image']

        # Check if the 'image' field is in the request
        if 'image' not in request.files:
            return jsonify({'error': 'No image in the request'}), 400

        temp_image = tempfile.NamedTemporaryFile(delete=False)
        image_file.save(temp_image)
        temp_image.close()

        # Load and preprocess the image
        img = load_img(temp_image.name, target_size=(
            224, 224))  # Adjust the target size
        img_array = img_to_array(img)
        img_array = np.expand_dims(img_array, axis=0)  # Add batch dimension

        # Perform model predictions
        class_probabilities = model.predict(img_array)

        # You can process the class_probabilities to get the predicted class
        waste_labels = {0: "cardboard", 1: "glass",
                        2: "metal", 3: "paper", 4: "plastic", 5: "trash"}
        predicted_class_index = np.argmax(class_probabilities)

        predicted_class_label = waste_labels[predicted_class_index]

        response = {'prediction': predicted_class_label}

        # Return the prediction as JSON
        return jsonify(response)

    except Exception as e:
        print('An error occurred:', str(e))
        return jsonify({'error': str(e)}), 500


if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)
