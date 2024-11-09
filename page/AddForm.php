
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Form</title>
    <?php include('../layout/style.php'); ?>
    <style>
        body {
            background: #ffffff;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #0D92F4;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #000000;
            border-bottom: 2px solid #000000;
            padding-bottom: 10px;
        }

        .form-container label {
            display: block;
            font-size: 18px;
            margin-top: 15px;
            color: #ffffff;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #ffffff;
            color: #333;
        }

        .form-container button[type="submit"],
        .form-container button[type="reset"] {
            width: 48%;
            padding: 10px;
            margin-top: 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s;
        }

        .form-container button[type="submit"] {
            background-color: #06D001;
        }

        .form-container button[type="reset"] {
            background-color: #FF0000;
        }

        .form-container button[type="submit"]:hover {
            background-color: #059212;
        }

        .form-container button[type="reset"]:hover {
            background-color: #DF2E38;
        }
    </style>
</head>
<body>
    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="form-container">
                        <h2>Add Form</h2>
                        <form action="ShowDetails.php" method="POST">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter name" required>

                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" placeholder="Enter age" required>

                            <label for="gender">Gender:</label>
                            <select name="gender" id="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            <label for="course">Course:</label>
                            <select name="course" id="course" required>
                                <option value="BSIS">BSIS</option>
                                <option value="BEED">BEED</option>
                                <option value="BSAIS">BSAIS</option>
                            </select>

                            <label for="campus">Campus:</label>
                            <select name="campus" id="campus" required>
                                <option value="Sta.Cruz Campus">Sta.Cruz Campus</option>
                                <option value="Boac Campus">Boac Campus</option>
                                <option value="Torrijos Campus">Torrijos Campus</option>
                                <option value="Gasan Campus">Gasan Campus</option>
                                <option value="Buenavista Campus">Buenavista Campus</option>
                            </select>

                            <label for="section">Section:</label>
                            <select name="section" id="section" required>
                                <option value="1-A">1-A</option>
                                <option value="1-B">1-B</option>
                                <option value="2-A">2-A</option>
                                <option value="2-B">2-B</option>
                                <option value="3-A">3-A</option>
                                <option value="3-B">3-B</option>
                            </select>

                            <label for="college">College:</label>
                            <input type="text" id="college" name="college" placeholder="Enter college" required>

                            <button type="submit" name="submit">Submit</button>
                            <button type="reset">Clear</button>
                        </form>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
