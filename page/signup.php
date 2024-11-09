<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Store user info in session (you might save this in a database in a real app)
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    // Redirect to dashboard
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
    <title>Sign Up</title>
    <!-- Inline CSS and FontAwesome links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: #34495e;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            position: relative;
        }
        .signup-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #0D92F4;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            color: #bdc3c7;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #7f8c8d;
            border-radius: 5px;
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        .form-group input:focus {
            border-color: #1abc9c;
            outline: none;
        }
        .btn-primary {
            background-color: #0D92F4;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #024CAA;
        }
        .icon {
            font-size: 50px;
            color: #0D92F4;
            margin-bottom: 20px;
        }
        /* Back Button Styling */
        .back-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: #F95454;
            color: #000000;
            padding: 5px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .back-btn:hover {
            background-color: #B8001F;  
        }
        /* Show Password on the Left */
        .show-password-wrapper {
            display: flex;
            align-items: center;
            justify-content: right;
            margin-bottom: 20px;
        }
        .show-password-wrapper label {
            color: #bdc3c7;
            cursor: pointer;
            font-size: 14px;
            margin-top: 1rem 2rem 5px;
        }
        .show-password-wrapper input[type="checkbox"] {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <!-- Back Button -->
        <a href="../index.php" class="back-btn">Back</a>

        <div class="icon">
            <i class="fas fa-user-plus"></i>
        </div>
        <h2>Create Your Account</h2>
        <form method="POST" action="signup.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Show Password on the Left -->
            <div class="show-password-wrapper">
                <input type="checkbox" id="show-password"> 
                <label for="show-password">Show Password</label>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

    <!-- Bootstrap JS and FontAwesome script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Show password functionality
        const showPasswordCheckbox = document.getElementById('show-password');
        const passwordField = document.getElementById('password');

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
