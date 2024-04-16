@include('header')

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Modal Form Styling */
.modal-form label {
  display: block;
  margin-bottom: 10px;
}

.modal-form input[type="text"],
.modal-form input[type="number"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
}

.modal-form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
}

.modal-form input[type="submit"]:hover {
  background-color: #45a049;
}
.modal-content {
    width: 40%; /* Adjust width as needed */
    margin: 0 auto; /* Center the modal horizontally */
}

/* Adjustments to make the modal centered vertically */
.modal {
    display: flex;
    align-items: center;
    justify-content: center;
}
.centered {
    text-align: center;
    margin-top: 20px; /* Adjust margin-top as needed */
}



</style>


<!-- <div id="sizeModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-form">
            <label for="height">Height (cm)</label>
            <input type="text" id="height" name="height" placeholder="Enter your height in cm">

            <label for="weight">Weight (kg)</label>
            <input type="text" id="weight" name="weight" placeholder="Enter your weight in kg">

            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Enter your age">

            <input type="submit" id="continueBtn" value="MY SIZE">
            <div id="sizePlaceholder" class="centered">
                <label for="size" style="font-weight: bold; font-size: 18px;">Your Size: <span id="size" style="color: #088F8F;"></span></label>
            </div>
        </div>
    </div>
</div> -->

<div id="sizeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-form">
                <label for="height">Height (cm)</label>
                <input type="text" id="height" name="height" placeholder="Enter your height in cm">

                <label for="weight">Weight (kg)</label>
                <input type="text" id="weight" name="weight" placeholder="Enter your weight in kg">

                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Enter your age">

                <input type="submit" id="continueBtn" value="MY SIZE">
                <div id="sizePlaceholder" class="centered">
                    <label for="size" style="font-weight: bold; font-size: 18px;">Your Size: <span id="size" style="color: #088F8F;"></span></label>
                </div>
            </div>
        </div>
</div>



<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="{{ asset('images/products/' . $product->id . '.jpg') }}" width="100%" id="MainImg" alt="{{ $product->name }}">
        
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="{{ asset('images/products/' . $product->id . '.jpg') }}" width="100%" class="small-img" alt="{{ $product->name }}">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('images/products/' . $product->id . '.jpg') }}" width="100%" class="small-img" alt="{{ $product->name }}">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('images/products/' . $product->id . '.jpg') }}" width="100%" class="small-img" alt="{{ $product->name }}">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('images/products/' . $product->id . '.jpg') }}" width="100%" class="small-img" alt="{{ $product->name }}">
            </div>

    
        </div>
    </div>

    
  

   
<div class="single-pro-details">
    <h6> Home / {{ $product->category }} </h6>
    <h4>{{ $product->name }}</h4>
    <h2> ${{ $product->price }}</h2>
    <form action="/add-to-cart" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <a href="https://www.calculatored.com/dress-size-calculator" target="_blank" style="color: #2d68a8;">Need help with size?</a>
        <a href="https://wa.me/601160643924?text=Hello%2C%20I%20want%20to%20place%20an%20order" style="color: #2d68a8; text-decoration: none; margin-right: 10px; float: right; margin-top: 5px;">Place Order</a>

        <select name="size" style="padding-right: 150px;">
            <option disabled selected>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
        </select>

        <!-- <div style="text-align: center; margin-top: 5px;">
                <a href="#" id="openModalBtn" style="color: #088F8F; text-decoration: none;">! Need help with size</a>
            </div> -->
        <span class="error">@error('size') *{{ $message }} @enderror</span>

        <br>
        <input type="number" name="quantity" value="1" min="1">
        <br>
        <button id="add-to-cart-btn" class="normal">Add To Cart</button>
    </form>
    <h4>Product Details</h4>
    <span>{{ $product->description }}</span>
</div>



</section>





<!-- <section id="product1" class="section-p1">
        <h2> Featured Images</h2>
        <p> Summer collection New Morgan Design</p>
    <div class="pro-container">
                <div class="pro">
                    <img src="images/products/n1.jpg" alt ="">
                    <div class="des">
                        <span> adidas</span>
                        <h5> Cartoon Astranaut T-shorts</h5>
                            <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                            </div>
                                <h4>$500</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

    <div class="pro">
            <img src="images/products/n2.jpg" alt ="">
            <div class="des">
                <span> adidas</span>
                <h5> Cartoon Astranaut T-shorts</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                        </div>
                        <h4>$500</h4>
                        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

    <div class="pro">
        <img src="images/products/n3.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

    <div class="pro">
        <img src="images/products/n4.jpg" alt ="">
        <div class="des">
            <span> adidas</span>
            <h5> Cartoon Astranaut T-shorts</h5>
                <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>
                    </div>
                    <h4>$500</h4>
                    </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
 
    </div>

</section> -->


<!--  -->

@include('footer')


<script>
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("sizeModal");
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementsByClassName("close")[0];
    const continueBtn = document.getElementById("continueBtn");
    const sizeSpan = document.getElementById("size");

    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Initially hide the modal
    closeModal();

    // Open the modal when clicking on the "Need help with size?" link
    openModalBtn.addEventListener("click", openModal);

    // Close the modal when clicking on the close button
    closeModalBtn.addEventListener("click", closeModal);

    // Close the modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    };

    // Close the modal when the "MY SIZE" button is clicked
    continueBtn.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        // Get user input from the form
        var height = document.getElementById("height").value;
        var weight = document.getElementById("weight").value;
        var age = document.getElementById("age").value;

        // Create an object with user input
        var data = {
            height: height,
            weight: weight,
            age: age
        };

        // Make a POST request using fetch
        fetch('http://127.0.0.1:5000/predict-size', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json()) // Parse the JSON response
        .then(data => {
            // Use the data received from the server
            console.log(data);
            // Update the sizePlaceholder with the received data
            sizeSpan.textContent = data.size_prediction;
            // Close the modal after receiving the prediction
            closeModal();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>




</body>

</html>

