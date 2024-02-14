
<div class="container">
   
<div class="loginForm">
    <div class="blur-background" id="blur-background"></div>
        <div class="form-popup" id="myForm">
            <span class="close-icon" onclick="closeForm()">×</span>
            <form method="POST" action="{{ route('login') }}" class="form-container">
                @csrf
                <h3>Sign in with your account</h3>
                <div class="labelForm">
                    <label for="email">Email Address</label>
                    <input type="text" id="popup-email" placeholder="Enter Email" name="email" value="{{ session('email') }}" required>
                    <label for="password">Passwordsss</label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button type="submit" class="open-button">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>



