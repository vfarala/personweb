<?php
include "database.php"; // Include the database connection file

$registerMessage = "";
$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["register"])) {
        // Handle registration
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["registerEmail"];
        $contactNumber = $_POST["contactNumber"];
        $password = $_POST["registerPassword"];
        $confirmPassword = $_POST["repeatPassword"];
        $country = $_POST["country"];
        $province = $_POST["province"];
        $cityMunicipality = $_POST["cityMunicipality"];
        $barangay = $_POST["barangay"];
        $lotBlk = $_POST["lotBlk"];
        $street = $_POST["street"];
        $subdivision = $_POST["subdivision"];

        // Password hashing
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Check for empty fields
        if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($confirmPassword) && !empty($contactNumber) && !empty($country) && !empty($province) && !empty($cityMunicipality) && !empty($barangay) && !empty($lotBlk) && !empty($street) && !empty($subdivision)) {
            // Check if the email already exists in the database
            $checkSql = "SELECT * FROM USERS WHERE EMAIL = ?";
            $stmt = mysqli_prepare($conn, $checkSql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                $registerMessage = "Error: Email already exists.";
            } else {
                // Insert data into USERS table
                $insertSql = "INSERT INTO USERS (FIRST_NAME, LAST_NAME, EMAIL, CONTACT_NUMBER, PASSWORD, COUNTRY, PROVINCE, CITY_MUNICIPALITY, BARANGAY, LOT_BLK, STREET, PHASE_SUBDIVISION) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmtInsert = mysqli_prepare($conn, $insertSql);
                mysqli_stmt_bind_param($stmtInsert, "ssssssssssss", $firstName, $lastName, $email, $contactNumber, $passwordHash, $country, $province, $cityMunicipality, $barangay, $lotBlk, $street, $subdivision);
                if (mysqli_stmt_execute($stmtInsert)) {
                    $registerMessage = "User has been registered successfully.";
                } else {
                    $registerMessage = "Error: " . mysqli_error($conn);
                }
                mysqli_stmt_close($stmtInsert);
            }
            mysqli_stmt_close($stmt);
        } else {
            $registerMessage = "Error: All fields are required.";
        }
    } elseif (isset($_POST["login"])) {
        // Handle login
        $loginEmail = $_POST["loginEmail"];
        $loginPassword = $_POST["loginPassword"];
        $loginMessage = ""; // Initialize login message
    
        // Check if email and password are empty
        if (empty($loginEmail) || empty($loginPassword)) {
            if (empty($loginEmail)) {
                $loginMessage = "Error: Email is required.";
            } elseif (empty($loginPassword)) {
                $loginMessage = "Error: Password is required.";
            }
        } else {
            // Check if the email exists in the database
            $checkSql = "SELECT * FROM USERS WHERE EMAIL = ?";
            $stmt = mysqli_prepare($conn, $checkSql);
            mysqli_stmt_bind_param($stmt, "s", $loginEmail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
    
            if (mysqli_stmt_num_rows($stmt) > 0) {
                // Email exists, check if password matches
                mysqli_stmt_bind_result($stmt, $userId, $firstName, $lastName, $email, $contactNumber, $passwordHash, $country, $province, $cityMunicipality, $barangay, $lotBlk, $street, $subdivision);
                mysqli_stmt_fetch($stmt);
                if (password_verify($loginPassword, $passwordHash)) {
                    $loginMessage = "Login successful.";
                    header("Location: home.php");
                    // Perform further actions after successful login
                } else {
                    $loginMessage = "Error: Incorrect password.";
                }
            } else {
                $loginMessage = "Error: Email not found.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
}


// Close database connection
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anek+Gujarati&family=PT+Serif&family=PT+Serif+Caption&family=Prata&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!-- Ensure icons CSS is included -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>

<nav style="background: #060000; display: flex; justify-content: center; align-items: center; height: 60px;">
    <img src="f.png" alt="Logo" style="height: 50px;"> 
    <!-- Adjust 'height' as needed -->
</nav>

    <div class="container p-5 form-container">


    <div class="row justify-content-center align-items-center" style="min-height: 100vh;"> <!-- Ensure full vertical centering within the viewport -->
    <div class="col-md-4">
        <p class="text-white fs-5">Discover the vibrant portfolio of Vida Moira Farala, a testament to a journey filled with remarkable skills, achievements, and relentless passion. Vida stands out as a dedicated student whose portfolio brims with diverse projects, enriching experiences, and profound personal insights. This platform invites you on an inspiring exploration of Vida's professional voyage and academic endeavors. Please login or register to engage fully with the essence of Vida's professional and academic landscape.</p>
    </div>


            <div class="col-md-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation" style="flex: 1;">
                        <button class="nav-link active w-100 text-white fs-5 rounded-top-4" style="background: #060000; border: none;" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>&nbsp;
                    <li class="nav-item fs-4" role="presentation" style="flex: 1;">
                        <button class="nav-link w-100 text-white rounded-top-4 fs-5" style="border: none;" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <!-- LOGIN FORM -->
                        <form class="p-5 rounded-bottom-4 fs-6" autocomplete="off" method="post">
                        <?php if (!empty($loginMessage)) : ?>
                            <div id="loginAlert" class="alert alert-info" role="alert">
                                <?php echo $loginMessage; ?>
                            </div>
                        <?php endif; ?>
 
                            <div class="user-message fs-2 text-center" style="background-color: none; color: goldenrod; letter-spacing: 3px; font-weight: 1000;">
                                USER LOGIN
                            </div>
                            <div class="user-message mb-4 p-3 fs-5 text-center" style="background-color: none; color: white;">
                                Please enter your email address and password to log in.
                            </div>
                            <div class="form-group mb-3">
                                <label for="loginEmail" class="form-label text-white">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                                    <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="loginPassword" class="form-label text-white">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-lock'></i></span>
                                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                                    <button class="input-group-text" type="button" id="togglePassword">
                                        <i class='bx bx-show'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" class="link-light" style="text-decoration: underline;">Forgot Password?</a>
                            </div>
                            <button id="login" name="login" type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                        </form>
                    </div>

    <!-- REGISTRATION FORM -->
                    
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form class="p-5 rounded-bottom-4" autocomplete="off" method="post">
                        <?php if (!empty($registerMessage)) : ?>
                            <div id="registerAlert" class="alert alert-info" role="alert">
                                <?php echo $registerMessage; ?>
                            </div>
                        <?php endif; ?>


                            <div class="user-message fs-2 text-center" style="background-color: none; color: goldenrod; letter-spacing: 3px; font-weight: 1000;">
                                REGISTRATION
                            </div>
                            <div class="user-message mb-4 p-3 fs-5 text-center" style="background-color: none; color: white;">
                                Please fill out the form to register for a new account.
                            </div>

                            <h3 class="text-white" style="display: flex; justify-content: center; align-items: center;">Personal Details</h3>

                            <div class="row">
                                <div class="col form-group mb-3">
                                    <label for="firstName" class="text-white">First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-user'></i></span>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                                    </div>
                                </div>
                                
                                <div class="col form-group mb-3">
                                    <label for="lastName" class="text-white">Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-user'></i></span>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="registerEmail" class="text-white">Email address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                                        <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Enter email">
                                    </div>
                                </div>
                            
                                <div class="col-md-6 form-group mb-3">
                                    <label for="contactNumber" class="text-white">Contact Number</label>
                                    <div class="input-group">
                                        <select class="input-group-text" id="countryCode">
                                            <!-- Country code options here -->
                                        </select>
                                        <input type="tel" class="form-control" id="contactNumber" name="contactNumber"  placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="registerPassword" class="text-white">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-lock'></i></span>
                                    <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Password">
                                    <button class="input-group-text" type="button" id="toggleRegisterPassword"><i class='bx bx-show'></i></button>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="repeatPassword" class="text-white">Repeat Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-lock'></i></span>
                                    <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="Repeat Password">
                                    <button class="input-group-text" type="button" id="toggleRepeatPassword"><i class='bx bx-show'></i></button>
                                </div>
                            </div>

                            <h3 class="text-white" style="display: flex; justify-content: center; align-items: center;">Address</h3>

                            <div class="form-group mb-3">
                                <label for="country" class="text-white">Country</label>
                                <div class="custom-select-wrapper">
                                    <select class="form-control" id="country" name="country">
                                        <option value="">Select Country</option>
                                        <!-- JavaScript will populate country options here -->
                                    </select>
                                </div>
                            </div>

                            <div class="row">   
                                <div class="col-md-4 form-group mb-3">
                                    <label for="province" class="text-white">Province</label>
                                    <div class="custom-select-wrapper">
                                        <select class="form-control custom-select" id="province" name="province">
                                            <option value="">Select Province</option>
                                            <!-- Province options will be filled here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="cityMunicipality" class="text-white">City/Municipality</label>
                                    <div class="custom-select-wrapper">
                                        <select class="form-control custom-select" id="cityMunicipality" name="cityMunicipality">
                                            <option value="">Select City/Municipality</option>
                                            <!-- City/Municipality options -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="barangay" class="text-white">Barangay</label>
                                    <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Barangay">
                                </div>
                                
                            </div>
                        
                            <!-- Address Inputs -->
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label for="lotBlk" class="text-white">Lot/Blk</label>
                                    <input type="text" class="form-control" id="lotBlk" name="lotBlk" placeholder="Lot/Blk">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="street" class="text-white">Street</label>
                                    <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="subdivision" class="text-white">Phase/Subdivision</label>
                                    <input type="text" class="form-control" id="subdivision" name="subdivision" placeholder="Phase/Subdivision">
                                </div>
                            </div>
                        
                            <button id="register" name="register" type="submit" class="btn btn-primary w-100 mt-3">Register</button>

                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Design for active nav tab -->
<script src="tabbutton.js"></script> 
<!-- Password Toggle Eye-->
<script src="passwordtoggle.js"></script> 
<!-- Array of Countries -->
<script src="country.js"></script> 
<!-- Contact Number Country Codes -->
<script src="countrycodes.js"></script> 
<!-- Array of Provinces -->
<script src="provinces.js"></script> 
<!-- Array of City/Municipality according to Province-->
<script src="citymunicipality.js"></script> 

<script>
    // Automatically hide the alert messages after 5 seconds
    setTimeout(function() {
        var registerAlert = document.getElementById('registerAlert');
        var loginAlert = document.getElementById('loginAlert');
        if (registerAlert) {
            registerAlert.style.display = 'none';
        }
        if (loginAlert) {
            loginAlert.style.display = 'none';
        }
    }, 5000); // 5000 milliseconds = 5 seconds
</script>


    
</html>
