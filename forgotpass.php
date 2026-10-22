
<?php include "header.php";  ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <div class="card p-4 shadow">
            <h2 class="text-center text-primary mb-4">Forgot Password</h2>
            <form id="loginForm" action="login_process.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    <span class="text-danger small" id="emailError"></span>
                </div>
               
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Click me for Forgotpass</button>
                </div>
            </form>
			<br>
			
        </div>
    </div>
</div>
	
<?php include "footer.php"; ?>

   <script>
    $(document).ready(function(){
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

        $("#email").on("input", validateEmail);
        $("#password").on("input", validatePassword);

        $("#loginForm").submit(function(event){
            event.preventDefault();

            var isEmailValid = validateEmail();
            var isPasswordValid = validatePassword();

            if (isEmailValid && isPasswordValid) {
               // alert("Login Successful!");
			   this.submit();
            }
        });
    });
</script>


