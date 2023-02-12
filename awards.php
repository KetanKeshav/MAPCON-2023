<!DOCTYPE html>
<html>
<?php $page = "awards"; ?>

<head>
    <?php include 'include/head.php'; ?>

    <title>Awards | MAPCON 2023</title>

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <?php include 'include/navbar.php'; ?>
            </div>
        </header>
        <!-- end header section -->

    </div>
    <div class="content_bg">
        <!-- client section -->
        <section class="client_section">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        <span>Awards</span>
                    </h2>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Award</th>
                            <!-- <th scope="col">Prize</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>MAPCON Best Paper Award(Academia & Industry)</td>
                            <!-- <td>₹ 50,000</td> -->
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>MAPCON Best Student Paper Awards</td>
                            <!-- <td>₹ 50,000</td> -->
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>MAPCON Best Student Design Contest Awards</td>
                            <!-- <td>₹ 50,000</td> -->
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>MAPCON Travel Grants</td>
                            <!-- <td>₹ 50,000</td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <!-- sponsors section -->

    <?php include 'sponsors.php'; ?>

    <!-- end sponsprs section -->

    <?php include 'include/footer.php'; ?>

</body>

</html>