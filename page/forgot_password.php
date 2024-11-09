<?php
// Initialize message variable
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered email
    $email = $_POST['email'];

    // Simulate sending a password reset link (In a real-world scenario, you would validate the email and send an actual link)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<div class='alert alert-success'>A password reset link has been sent to <strong>$email</strong>.</div>";
    } else {
        $message = "<div class='alert alert-danger'>Please enter a valid email address.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Forgot Password</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="forgot_password.php">
                    <?php echo $message; ?>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" required>
                        <label for="inputEmail">Enter your email address</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button type="submit" class="btn btn-primary">Send Reset Link</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="../index.php">Remember your password? Login</a></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
