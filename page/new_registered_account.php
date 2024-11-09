<?php
session_start();

// Check if the form was submitted and if user is logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header("Location: signup.php");
    exit();
}

// Check if there is a new account registration (could be from session or database)
$new_account_email = isset($_SESSION['new_account_email']) ? $_SESSION['new_account_email'] : 'N/A';
$new_account_password = isset($_SESSION['new_account_password']) ? $_SESSION['new_account_password'] : 'N/A';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store new account registration details in session
    $_SESSION['new_account_email'] = $_POST['email'];
    $_SESSION['new_account_password'] = $_POST['password'];
    // Redirect to the dashboard to show the new account info
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Registered Account</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c3e50;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            margin-top: 50px;
        }
        h2 {
            font-size: 28px;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            width: 100%;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .alert-info {
            background-color: #e3f2fd;
            color: #0d47a1;
            font-size: 16px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            display: block;
            width: 100%;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create a New Registered Account</h2>

        <!-- Form to register a new account -->
        <form method="POST" action="new_registered_account.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register Account</button>
        </form>

        <h3 class="mt-4">Current New Account Details:</h3>
        <div class="alert alert-info mt-3">
            <p><strong>Email:</strong> <?php echo $new_account_email; ?></p>
            <p><strong>Password:</strong> <?php echo $new_account_password; ?></p>
        </div>

        <a href="dashboard.php" class="btn btn-secondary">Go to Dashboard</a>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
