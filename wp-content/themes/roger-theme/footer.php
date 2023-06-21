<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer-container {
            background: linear-gradient(to right, #054A91, #3E7CB1);
            transition: background 0.3 ease;
            padding: 20px;
            display: flex;
            justify-content: center;
            /* Aligns content horizontally in the center */
            align-items: center;
            color: #ffffff;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-links>div {
            margin-right: 20px;
            margin-bottom: 20px;
            /* Adds some spacing between the sections */
        }

        .footer-links h3 {
            margin-top: 0;
            /* Removes the default margin for the heading */
        }

        .footer-info {
            font-size: 12px;
        }

        .over-mij {
            width: 325px;
        }

        .widgets {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .footer-widget {
            padding-right: 20px;
        }

        /* Add a media query for smaller screens */
        @media only screen and (max-width: 768px) {
            .footer-links>div {
                margin-right: 0;
                margin-bottom: 20px;
                width: 100%;
            }

            .over-mij {
                width: 100%;
            }

            .widgets {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

</body>

</html>

<footer>
    <div class="footer-container">
        <div class="footer-links">
            <div class="about-me">
                <!-- Add your about me content here -->
                <h3>Over mij</h3>
                <div class="over-mij">
                    <p>Ik ben Roger Engel en dit is mijn zelfgemaakte theme voor een wordpress website.</p>
                    <div class="widgets">
                        <div class="footer-widget">
                            <a href="" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" width="fit-content" height="40px">
                            </a>
                        </div>
                        <div class="footer-widget">
                            <a href="" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/github.png" width="fit-content" height="40px">
                            </a>
                        </div>
                        <div class="footer-widget">
                            <a href="" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" width="fit-content" height="40px">
                            </a>
                        </div>
                        <div class="footer-widget">
                            <a href="" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" width="fit-content" height="40px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <!-- Add your contact information here -->
                <h3>Contact</h3>
                <p>Email: EenEmail@gmail.com</p>
                <p>Telefoon Nummer: 06111111</p>
                <div class="footer-info">
                    <p>&copy; <?php echo date("Y"); ?> Droger. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>