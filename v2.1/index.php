<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 21/10/2016
 * Time: 20:55
 */

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$toast = $_SERVER['HTTP_USER_AGENT'];
if(strpos($toast,'iPad') == true){

    $css = 'ipad.css';

}else{
    $css="styles.css";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>James Carr - Web Developer, PHP, Javascript, Website Design, Development, Bootstrap, CCS5, HTML</title>
    <META NAME="description" CONTENT="Web development portfolio; Who is James Carr - PHP and mysql back end Web developer, with front end javascript jquery and css3 building hand coded websites to your specification">
   <META name="keywords" content="James Carr, Web development, developer, PHP, MySQL, CSS3, HTML5, Bootstrap, front end, back end, website design, portfolio,responsive, mobile, app, application, SEO, upwork, jameson  " >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="http://localhost/bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?echo $css?>" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-88772435-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>
<div class="jumbotron-fluid consolefont" onclick="welcome();" id="landing">

    <div class="container-fluid header " id="header" >




        <div class="row hidden" id="links">
            <div class=" col-md-2 col-sm-2 col-lg-2 col-xs-3">
                <a href="#board"> <h4 class="hidden-xs">Portfolio</h4><h4 class="visible-xs">Work</h4></a>
            </div>
            <div class=" col-md-2 col-sm-2 col-lg-2 col-xs-3">
                <a href="#personal"> <h4 class="hidden-xs">About James</h4> <h4 class="visible-xs">About</h4></a>
            </div>
            <div class=" col-md-2 col-sm-2 col-lg-2 col-xs-3" id="contact">
                <a href="#fin"> <h4 class="hidden-xs" >Connect</h4> <h4 class="visible-xs">Connect</h4></a>
            </div>
            <div class=" text-right col-md-6 col-sm-6 col-lg-6 col-xs-3">
                <a href="#tiles"><h4 class="hidden-xs">James Carr Web Developer</span></h4><h4 class="visible-xs">Top</h4></a>
            </div>
        </div>
    </div>

    <!--    this is the landing section-->

    <div id="land" class="landing  window container col-md-12 fadein col-sm-12 col-xs-12 col-lg-12 whitesmoke">
        <!--padding and layout for the name and job title-->
        <div class="row namebadge ">
            <div class=" text-right  col-md-12 col-sm-12 col-xs-12 col-lg-12" id="title">

                <h2>James Carr<br>Web Developer</h2>
                <h4>Click anywhere to enter</h4>

            </div>

        </div>



        <div class="row  floor"  id="buzzword">

            <div class=" animbtn text-center col-md-3 col-sm-3 col-lg-3 col-xs-6 ">
                <h2>Design</h2>
            </div>
            <div class=" animbtn text-center col-md-3 col-sm-3 col-lg-3 col-xs-6 ">
                <h2>Develop</h2>
            </div>
            <div class=" animbtn text-center col-md-3 col-sm-3 col-lg-3 col-xs-6 ">
                <h2>De-Bug</h2>
            </div>
            <div class=" animbtn text-center col-md-3 col-sm-3 col-lg-3 col-xs-6 ">
                <h2>Deploy</h2>
            </div>

        </div>


    </div>
    <!--bottom of top section-->

    <div class="container buffer col-md-12 col-sm-12 col-lg-12 col-xs-12 paste hidden buffer" id="tiles">


        <div class="row">

            <a href="#fin"><div class="col-md-3 col-sm-3 col-xs-12 col-lg-3 tile contacttile">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h3 class=" black  text-center ">Connect</h3>
                    </div>


                    <div class=" col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <img class="img-responsive center-block" src="pics/connecting.png" >
                    </div>


                </div></a>

            <div class="col-md-7 yellow col-lg-7 col-sm-7 hidden-xs tile " style="background-color:yellow; opacity:.8;" >

                    <p><span id='greeting'>Hello</span> click on a tile or select a link from the navbar to see where it takes you<br> </p>

            </div>

            <div class="col-md-2 col-lg-2 col-sm-2 hidden-xs tile" style="background-color:blue;">

            </div>

        </div>

        <div class="row">

            <a href="bants.html" target="_blank"><div class="col-md-5 col-sm-5 col-lg-5 hidden-xs tile" style="background-color:green;">

                <h4 class="black pull-right"><i><b>"Why did the developer have no money?<br>Because he spent all his cache"</b></i></h4>

            </div></a>

            <a href="#board">  <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4 projects tile" >
                    <div class="col-md-12 tagline">

                        <h3 style="color: yellow;"> &lt;div id="portfolio"... &gt; </h3>

                        <h4 class="text-center"><span style="color: yellow;">function</span> <span style="color: orange" class="bold">projects()</span><span style="color: #8c7e6f;">{...}</span></h4>

                        <h3 style="color: yellow;"> &lt;/div&gt; </h3>
                    </div>
                </div></a>

            <a href="#personal">   <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 tile text-center info bold black" >
                    <div class="container col-md-12 col-sm-12 col-xs-12 col-lg-12">

                        <h4>Who Is James Carr?</h4>

                        <h1 class="about">?</h1>

                        <h5 class="hidden-xs hidden-sm">Let's Play<span class="hidden-sm "> Top Trumps And Find Out</span> </h5>
                    </div>
                </div></a>



        </div>

<!--        <div class="row buffer"></div>-->




    </div>

    <div id="board" class="container hidden bords consbar col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="row">
            <div class="col-md-8 whitesmoke col-lg-8 col-sm-8 col-xs-8">
                <p>http://jamesmcarr.cmd.exe</p>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 text-right">
                <ul class="list-unstyled bold black list-inline">
                    <li>_</li>
                    <li>&square;</li>
                    <li>X</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container buffer hidden col-md-12 col-sm-12 col-lg-12 col-xs-12" id="skills" >
        <!-- console log style list-->


        <div class="col-sm-12 bords col-xs-12 col-lg-12 col-md-12">

            <p>JamescarrDv Portfolio [Version 2.2]</p>
            <p>Copyright &lt;c&gt; jamesmcarr.co.uk.  All rights reserved.<br>
            <ul class="list-unstyled list-inline">
                <li onclick="option(112);" >F1.  Work</li>
                <li onclick="option(113);">F2.  Knowledge</li>
            </ul>
            <h4>Please select an option: <span id="choice"></span><span id="cursor"></span></h4>

            <div><p id="test"></p></div>


            <div class="row hidden" id="projects">

                <div onclick="cycle('up');" class="col-md-8 col-sm-12 col-lg-8 col-xs-12" id="jobpics">
                    <img src='#' class='img-responsive projimg' alt='project cover photo'>
                </div>



                <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12"  style="font-size: .9em;">



                    <ul class="list-unstyled col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                        <li >Project Title: <span  id="jobtit"></span> <span class="text-right pull-right visible-xs visible-sm" onclick="cycle('up');"> Next Project</span> </li>

                        <li>Project Context: <span  id="jobcont"></span>  </li>
                        <li><span id="jobwebs" ></span></li>
                        <li>Project Skills:
                            <ul class="nested" id="jobskills">



                            </ul>

                        </li>

                    </ul>



                </div>
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12"><div id="down" onclick="cycle('down');" class="col-md-6 hidden-sm hidden-xs  col-lg-6 nested" >
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Previous
    </div>



    <div id="up" onclick="cycle('up');" class="col-md-6 hidden-sm hidden-xs col-lg-6 nested">
        Next<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
    </div></div>
            </div>

            <!-- languages row-->
            <div class="row hidden" id="languages">


                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <h3>Languages</h3>

                        <ul class="list-unstyled">

                            <li class="php"><h4>PHP</h4></li>
                            <li class="mysql"><h4>MySQL</h4></li>
                            <li class="js"><h4>JavaScript</h4></li>
                            <li class="html"><h4>Java/Android</h4></li>
                            <li class="css"><h4>CSS3</h4></li>
                            <li class="bootst"><h4>Git</h4></li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <h3>Frameworks</h3>

                        <ul class="list-unstyled">

                            <li class="bootst"><h4>Bootstrap</h4></li>
                            <li class="css"><h4>Laravel</h4></li>
                            <li class="js"><h4>Vue</h4></li>
                            <li class="mysql"><h4>Eloquent ORM</h4></li>
                            <li class="php"><h4>Symfony</h4></li>
                            <li class="html"><h4>PHPUnit</h4></li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <h3>Tools</h3>

                        <ul class="list-unstyled">

                            <li class="js"><h4>Jira/Atlassian</h4></li>
                            <li class="html"><h4>GitLab</h4></li>
                            <li class="mysql"><h4>GitHub/BitBucket</h4></li>
                            <li class="php"><h4>Composer</h4></li>
                            <li class="bootst"><h4>Yarn</h4></li>
                            <li class="mysql"><h4>Agile working</li>


                        </ul>
                    </div>




                </div>




                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <br>
                    <br>


                </div>
            </div>


        </div>



    </div>

    <div class="window buffer hidden col-md-12 col-sm-12 col-lg-12 col-xs-12" id="personal">
        <div class="row black">
            <div class="col-md-12 col-xs-12 text-center">
                <h2 class="banner">Hi, I'm James:<span style="color: orange;"> I love to</span>  <span style="color: red;"><strong>code</strong> </span></h2>
            </div>
            <div class="col-md-12 text-center col-sm-12 col-xs-12 ">
                <h3><span style="color:#28a3ef"><i>But I do other stuff too...</i></span></h3>
            </div>
        </div>
        <div class="row">
            <div class="container col-md-offset-4 col-md-4  hidden-xs" id="pack" >
                <div class="col-md-12 ">
                    <div  onclick="deal();" class="cardwrap ">
                        <figure class="back">
                            <div class="trumps center-block"  >
                                <div class="col-md-12">
                                    <img src="pics/logo_toptrumps.png" class="img-responsive center-block">
                                </div>

                                <div class="col-md-12">
                                    <img src="pics/tfg.JPG" class="img-responsive center-block img-circle">
                                    <br>
                                    <label class="tfg center-block text-center text-capitalize" ><h4>Click to Play</h4></label>
                                </div>


                            </div>
                        </figure>

                    </div>
                </div>


            </div>


            <div id="deck" class="container  hidden-xs deck">


                <div class="col-md-4  col-sm-4 col-lg-4 ">
                    <div id="prof" onclick="flip(this);" class="cardwrap hidden ">
                        <figure class="back">
                            <div class="trumps center-block">
                                <div class="col-md-12">
                                    <img src="pics/logo_toptrumps.png" class="img-responsive center-block">
                                </div>

                                <div class="col-md-12">
                                    <img src="pics/tfg.JPG" class="img-responsive center-block img-circle">
                                    <br>
                                    <label class="tfg center-block text-center text-capitalize" ><h4>Team Fergcarrson & Friends</h4></label>
                                </div>


                            </div>
                        </figure>
                        <figure class="front">
                            <div class="trumps center-block">
                                <div class="col-md-12 text-center">
                                    <h4>James Carr - Professional</h4>
                                    <small class="text-left" >Latin : <span    type="button"  data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right"
                                                                               data-content="Etemology: Although seemingly from the Greek for glowing, leading historians beleive this name was in fact
                        created by the Romans as a joke to sound like 'serious professional'.  Oh those pesky Romans, always larking about!">Sirius Profesionaris</span></small>


                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <img src="pics/prof2.jpg" class="img-responsive">
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <img src="pics/prof3.jpg" class="img-responsive">
                                    </div>

                                    <br>
                                </div>

                                <div class="col-md-12 statement ">
                                    <small>Creative problem solver, versatile communicator and team player; Sirius Profesionaris is as at home entertaining clients as joining in office
                                        banter.</small>
                                </div>

                                <div class="col-md-12">
                                    <table class="table table-condensed table-hover">
                                        <tr>
                                            <td class="col-md-10" >Communicator</td>
                                            <td class="col-md-2" type="button"  data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right"
                                                data-content="Pretty adept at tailoring a style to meet the right audience, but also just loves a natter waiting for the kettle to boil.">93</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Team player</td>
                                            <td class="col-md-2">92</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Time manager</td>
                                            <td class="col-md-2">89</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Solution seeker</td>
                                            <td class="col-md-2">95</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Results driver</td>
                                            <td class="col-md-2">76</td>
                                        </tr>

                                    </table>
                                </div>


                            </div>
                        </figure>
                    </div>
                </div>


                <div class="col-md-4   col-sm-4  col-lg-4 ">
                    <div id="pers" onclick="flip(this);" class="cardwrap hidden">
                        <figure class="back">
                            <div class="trumps center-block"  >
                                <div class="col-md-12">
                                    <img src="pics/logo_toptrumps.png" class="img-responsive center-block">
                                </div>

                                <div class="col-md-12">
                                    <img src="pics/tfg.JPG" class="img-responsive center-block img-circle">
                                    <br>
                                    <label class="tfg center-block text-center text-capitalize" ><h4>Team Fergcarrson & Friends</h4></label>
                                </div>


                            </div>
                        </figure>
                        <figure class="front">
                            <div class="trumps center-block">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <h4>James Carr - Personal</h4>

                                    <small class="text-justify">Latin : <span type="button"  data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left"
                                                                              data-content="A traveller, explorer, thrill seeker (virtual and real) and constant joker.  Always trying to see the best in life, but with a healthy dose of cynicism and humor.">Adventuro Bantarium</span></small>

                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <img src="pics/advent1.jpg"  class="img-responsive">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <img src="pics/bday2.jpg" class="img-responsive">
                                    </div>
                                    <br>
                                </div>

                                <div class="col-md-12 statement">
                                    <small>Fun loving and positive, able to find the joys in life Bantarium is never one to miss out on a good adventure; virtual or in the real world!</small>
                                </div>

                                <div class="col-md-12">
                                    <table class="table table-condensed table-hover">
                                        <tr>
                                            <td class="col-md-10">Adventurer</td>
                                            <td class="col-md-2"><span type="button"  data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right"
                                                                       data-content="Self taught snowboarder, previous resident of switzerland and often to be heard saying simply: 'Follow the waymarkers'.">96</span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Music lover</td>
                                            <td class="col-md-2">76</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10" type="button"  data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="
                                        Mostly 360 nowadays (Level 21 Warlock Class, level 50 Nord) but well versed in Zelda and retro games too.">Gamer</td>
                                            <td class="col-md-2">62</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10" type="button"  data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Although I do help out at our allotment, really
                                        my girlfriend is the gardener; I just get involved for the afternoon tea.">Gardener</td>
                                            <td class="col-md-2">44</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Good timer</td>
                                            <td class="col-md-2">88</td>
                                        </tr>

                                    </table>
                                </div>


                            </div>
                        </figure>
                    </div>
                </div>


                <div class="col-md-4  col-sm-4  col-lg-4 ">
                    <div id="papp" onclick="flip(this);" class="cardwrap hidden ">
                        <figure class="back">
                            <div class="trumps center-block"  >
                                <div class="col-md-12">
                                    <img src="pics/logo_toptrumps.png" class="img-responsive center-block">
                                </div>

                                <div class="col-md-12">
                                    <img src="pics/tfg.JPG" class="img-responsive center-block img-circle">
                                    <br>
                                    <label class="tfg center-block text-center text-capitalize" ><h4>Team Fergcarrson & Friends</h4></label>
                                </div>


                            </div>
                        </figure>
                        <figure class="front">
                            <div class="trumps center-block">
                                <div class="col-md-12 text-center">
                                    <h4>James Carr - Pappa C</h4>
                                    <small class="text-left" type="button" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover"
                                           data-content="Roughly translated to 'Family Guy'.  Always happiest when surrounded by his girls but doesn't put up with any nonsense, girls are tough too, just look
                                        at princess Leia - now back on your feet soldier!">Latin : Homo Familiarmus</small>

                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <img src="pics/papliz.jpg"  class="img-responsive">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <img src="pics/fam.jpg" class="img-responsive">
                                    </div>
                                    <br>
                                </div>

                                <div class="col-md-12">
                                    <small>With the Jedi Code in one hand and Leia Organa in the other, Pappa C says princesses can be feminine and adventurous.</small>
                                </div>

                                <div class="col-md-12">
                                    <table class="table table-condensed table-hover">
                                        <tr>
                                            <td class="col-md-10">Jedi patience</td>
                                            <td class="col-md-2">87</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Dinner dates</td>
                                            <td class="col-md-2">44</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10" type="button" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                data-content="Ergh.  Soft play, at 9am on Sunday..? *sigh* Ok, get me a coffee.  Pub lunch afterwards you say..?" >
                                                Sunday morning playdates</td>
                                            <td class="col-md-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10">Bug hunting</td>
                                            <td class="col-md-2" type="button" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                data-content="Not just 500 server errors, but also spiders, beetles and other creepy crawlies!">96</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-10" type="button" data-container="body" data-toggle="popover" data-placement="left" data-trigger="hover"
                                                data-content="Everything is awesome, everything is cool when you're part of the team!">Lust for life</td>
                                            <td class="col-md-2">98</td>
                                        </tr>

                                    </table>
                                </div>


                            </div>
                        </figure>
                    </div>
                </div>




            </div>

            <div class="container mobtrump  visible-xs">
                <div class="row black">
                    <div class="col-xs-12 text-left" >
                        <h4 class=" php bold ">Who is James Carr?</h4>
                        <ul class="list-inline whitesmoke list-unstyled" >
                            <li>Designer</b></li>
                            <li>Coder</li>
                            <li>Gamer</li>
                            <li>Father</li><br>
                            <li>Level 49 Nord</li>
                            <li>Level 17 Warlock</li>
                        </ul>
                    </div>

                    <!-- joys of life-->
                    <div class="text-left col-xs-12">
                        <h4 class="js bold" >Lifes Little Joys</h4>
                        <ul class="list-inline bootst list-unstyled   ">
                            <li>Star Wars</li>
                            <li>Snowboarding</li>
                            <li>Mountains</li>
                            <li>Hiking</li><br>
                            <li>Gaming</li>
                            <li>Codewars</li>
                            <li>My Girls</li>
                            <li>Country and blues</li>
                        </ul>
                    </div>

                    <!-- challenges of life-->
                    <div class="text-left col-xs-12 ">

                        <h4 class="js2 bold">Lifes Little tests</h4>
                        <ul class="list-inline int list-unstyled  ">

                            <li>Sunday morning playdates</li>
                            <li>Food shopping</li>
                            <li>500 server errors</li>
                            <li>Bad website design</li><br>
                            <li>Ill informed opinions</li>
                            <li>The phantom menace</li>
                            <li></li>

                        </ul>
                    </div>


                </div>


            </div>

        </div>
        <div class="row text-center hidden-xs black">
            <h3 class="bold banner"><span class="php">Family Motto:</span><span style="color: green;" > <i>"Il n'y a pas d'essai"</span></i></h3>

        </div>

    </div>



    <div class="container hidden col-md-12 co-sm-12 col-lg-12 col-xs-12" id="fin">
        <h2 class="whitesmoke text-right">Come and say hello</h2>


    </div>

    <div id="footer" class="container hidden col-md-12 col-sm-12 col-lg-12 col-xs-12 footer">
        <div class="row meths">
            <div class="container text-center col-sm-4 col-md-4 col-xs-12">
                <h5>twitter</h5>
                <h6> <a href="https://twitter.com/JamesmcarrPHP" target="_blank">@jamesmcarrPHP</a></h6>
            </div>

            <div class="container text-center col-sm-4 col-md-4 col-xs-12">
                <h5>email</h5>
                <h6><a href="mailto:james@jamesmcarr.co.uk" target="_blank">james@jamesmcarr.co.uk</a></h6>
            </div>

            <div class="container text-center col-sm-4 col-md-4 col-xs-12">
                <h5>LinkedIn</h5>
                <h6><a href="https://uk.linkedin.com/in/jamescarr29" target="_blank">LinkedIn profile</a></h6>
            </div>

        </div>

    </div>




</div>
<!--this is the bottom of the main jumbotron-->

</body>
<script>function greeting(){
        var time = new Date().getHours(),

            greet = document.getElementById('greeting');

        if (time>0 && time <6){
            greet.innerHTML = "Crikey it's a bit early; I'm are still asleep but";
        }else if (time>6 && time <12){
            greet.innerHTML = "Good morning!";
        }else if (time>12 && time<18){
            greet.innerHTML = "Good afternoon!";
        }else{
            greet.innerHTML = "Good evening! ";
        }



    }greeting();</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js.js"></script>

</html>

