<?php include "header.php"; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<br><br><br>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card p-4 shadow">
            <h2 class="text-center text-primary mb-4">Register</h2>
            <form id="registerForm" action="reg_process.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                    <span class="text-danger small" id="nameError"></span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    <span class="text-danger small" id="emailError"></span>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number">
                    <span class="text-danger small" id="mobileError"></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Create a password">
                    <span class="text-danger small" id="passwordError"></span>
                </div>
				
				
				
				
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <br>
            <p class="text-center">Already have an account? <a href="login.php" class="btn btn-link">Login</a></p>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>

<script>
    $(document).ready(function(){
        function validateName() {
            var name = $("#name").val().trim();
            if (name === "") {
                $("#nameError").text("Name is required.");
                return false;
            } else {
                $("#nameError").text("");
                return true;
            }
        }

        function validateEmail() {
            var email = $("#email").val().trim();
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (email === "") {
                $("#emailError").text("Email is required.");
                return false;
            } else if (!emailPattern.test(email)) {
                $("#emailError").text("Enter a valid email address.");
                return false;
            } else {
                $("#emailError").text("");
                return true;
            }
        }

        function validateMobile() {
            var mobile = $("#mobile").val().trim();
            var mobilePattern = /^[0-9]{10}$/;

            if (mobile === "") {
                $("#mobileError").text("Mobile number is required.");
                return false;
            } else if (!mobilePattern.test(mobile)) {
                $("#mobileError").text("Enter a valid mobile number.");
                return false;
            } else {
                $("#mobileError").text("");
                return true;
            }
        }

        function validatePassword() {
            var password = $("#password").val().trim();
            if (password === "") {
                $("#passwordError").text("Password is required.");
                return false;
            } else {
                $("#passwordError").text("");
                return true;
            }
        }

        $("#name").on("input", validateName);
        $("#email").on("input", validateEmail);
        $("#mobile").on("input", validateMobile);
        $("#password").on("input", validatePassword);

        $("#registerForm").submit(function(event){
            event.preventDefault();

            var isNameValid = validateName();
            var isEmailValid = validateEmail();
            var isMobileValid = validateMobile();
            var isPasswordValid = validatePassword();

            if (isNameValid && isEmailValid && isMobileValid && isPasswordValid) {
              this.submit();
            }
        });
    });
</script>
