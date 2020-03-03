<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 21/10/2016
 * Time: 20:55
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>James Carr - Web Developer, PHP, Javascript, Website Design, Development, Bootstrap, CCS5, HTML</title>
    <META NAME="description" CONTENT="Web development portfolio; Who is James Carr - PHP and mysql back end Web developer, with front end javascript jquery and css3 building hand coded websites to your specification">
    <META name="keywords" content="James Carr, Web development, developer, PHP, MySQL, CSS3, HTML5, Bootstrap, front end, back end, website design, portfolio,responsive, mobile, app, application, SEO, upwork, jameson  " >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="http://localhost/bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="test.css" rel="stylesheet"/>
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
<body style="background-color:black;">
<div class="jumbotron-fluid consolefont" onclick="welcome();"  id="landing">

    <div class="container-fluid header " id="header" >




        <div class="row hidden" id="links">
            <div class=" col-md-2 col-sm-2 col-lg-2 col-xs-3">
                <a href="#board"> <h4 class="hidden-xs">Portfolio</h4><h4 class="visible-xs">Work</h4></a>
            </div>
            <div class=" col-md-2 col-sm-2 col-lg-2 col-xs-3">
                <a href="#personal"> <h4 class="hidden-xs">About James</h4> <h4 class="visible-xs">About</h4></a>
            </div>
            <div class=" col-md-2 col-sm-2 col-lg-2 col-xs-3" id="contact">
                <a href="#fin"> <h4 class="hidden-xs" >Make a connection</h4> <h4 class="visible-xs">Connect</h4></a>
            </div>
            <div class=" text-right col-md-6 col-sm-6 col-lg-6 col-xs-3">
                <a href="#tiles"><h4 class="hidden-xs">James Carr Web Developer</span></h4><h4 class="visible-xs">Top</h4></a>
            </div>
        </div>
    </div>

    <!--    this is the landing section-->
    <div class="container buffer  col-md-12 col-sm-12 col-lg-12 col-xs-12" id="skills" >
        <!-- console log style list-->


        <div class="col-sm-12 bords col-xs-12 col-lg-12 col-md-12">

            <p>JamescarrDv Portfolio [Version 2.2]</p>
            <p>Copright &lt;c&gt; jamesmcarr.co.uk.  All rights reserved.<br>
            <ul class="list-unstyled list-inline">
                <li onclick="option(112);" >F1.  Work</li>
                <li onclick="option(113);">F2.  Knowledge</li>
            </ul>
            <h4>Please select an option: <span id="choice"></span><span id="cursor"></span></h4>

            <div><p id="test"></p></div>


            <div class="row " id="projects"> <!-- will use onclick(this)function to add/remove hidden class-->

                <div onclick="cycle('up');" class="col-md-8 col-sm-12 col-lg-8 col-xs-12" id="jobpics">



                </div>



                <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12"  style="font-size: .9em;">



                    <ul class="list-unstyled col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                        <li >Project Title: <span  id="jobtit"></span> <span class="text-right pull-right visible-xs visible-sm" onclick="cycle('up');"> Next Project</span> </li>

                        <li>Project Context: <span  id="jobcont"></span>  </li>
                        <li>Project Skills:
                            <ul class="nested" id="jobskills">

                            </ul>
                        </li>
                        <br>
                        <li><span id="jobwebs" ></span></li>
                    </ul>

                    <div id="down" onclick="cycle(this);" class="col-md-6 hidden-sm hidden-xs  col-lg-6 nested" >
                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Previous
                    </div>



                    <div id="up" onclick="cycle(this);" class="col-md-6 hidden-sm hidden-xs col-lg-6 nested">
                        Next<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    </div>

                </div>

            </div>

            <!-- languages row-->
            <div class="row hidden" id="languages">


                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <h3>Back End</h3>

                        <ul class="list-unstyled">

                            <li class="php"><h4>&lt;? Object Orientated PHP ?&gt;</h4></li>
                            <li class="php"><h4>MVC</h4></li>
                            <li class="php"><h4>PDO</h4></li>
                            <li class="mysql"><h4>Mysqli</h4></li>
                            <li class="mysql"><h4>Database Design</h4></li>
                            <li><h4>Linux Command Line</h4></li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <h3>Front End</h3>

                        <ul class="list-unstyled">

                            <li class="bootst"><h4>bootstrap</h4></li>
                            <li class="html"><h4>&lt;HTML 5&gt;</h4></li>
                            <li class="css"><h4>&#123;CSS3&#125;</h4></li>
                            <li class="mysql"><h4>SASS</h4></li>
                            <li ><span class="js">   <h4>JavaScript</span><span class="js2">.()</span></h4></li>
                            <li><h4>Mobile First Design</h4></li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <h3>Skills</h3>

                        <ul class="list-unstyled">

                            <li class="php"><h4>Hand Coded Solutions</h4></li>
                            <li class="php"><h4>Debugging</h4></li>
                            <li class="php"><h4>API Implementation</h4></li>
                            <li class="mysql"><h4>Version Control</h4></li>
                            <li class="mysql"><h4>Client Management</h4></li>
                            <li class="mysql"><h4>Wrangling The Powers of <span style="color:#3f7ee8;">G</span><span style="color:#cd3b2e;">o</span><span style="color:#daa304;">o</span><span style="color:#4285f4;">g</span><span style="color:#2c8d46;">l</span><span style="color:#cd3b2e ;">e</span> </h4></li>


                        </ul>
                    </div>




                </div>




                    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                        <br>
                        <br>
                        <p>.... </p>

                    </div>
                </div>

                <!--                <div class="col-md-4 hidden-sm col-lg-4 hidden-xs">-->
                <!---->
                <!--                    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">-->
                <!--                        <h3>Freetime Coding</h3>-->
                <!--                    </div>-->
                <!---->
                <!--                    <div class="col-md-12 col-sm-4 col-lg-12 col-xs-6 ">-->
                <!---->
                <!--                        <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">-->
                <!--                            <br>-->
                <!--                            <img src="pics/codewars.png"  class="img-responsive">-->
                <!--                        </div>-->
                <!---->
                <!--                        <div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 text-justify">-->
                <!--                            <br>-->
                <!--                            <p>Level 7 Kyu</p>-->
                <!--                        </div>-->
                <!---->
                <!--                    </div>-->
                <!---->
                <!--                    <div class="col-md-12 col-sm-4 col-lg-12 col-xs-6 ">-->
                <!---->
                <!--                        <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">-->
                <!--                            <br>-->
                <!--                            <img src="pics/ca.png"  class="img-responsive">-->
                <!--                        </div>-->
                <!---->
                <!--                        <div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 text-justify">-->
                <!--                            <br>-->
                <!--                            <p>Smashing through it</p>-->
                <!--                        </div>-->
                <!---->
                <!--                    </div>-->
                <!---->
                <!--                    <div class="col-md-12 col-sm-4 col-lg-12 col-xs-6 ">-->
                <!---->
                <!--                        <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">-->
                <!--                            <br>-->
                <!--                            <img src="pics/devbats.png"  class="img-responsive">-->
                <!--                        </div>-->
                <!---->
                <!--                        <div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 text-justify">-->
                <!--                            <br>-->
                <!--                            <p>Contender....Ready!</p>-->
                <!--                        </div>-->
                <!---->
                <!--                    </div>-->
                <!---->
                <!--                </div>-->




            </div>


        </div>



    </div>




</div>
<!--this is the bottom of the main jumbotron-->

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js.js"></script>

</html>