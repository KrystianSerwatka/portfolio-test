<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krystian Serwatka - Web Developer</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,400,700&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- for on scroll animations -->
    <link rel="stylesheet" href="animate.css">
    <script src="js/wow.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- navbar starts here -->
        <nav>
            <span id="brand">
                <a href="index.html">Krystian Serwatka</a>
            </span>

            <ul id="menu">
                <li><a href="index.html">home<span>.</span></a></li>
                <li><a href="work.html">work<span>.</span></a></li>
                <li><a href="about.html">about<span>.</span></a></li>
                <li><a href="contact.html">contact<span>.</span></a></li>
            </ul>

            <div id="toggle">
                <div class="span">menu</div>
            </div>
        </nav>

        <div id="resize">
            <div class="close-btn">close</div>

            <<ul id="menu">
                <li><a href="index.html">home<span>.</span></a></li>
                <li><a href="work.html">work<span>.</span></a></li>
                <li><a href="about.html">about<span>.</span></a></li>
                <li><a href="contact.html">contact<span>.</span></a></li>
                </ul>
        </div>
        <!-- navbar ends here -->

        <div class="whitespace"></div>

        <!-- hero section starts here say hello 👋 -->
        <div class="container">
            <div class="hero-content">
                <br><br>

                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="wow fadeInUp" data-wow-delay="1s">say hello 👋</h3><br>
                        <p class="wow fadeInUp" data-wow-delay="1.2s">If you want to ask me about anything, give advice or just make contact, do not be shy, write!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- hero section ends here -->
        <!-- form section starts here -->
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-12">
                    <form name="contact-form" id="contact-form" method="post" action="submitForm.php">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="1.4s">
                                <label for="contact_name">Name:</label>
                                <div class="textarea wow fadeInUp">
                                    <input type="text" name="name" id="contact_name" value="" required>
                                </div>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="1.6s">
                                <label for="contact_subject">Subject:</label>
                                <div class="textarea wow fadeInUp">
                                    <input type="text" name="subject" id="contact_name" value="" required>
                                </div>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="1.8s">
                                <label for="contact_email">Email:</label>
                                <div class="textarea wow fadeInUp">
                                    <input type="email" name="email" id="contact_email" value="" required>
                                </div>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="2.0s">
                                <label for="contact_project">Message:</label>
                                <div class="textarea wow fadeInUp">
                                    <textarea type="email" name="textarea" id="contact_project" rows="6" value="" required></textarea>
                                </div>
                            </li>
                        </ul>

                        <button type="submit" name="submit" id="contact_submit" class="send wow fadeInUp" data-wow-delay="2.2s">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- form section ends here -->

        <div class="whitespace"></div>

        <!-- footer starts here -->
        <div class="footer">
            <div class="container">
                <br><br>

                <div class="collab">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="wow fadeInUp">Got an interesting project? I can help you.</p>
                        </div>
                    </div>
                </div>

                <br>

                <div class="hr">
                    <div class="row"></div>
                </div>
                <br><br>

                <div class="info">
                    <div class="row">
                        <div class="col-lg-4 text-sm-center" id="personal">
                            <p class="wow fadeInUp">connect with me</p>
                            <h4 class="wow fadeInUp" data-wow-delay="0.2s">fb /krystian.serwatka</h4>
                            <br><br>
                        </div>

                        <div class="col-lg-4 text-sm-center" id="media">
                            <p class="wow fadeInUp" data-wow-delay="0s">follow me</p>

                            <ul>
                                <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="https://www.facebook.com/krystian.serwatka?ref=bookmarks" target="_blank">fb</a>
                                </li>
                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="https://www.instagram.com/serwaxd/?hl=pl" target="_blank">ig</a>
                                </li>
                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s">
                                    <a href="https://twitter.com/Serwaxd" target="_blank">tw</a>
                                </li>
                                <li id="gh" class="wow fadeInUp" data-wow-delay="1.0s">
                                    <a href="https://github.com/KrystianSerwatka" target="_blank">gh</a>
                                </li>
                            </ul>

                            <br><br>
                        </div>
                        <div class="col-lg-4 text-sm-center" id="address">

                            <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
                            <h4 class="wow fadeInUp" data-wow-delay="0.2s">krystianselk@gmail.com</h4>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends here -->
    </div>
    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Ion Icons -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- GREENSOCK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript">
        // navigation starts here
        $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
        });

        $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
        });

        $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
        });
        // navigation ends here

        // nav animation

        TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
        })

        TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
        }, 0.1);

        // nav animation ends

        new WOW().init();
    </script>
</body>


</html>