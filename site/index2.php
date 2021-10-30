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
        <section id='contact-map4' class='section-padding' style='display: none;'>
            <div class='container'>
                <div class='row'>
                    <div class='col-12'>
                        <div class='section-title-header text-center'>
                            <h2 class='section-title wow fadeInUp' data-wow-delay='0.2s'>Resident Card Lottery - Online
                                Registration:
                            </h2>
                            <p style='font-weight: bold;'>After Checking Your Answers And Put It Into Consideration, You
                                Have Qualified For A Chance To Win The Sweedish Resident Card. Complete The Below Steps
                                To Obtain The 'Sweedish Resident Card Lottery' Form</p>
                            <p>You may get the Sweedish Resident Card Lottery Form' with only one step, kindly click the
                                'SHARE TO CONTINUE' button below to share this information with 5 friends on WhatsApp so
                                That They Can Aslo Benefit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class='row justify-content-center'>
                    <div class='col-lg-8 col-md-12 col-xs-12'>
                        <div class='container-form wow fadeInLeft' data-wow-delay='0.2s'>
                            <div class='form-wrapper'>
                                <!-- <form role='form' method='post' id='contactForm' name='contact-form'
                                    data-toggle='validator'> -->
                                <div class='row'>

                                    <div class='col-md-12 form-line'>
                                        <div class='form-submit'>
                                            <a onclick='share1()' href='https://wa.me?text=text=%0A%0A%0A%0A*Sweeden%20Visa%20Lottery%20Application%20Form%202021/2022%20Is%20Out*%20%0A%0AThe%20Sweedish%20Visa%20Lottery%20online%20Application%20Form%202021/2022%20registration%20exercise%20which%20is%20the%20quickest%20way%20for%20all%20Foreigners%20interested%20in%20immigrating%20legally%20to%20live,%20Study%20and%20work%20in%20Sweeden.%0A%0A*The%20Resident%20Card%20Lottery%20Program%20also%20known%20as%20Visa%20Lottery%20program%20is%20a%20chance%20for%2087,000%20people%20from%20all%20over%20the%20world%20to%20become%20permanent%20and%20legal%20residents%20of%20the%20Sweeden,%20meaning%20that%20they%20can%20live.%20work%20and%20study%20in%20Sweeden.%0A%0A*Interested%20Applicants%20are%20to%20visit%20Online%20Registration%20Portal%0AThe%20Winners%20Will%20Be%20Drawn%20From%20Random%20Selection%20And%20There%20Is%20No%20Cost%20To%20Register.%0A%0A_Check%20Eligibility%20and%20Apply%20here:_%20%0A%0Ahttps://bit.ly/Sweeden-Immigration' data-action="share/whatsapp/share" target="_blank" class="btn btn-common" id="form-submit">
                                            <i class=' fa fa-paper-plane' aria-hidden='true'></i> Share to
                                            continue </a>
                                            <div id='msgSubmit' class='h3 text-center hidden'></div>
                                        </div>
                                    </div>

                                    <div class='col-md-12 form-line text-center mb-3'>
                                        <!-- <div class='form-submit'> -->
                                        Share it until the blue bar is full!
                                        <!-- </div> -->
                                    </div>

                                    <div class='col-md-12 form-line text-center mb-3'>
                                        <div class='progress'>
                                            <div class='progress-bar bg-warning' role='progressbar' style='width: 25%;'
                                                 aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>25%
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col-md-12 form-line text-center mb-3'>
                                        <!-- <div class='form-submit'> -->
                                        After sharing to WhatsApp Group, click the 'Resident Card Form' button to
                                        proceed:
                                        <!-- </div> -->
                                    </div>

                                    <div class='col-md-12 form-line text-center mb-3'>
                                        <div class='form-submit'>
                                            <a onclick='' class='btn btn-common' id='web1'><i
                                                        class='fa fa-paper-plane' aria-hidden='true'></i> Green Card
                                                Form </a>
                                            <div id='msgSubmit' class='h3 text-center hidden'></div>
                                        </div>
                                    </div>

                                    <div class='col-md-12 form-line text-center' style='color: red;'>
                                        <!-- <div class='form-submit'> -->
                                        Note: If you do not complete this step correctly, you will not Get US Green Card
                                        Registration Form.
                                        <!-- </div> -->
                                    </div>

                                </div>
                                <!-- </form> -->
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

    <script>
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
            document.getElementById('contact-map4').style.display = 'block';
            q3 = name;
            <?php
                ;
            ?>
            console.log(q1 + ' ' +  q2 + ' ' + q3);
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
