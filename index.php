<!DOCTYPE html>
<html>
<?php $page = "index"; ?>

<head>
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MAPCON 2023</title>

    <?php include 'include/head.php' ?>
</head>

<body>

    <div class="hero_area">

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <?php include 'include/navbar.php' ?>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active slide-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="detail_box">
                                        <h2>Welcome To</h2>
                                        <h1>IEEE MAPCON 2023 </h1>
                                        <h2><b>Dec 10-14, 2023</b></h2>
                                        <h2><b>The Forum Celebration Centre and Wyndham Hotel, Ahmedabad</b></h2>
                                        <a href="./downloads/MAPCON 2023 - CFP.pdf" target="_blank" download="CFP">
                                            Download CFP
                                        </a>
                                        <a href="program.php" target="_blank">
                                            Schedule
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="detail_box">
                                        <h2>Welcome To</h2>
                                        <h1>IEEE MAPCON 2023</h1>
                                        <h2><b>Dec 10-14, 2023</b></h2>
                                        <h2><b>The Forum Celebration Centre and Wyndham Hotel, Ahmedabad</b></h2>
                                        <a href="./downloads/MAPCON 2023 - CFP.pdf" target="_blank" download="CFP">
                                            Download CFP
                                        </a>
                                        <a href="program.php" target="_blank">
                                            Schedule
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slide-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="detail_box">
                                        <h2>Welcome To</h2>
                                        <h1>IEEE MAPCON 2023</h1>
                                        <h2><b>Dec 10-14, 2023</b></h2>
                                        <h2><b>The Forum Celebration Centre and Wyndham Hotel, Ahmedabad</b></h2>
                                        <a href="./downloads/MAPCON 2023 - CFP.pdf" target="_blank" download="CFP">
                                            Download CFP
                                        </a>
                                        <a href="program.php" target="_blank">
                                            Schedule
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <div class="img-box">
                                <img src="images/MAPCON-LOGO.png" alt="">
                            </div>
                            <h2>
                                ABOUT <span>IEEE MAPCON</span> 2023
                            </h2>
                        </div>
                        <p style="font-weight: bold; color:black;font-size: 16px; text-align:justify">
                            IEEE MTT-S and IEEE AP-S have come together and signed a MoU for combining two 
                            flagship conferences of the respective societies in India (<b>IMaRC</b> and <b>InCAP</b>) 
                            to a single conference:<b> Microwave, Antennas, and Propagation Conference (MAPCON)</b>. 
                            The second edition of <b>MAPCON</b> will be held from <b>December 10-14, 2023</b> at 
                            <b>The Forum Celebration Centre and Wyndham Hotel at Ahmedabad, India</b>, a world heritage city. 
                            <b>MAPCON 2023</b> will create an international platform for Microwave, Antenna and Propagation 
                            experts and technologist from Industry, Academia and Startup ecosystem to collaborate and share 
                            their vision, expertise and knowledge. MAPCON 2023 will include technical sessions, poster sessions, 
                            special sessions, invited talks, workshops, tutorials, focused track on Young Professionals, Women in 
                            Engineering and SIGHT. Eminent professionals from International Space Agencies, Defence Establishments, 
                            National Research Organizations, Academia, and Industries will deliver expert talks and tutorials and 
                            organize special sessions related to recent developments.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <!-- <div class="detail-box"> -->
                    <div class="heading_container" id="venue">
                        <h2>
                            Conference Venue : <br><span>The Forum Celebration Centre and Wyndham Hotel, Ahmedabad, Gujarat, India</span>
                        </h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14689.957445320906!2d72.4529139!3d23.0057977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b283dfe041b%3A0x7dbde6b4b8617b3f!2sThe%20Forum%20-%20Celebration%20%26%20Convention!5e0!3m2!1sen!2sin!4v1676054615081!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- sponsors section -->

    <?php include 'sponsors.php'; ?>

    <!-- end sponsprs section -->

    <?php include 'include/footer.php'; ?>

    
</body>

</html>