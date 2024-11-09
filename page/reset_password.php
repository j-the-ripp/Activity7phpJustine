<?php
// Start the session to use session variables
session_start();

// Initialize message variable
$message = "";

// Check if the reset token is valid (this is just a simple example, you would check in your database)
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    // Normally here you would verify the token in your database
    // For simplicity, we assume the token is valid.
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if ($new_password === $confirm_password) {
            // Update password logic goes here, for now, just a success message
            $message = "<div class='alert alert-success'>Your password has been updated successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger'>Passwords do not match.</div>";
        }
    }
} else {
    $message = "<div class='alert alert-danger'>Invalid or expired token.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Reset Password</h3>
            </div>
            <div class="card-body">
                <?php echo $message; ?>
                <form method="POST" action="reset_password.php?token=<?php echo $_GET['token']; ?>">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="newPassword" name="new_password" type="password" placeholder="New Password" required>
                        <label for="newPassword">New Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="confirmPassword" name="confirm_password" type="password" placeholder="Confirm Password" required>
                        <label for="confirmPassword">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
