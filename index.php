<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoM</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/84fcda7566.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <video autoplay loop muted id="myVideo">
                <source src="./assets/agne3.mp4" type="video/mp4">
            </video>
        </div>
        <div id="logo">

            <nav class="navbar">
                <h1> MoM</h1>
            </nav>

        </div>
        <!-- ********************************************************************* -->

        <div id="message">
            <div class="message">

                <div class="intro">
                    <div class="introduction">
                        <div id="company"><span>Museum of Movement</span> is</div>
                        <div id="title">COMING SOON</div>


                        <!-- form  -->
                        <div class="subscribe">
                            <p>Subscribe to be notified.</p>
                            <div id="result"></div>
                            <div class="form">

                                <form method="POST" action="newsletter.php">
                                    <div class="field">
                                        <input type="text" placeholder="Your name" name="name" required>
                                        <input type="email" placeholder="Your email" name="email" required>
                                        <input type="submit" value="NOTIFY ME" name="submit" class="button">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********************************************************************* -->
    <footer id="sticky-footer" class="fixed-bottom py-2 pr-5 text-white-50">
        <div class=" text-center">
            <small>
                <ul class="social-network social-circle">
                    <li><a href="info@museumofmovement.dk" class="icon" data-toggle="tooltip" data-placement="top"><i
                                class="fas fa-envelope"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/museum-of-movement/" class="icon"
                            data-toggle="tooltip" data-placement="top">
                            <i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/museumofmovement/" class="icon" data-toggle="tooltip"
                            data-placement="top">
                            <i class="fab fa-instagram"></i></a>
                    </li>



                </ul>
            </small>
        </div>
    </footer>


    <script>
    // initialize tooltip
    $('[data-toggle="tooltip"]').tooltip();
    </script>
</body>

</html>