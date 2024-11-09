<?php
// Start the session to use session variables
session_start();

// Initialize variables
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$message = "";

// Check if login credentials are correct
if ($email == "pogijustine@gmail.com" && $password == "password") {
    // Store email and password in session variables
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    
    // Set success message
    $message = "<div class='alert alert-success'>Logged in Successfully</div>";

    // Redirect to the dashboard page
    echo "<script>window.location.href = 'page/dashboard.php';</script>";
    
} elseif ($email == "" || $password == "") {
    // If email or password is empty, show a message
    $message = "<div class='alert alert-danger'>Please enter your email and password</div>";
} else {
    // If credentials are incorrect, show an error message
    $message = "<div class='alert alert-danger'>Login Failed</div>";
}

// Check if logout is requested
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    // Destroy the session and log the user out
    session_destroy();
    header("Location: index.php"); // Redirect to login page or home page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" onSubmit="return confirm('DO YOU REALLY WANT TO CONTINUE?');">
                                            <?php echo $message;?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                                
                                                <div class="d-flex justify-content-end mt-2">
                                                    <input type="checkbox" id="show-password" class="form-check-input me-2">
                                                    <label for="show-password" class="form-check-label">Show Password</label>
                                                </div>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberMe" type="checkbox" value="">
                                                <label class="form-check-label" for="inputRememberMe">Remember Me</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="./page/forgot_password.php">Forgot Password?</a>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="./page/signup.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>

                                <table class="table table-stripped">
                                    <tr>
                                        <td><h4><b>Email:</b></h4></td>
                                        <td><h3 class="text-white"><b><?php echo $email;?></b></h3></td>
                                    </tr>
                                    <tr>
                                        <td><h4><b>Password:</b></h4></td>
                                        <td><h3 class="text-white"><b><?php echo $password;?></b></h3></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script>
            // Show password functionality
            const showPasswordCheckbox = document.getElementById('show-password');
            const passwordField = document.getElementById('inputPassword');

            showPasswordCheckbox.addEventListener('change', function () {
                if (this.checked) {
                    passwordField.type = 'text';  // Change password input to text
                } else {
                    passwordField.type = 'password';  // Revert to password input type
                }
            });
        </script>
    </body>
</html>
