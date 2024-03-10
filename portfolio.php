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
    <link rel="stylesheet" href="portfolio.css">
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
                <a href="portfolio.php" class="active">
                    <i class="bx bx-folder-open"></i>
                    <span class="nav-item">Portfolio</span>
                </a>
            </li>
            <li>
                <a href="contact.php">
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
            <h2 class="heading">My Portfolio</h2>
            <div class="cards-container">
                
                <div class="box-container">

                    <div class="card">
                        <div class="face face1" id="card-1">
                            
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <h3>Agendask</h3>
                                <br>
                                <p>
                                    Introducing our school group project, a Task Managing Mobile Application was collaboratively developed. This comprehensive application integrates a notepad, task management, snooze functionality, and checklist features, offering users a versatile tool to streamline their daily activities. Demonstrating the team's proficiency in mobile app development, the project emphasizes enhanced task management efficiency for users on the go.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="face face1" id="card-2">
                            
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <h3>PharmaSync</h3>
                                <br>
                                <p>A Pharmacy Inventory Management System developed by our group using Java. This comprehensive application simplifies stock management, featuring real-time updates, prescription tracking, and automated reorder capabilities. As a team, they've successfully created a user-friendly solution that showcases their skills in Java programming and addresses the practical needs of pharmacy inventory management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="face face1" id="card-3">
                            
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <h3>Pet Adoption</h3>
                                <br>
                                <p>A Pet Adoption System meticulously crafted by our group using Java. This innovative application serves as a seamless platform connecting prospective pet owners with lovable animals seeking forever homes. With features like comprehensive pet profiles, adoption requests, and real-time updates, our Java-based system promotes responsible pet adoption and simplifies the process for both shelters and potential adopters. </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="face face1" id="card-4">
                            
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <h3>Le Millésime</h3>
                                <br>
                                <p>"Le Millésime," a Vintage Photography Website, is our group's passion project, intricately crafted in Java for a school assignment. Immerse yourself in the timeless allure of vintage photographs through an elegantly designed platform. Explore curated collections and relive the charm of bygone eras on Le Millésime, where every image tells a story.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="face face1" id="card-5">
                            
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <h3>Vibe My Cup</h3>
                                <br>
                                <p>Indulge in the aromatic world of coffee with our mobile delivery app, a collaborative effort by our student group. Tailored exclusively for coffee enthusiasts, our Java-based application ensures a seamless experience, allowing users to order their favorite brews with just a tap. From rich espressos to velvety lattes, savor the convenience of doorstep coffee delivery, brought to you by our passion for both technology and the perfect cup.</p>
                            </div>
                        </div>
                    </div>
                    
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

</script>


</html>