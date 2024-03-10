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
    <link rel="stylesheet" href="resume.css">
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
                <a href="resume.php"  class="active">
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

        <header class="title-page">My Resume</header>
            
         <div class="container">
            <main class="row">

                <!--        START OF CERTIFICATIONS     -->
                <section class="col">
                    <header class="title">
                        <h2>CERTIFICATIONS</h2>
                    </header>
                    <div class="contents">

                        <div class="box">
                            <h4>2023</h4>
                            <h3>Oracle Cloud Infrastructure 2023 Foundations Associate</h3>
                            <p>Oracle</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Artificial Intelligence Concepts</h3>
                            <p>IBM SkillsBuild</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>UX Design</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Analyzing User Data</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Creating Personas</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Ideation</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Implementation Planning</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Prototyping</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Multidevice Design</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Working with Computers and Devices</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>PowerPoint Essential Training | Office 365 | Microsoft 365 2020</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>PowerPoint Tips and Tricks</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Word Essential Training | Office 365 | Microsoft 365</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Word Tips and Tricks</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Excel Essential Training | Office 365 | Microsoft 365</h3>
                            <p>LinkedIn Learning</p>
                        </div>

                        <div class="box">
                            <h4>2022</h4>
                            <h3>Excel Tips and Tricks</h3>
                            <p>LinkedIn Learning</p>
                        </div>
                        
                    </div>
                </section>  
                
                <!--        END OF CERTIFICATIONS       -->

                <!--        START OF EDUCATION      -->
                <section class="col">
                    <header class="title">
                        <h2>EDUCATION</h2>
                    </header>
                    <div class="contents">
                        <div class="box">
                            <h4>2022 - Current</h4>
                            <h3>Bachelor's Degree</h3>
                            <p>National University Fairview</p>
                            <p>Information Technology with Specialization in Mobile and Internet Technology</p>
                        </div>

                        <div class="box">
                            <h4>2015 - 2018</h4>
                            <h3>Senior High School</h3>
                            <p>School of Saint Anthony</p>
                            <p>STEM</p>
                        </div>

                        <div class="box">
                            <h4>2012 - 2015</h4>
                            <h3>Junior High School</h3>
                            <p>School of Saint Anthony</p>
                        </div>

                        <div class="box">
                            <h4>2006 - 2012</h4>
                            <h3>Elementary</h3>
                            <p>School of Saint Anthony</p>
                        </div>
                        
                    </div>
                </section>

                <!--        END OF EDUCATION      -->

                <!--        START OF EXPERIENCE         -->

                <section class="col">
                    <header class="title">
                        <h2>EXPERIENCE</h2>
                    </header>
                    <div class="contents">

                        <div class="box">
                            <h4>2021 - 2022</h4>
                            <h3>Technical Support Representative</h3>
                            <p>Concentrix</p>
                        </div>
                        
                    </div>
                </section>     

                <!--        END OF EXPERIENCE         -->


            </main>
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