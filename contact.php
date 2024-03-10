<?php
include "database.php"; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $contactErrorMessage = "";

    // Check if any of the fields are empty
    if (empty($name) || empty($email) || empty($message)) {
        $contactErrorMessage = "Error: All fields are required.";
    } else {
        // Validate email existence and match with first name and last name
        $checkSql = "SELECT * FROM USERS WHERE EMAIL = ?";
        $stmt = mysqli_prepare($conn, $checkSql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Email exists, check if it matches first name and last name
            mysqli_stmt_bind_result($stmt, $userId, $firstName, $lastName, $userEmail, $contactNumber, $passwordHash, $country, $province, $cityMunicipality, $barangay, $lotBlk, $street, $subdivision);
            mysqli_stmt_fetch($stmt);

            if ($name !== $firstName . ' ' . $lastName) {
                $contactErrorMessage = "Error: Name does not match the email.";
            }
        } else {
            $contactErrorMessage = "Error: Email not found.";
        }

        mysqli_stmt_close($stmt);

        // If there's no error, send the email
        if (empty($contactErrorMessage)) {
            // Email information
            $to = "vidafarala@gmail.com"; // Change this to your email address
            $subject = "New Message from Contact Form";
            $body = "Name: $name\nEmail: $email\nMessage: $message";

            // Send email
            if (mail($to, $subject, $body)) {
                $contactErrorMessage = "Email sent successfully!";
            } else {
                $contactErrorMessage = "Failed to send email. Please try again later.";
            }
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
    <title>Personal Website</title>
</head>

<body>

    <div class="bg-image"></div>
    

    <div class="sidebar">
        
        <div class="top">
            <div class="logo">
                <span>Personal Information</span>
            </div>
            <i class="bx bx-info-circle" id="btn"></i>
        </div>
        <div class="user">
            <img src="profile_image.jpg" alt="me" class="user-img">
            <div>
                <p class="bold">Vida Moira Farala</p>
                <p>Student</p>
            </div>
            
        </div>

        <hr>

        <div class="location-age">
            <p>Residence:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Philippines</p>
            <p>City:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;Quezon City</p>
            <p>Age:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;24</p>
        </div>

        <hr>

        <div class="skills-container">
            
            <div class="skills">
                <h3>Skills</h3>
                <h4>HTML</h4>
                <div class="progress-bar">
                    <div class="html">
                    </div>
                </div>
                <h4>CSS</h4>
                <div class="progress-bar">
                    <div class="css">
                    </div>
                </div>
                <h4>JavaScript</h4>
                <div class="progress-bar">
                    <div class="javascript">
                    </div>
                </div>
                <h4>Java</h4>
                <div class="progress-bar">
                    <div class="java">
                    </div>
                </div>
                <h4>Python</h4>
                <div class="progress-bar">
                    <div class="python">
                    </div>
                </div>
            </div>
            

        </div>

        <hr>

        <h3>Social Media</h3>
        <ul>
            <li>
                <a href="https://www.facebook.com/profile.php?viewas=100000686899395&id=100082847584038" target="_blank">
                    <i class="bx bxl-facebook"></i>
                    <span class="nav-item"></span>
                </a>
                <span class="tooltip"></span>
            </li>
            <li>
                <a href="https://www.instagram.com/chocopiggy143/" target="_blank">
                    <i class="bx bxl-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/vidafarala/" target="_blank">
                    <i class="bx bxl-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://www.tiktok.com/@vidafarala?lang=en" target="_blank">
                    <i class="bx bxl-tiktok"></i>
                </a>
            </li>
        </ul>

        <div class="footer">
            <span><i class='bx bx-copyright' ></i>Farala 2023</span>
        </div>
    </div>

    <!--    END OF USER INFO SIDEBAR    -->

    <div class="navbar">
        <div class="top-nav">
            <div class="logo-nav">
                <img src="f.png" alt="logo">
                <span>Personal Website</span>
            </div>
            <i class="bx bx-menu" id="btn_2"></i>
        </div>
        
        <ul>
            <li>
                <a href="home.php">
                    <i class="bx bx-home-alt-2"></i>
                    <span class="nav-item">Home</span>
                </a>
            </li>
            <li>
                <a href="resume.php">
                    <i class="bx bx-file"></i>
                    <span class="nav-item">Resume</span>
                </a>
            </li>
            <li>
                <a href="portfolio.php">
                    <i class="bx bx-folder-open"></i>
                    <span class="nav-item">Portfolio</span>
                </a>
            </li>
            <li>
                <a href="contact.php" class="active">
                    <i class="bx bx-phone"></i>
                    <span class="nav-item">Contact</span>
                </a>
            </li>
            <!-- Logout Button -->
            <li>
                <a href="index.php"> <!-- Update the href attribute with the logout page URL -->
                    <i class="bx bx-log-out"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    

    <!--        END OF NAVIGATION SIDEBAR       -->

    <div class="main-content">

       <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class='bx bxs-map' ></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Quezon City,</div>
                    <div class="text-two">Philippines</div>
                </div>

                <div class="phone details">
                    <i class='bx bxs-phone' ></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+63 919 374 1350</div>
                </div>

                <div class="email details">
                    <i class='bx bxs-envelope' ></i>
                    <div class="topic">Email</div>
                    <div class="text-one">vidafarala08@gmail.com</div>
                </div>
            </div>

            <div class="right-side">
                
                <div class="topic-text">Send me a message</div>
                <p>Welcome to the Contact Me page, your direct line to connect. Whether you have questions, feedback, or just want to say hello, feel free to use the provided form. I look forward to hearing from you and will respond promptly to ensure a seamless communication experience.</p>
        
                <form action="contact.php" method="post" id="contactForm">

                <?php if (!empty($contactErrorMessage)) : ?>
                    <div id="contactErrorAlert" class="alert alert-info" role="alert" style="background-color: #d1ecf1; padding: 10px; border-radius: 5px; color: black; margin-top: 10px; margin-bottom: 10px;">
                        <?php echo $contactErrorMessage; ?>
                    </div>
                <?php endif; ?>


                    <div class="input-box">
                        <input type="text" name="name" placeholder="Enter your name" style="background: white; height: 40px; color: black;">
                    </div>

                    <div class="input-box">
                        <input type="email" name="email" placeholder="Enter your email" style="background: white; height: 40px; color: black;">
                    </div>

                    <div class="input-box message-box">
                        <textarea name="message" placeholder="Enter your message here..." style="background: white; color: black;"></textarea>
                    </div>

                    <div class="button" style="margin-top: 6px; display: inline-block;">
                        <input type="submit" value="Send Now" id="send" name="submit" style="background: #996515; color: whitesmoke; font-size: 18px; outline: none; border: none; border-radius: 5px; padding: 8px 16px; transition: all 0.3s ease-in-out; cursor: pointer;">
                    </div>

                </form>

            </div>
        </div>
       </div>
              
    </div>

    

    <!--           END OF MAIN          -->

    

</body>

<!--JavaScript-->
<script>
    let btn = document.querySelector('#btn');
    let btn2 = document.querySelector('#btn_2');
    let sidebar = document.querySelector('.sidebar');
    let navbar = document.querySelector('.navbar');
    let send = document.querySelector('#send');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
        if (navbar.classList.contains('active')) {
            navbar.classList.remove('active');
        }
    }

    btn2.onclick = function () {
        navbar.classList.toggle('active');
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    }

    // Automatically hide the alert messages after 5 seconds
    setTimeout(function() {
        var contactErrorAlert  = document.getElementById('contactErrorAlert');
        if (contactErrorAlert) {
            contactErrorAlert.style.display = 'none';
        }
    }, 5000); // 5000 milliseconds = 5 seconds
</script>

</html>
