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
    <link rel="stylesheet" href="style.css">
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
                <a href="home.php" class="active">
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
            <div class="banner">
                <div class="banner-text">
                    <h2 class="banner-text1">Explore my Website!</h2>
                    <h1 class="banner-text2">Hi! I'm Vida</h1>
                    <a href="portfolio.php" class="banner-button" id="btn_3">Explore Now</a>

                </div>
            </div>


        <div class="container">
            <h2 class="heading" id="Explore">My Services</h2>
            <div class="cards-container">
                
                <div class="box-container">

                    <div class="box">
                        <h3>HTML 5</h3>
                        <p>I specialize in crafting clean, semantic markup that forms the backbone of modern, responsive websites. My proficiency ensures that your content is not only visually appealing but also accessible across devices, providing a solid foundation for an exceptional experience. Precision, innovation, and attention to detail are key elements of my approach.</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box">
                        <h3>CSS 3</h3>
                        <p>With advanced skills in CSS 3, I excel at designing visually stunning and responsive user interfaces. Leveraging the latest features, I adeptly create fluid layouts, engaging animations, and ensure cross-browser compatibility. Your website will not only look great but also provide a seamless and intuitive experience on any device.</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box">
                        <h3>JavaScript</h3>
                        <p>My JavaScript skills allow me to add dynamic and interactive elements seamlessly to your website. From creating responsive navigation menus to implementing complex functionality, I leverage the power of JavaScript to enhance user engagement and deliver a more immersive and captivating browsing experience.</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box">
                        <h3>Java</h3>
                        <p>As a skilled Java developer, I offer competence in building robust, scalable applications. Whether it's server-side development, enterprise solutions, or creating versatile and responsive desktop applications, my Java skills ensure the delivery of secure, high-performance software that precisely meets your evolving business needs.</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box">
                        <h3>Python</h3>
                        <p>
                            Proficient in Python, I bring versatility to your projects. From web development to data analysis, automation, my Python skills enable me to deliver efficient, maintainable, and scalable solutions tailored to your specific requirements. With expertise in diverse frameworks, I ensure robust and customized solutions for your needs</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box">
                        <h3>Web Development</h3>
                        <p>
                            My comprehensive web development skills cover both front-end and back-end technologies. From creating visually appealing, responsive, user-friendly interfaces to building the server-side logic that powers your application, I offer end-to-end solutions for a seamless experience. Additionally, I prioritize scalability and performance in projects.</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box">
                        <h3>UI/UX Design</h3>
                        <p>With a keen eye for design and a deep understanding of user experience principles, I specialize in creating intuitive and visually pleasing interfaces. My UI/UX design skills ensure that your users not only enjoy the aesthetics but also benefit from a well-thought-out, user-centric design that enhances overall usability and satisfaction.</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="heading">Price Plans</h2>
            <div class="cards-container">
                
                <div class="box-container">

                    <div class="box-2">
                        <h3>Starter</h3>
                        <p><span>FREE*</span></p>
                        <p><i class='bx bx-check' ></i>UI Design</p>
                        <p><i class='bx bx-check' ></i>Web Development</p>
                        <p style="color: rgb(94, 94, 94);"><i class='bx bx-x' ></i>Logo Design</p>
                        <p style="color: rgb(94, 94, 94);"><i class='bx bx-x' ></i>Database</p>
                        <p style="color: rgb(94, 94, 94);"><i class='bx bx-x' ></i>Optimization</p>
                        <a href="contact.php" class="button">Avail Now</a>
                        <h6>*Free only when ordering paid services</h6>
                    </div>

                    <div class="box-2">
                        <h3>Hourly Payment</h3>
                        <p>PHP <span>1,605</span> PER HOUR</p>
                        <p><i class='bx bx-check' ></i>UI Design</p>
                        <p><i class='bx bx-check' ></i>Web Development</p>
                        <p><i class='bx bx-check' ></i>Logo Design</p>
                        <p style="color: rgb(94, 94, 94);"><i class='bx bx-x' ></i>Database</p>
                        <p style="color: rgb(94, 94, 94);"><i class='bx bx-x' ></i>Optimization</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>

                    <div class="box-2">
                        <h3>Full Time</h3>
                        <p>PHP <span>200,000</span> PER MONTH</p>
                        <p><i class='bx bx-check' ></i>UI Design</p>
                        <p><i class='bx bx-check' ></i>Web Development</p>
                        <p><i class='bx bx-check' ></i>Logo Design</p>
                        <p><i class='bx bx-check' ></i>Database</p>
                        <p><i class='bx bx-check' ></i>Optimization</p>
                        <a href="contact.php" class="button">Avail Now</a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="heading">Testimonies</h2>
            <div class="testimonials-section">

                <div class="owl-carousel owl-theme testimonials-container">

                    <!--    ITEM 1 STARTS HERE-->

                    <div class="item testimonial-card">
                        <main class="test-card-body">
                            <div class="quote">
                                <i class="fa fa-quote-left"></i>
                                <h2>Brilliant Innovations!</h2>
                                <p>I had the privilege of collaborating with Vida on a class project, and their coding skills were nothing short of awesome. From solving intricate problems to implementing cutting-edge technologies, Vida brought a level of precision and creativity that elevated our project to new heights.</p>
                                <div class="ratings">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </main>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="person-1.jpg" alt="person-1">
                            </div>
                            <div class="profile-desc">
                               <span>Christian Grafil</span> 
                               <span>BSIT-MI Student</span>
                            </div>
                        </div>
                    </div>
                    <!--    ITEM 1 ENDS HERE    -->

                    <!--    ITEM 2 STARTS HERE-->
                    
                    <div class="item testimonial-card">
                        <main class="test-card-body">
                            <div class="quote">
                                <i class="fa fa-quote-left"></i>
                                <h2>Excellent Direction!</h2>
                                <p>Working with Vida on our class project was an incredible experience. From the initial concept to the final implementation, their awesome coding skills and attention to detail made a significant impact. Vida truly raised the bar in turning our ideas into a successful reality.
                                    <br><br>
                                </p>
                                <div class="ratings">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </main>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="person-2.jpg" alt="person-2">
                            </div>
                            <div class="profile-desc">
                               <span>Maoi Madrid</span> 
                               <span>BSIT-MI Student</span>
                            </div>
                        </div>
                    </div>
                    <!--    ITEM 2 ENDS HERE    -->

                    <!--    ITEM 3 STARTS HERE-->
                    
                    <div class="item testimonial-card">
                        <main class="test-card-body">
                            <div class="quote">
                                <i class="fa fa-quote-left"></i>
                                <h2>Awesome!</h2>
                                <p>Collaborating with Vida on our database management project was a journey marked by their outstanding coding skills. Their ability to transform complex concepts into efficient systems was truly commendable. Vida's dedication to delivering innovative solutions made our project stand out, setting a new standard for excellence.</p>
                                <div class="ratings">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </main>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="person-3.jpg" alt="person-3">
                            </div>
                            <div class="profile-desc">
                               <span>Jules Bumatay</span> 
                               <span>BSIT-MI Student</span>
                            </div>
                        </div>
                    </div>
                    <!--    ITEM 3 ENDS HERE    -->

                   
                    
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript" src="home.js"></script>

</html>