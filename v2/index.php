<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 04/10/2016
 * Time: 14:26
 */?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>James Carr Junior Developer</title>


    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="http://localhost/bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet"/>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link href="styles/backgrounds.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
</head>
<body>

<!--panels will be split into different jumbotrons.  first panel for landing page with fixed background image-->
<div class="jumbotron-fluid" id="landing">
    <div class="landing window container col-md-12 col-sm-12 col-xs-12 col-lg-12 ">
        <!--padding and layout for the name and job title-->
        <div class="row namebadge ">
            <div class=" text-right col-md-offset-6 col-sm-10 col-lg-offset-6 col-xs-10 col-md-4">

                <h2>James Carr<br>Junior Developer</h2>

            </div>

        </div>




        <div class="row  langslab">
            <div class=" col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h2>Languages</h2>
            </div>
        </div>
        <!--buttons for the languages, to be animated on page load-->
        <div class="row namebadge bottom">

            <div class=" animbtn text-center col-sm-offset-1 col-lg-offset-1 col-md-offset-1  col-xs-4 col-md-2 col-lg-2 col-sm-2">
                <h4>PHP</h4>


            </div>
            <div class=" animbtn text-center  col-xs-4 col-md-2 col-lg-2 col-sm-2">
                <h4>MySQL</h4>


            </div>
            <div class=" animbtn text-center  col-xs-4 col-md-2 col-lg-2 col-sm-2">
                <h4>Bootstrap</h4>


            </div>
            <div class=" animbtn text-center  col-xs-4 col-md-2 col-lg-2 col-sm-2">
                <h4>HTML5 & CSS3</h4>


            </div>
            <div class=" animbtn text-center  col-xs-4 col-md-2 col-lg-2 col-sm-2">
                <h4>Javacript & jQuery</h4>


            </div>


        </div>


    </div>
    <!-- bottom of landing panel-->

<!--start of next  panel-->

    <div class="container  col-md-12 col-sm-12 col-lg-12 col-xs-12" id="skills"  >
        <!-- console log style list-->

        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                <p>JamescarrJrDv Portfolio [Version 2.2]</p>
                <p>Copright &lt;c&gt; jamesfacedesigns.com.  All rights reserved.<br>
                    <br>
                    Please select an option:

                <ul class="list-unstyled">
                    <li>F1.  Projects</li>
                    <li>F2.  Languages</li>
                </ul>

                </p>



            </div>
        </div>

        <div class="row" id="projects"> <!-- will use onclick(this)function to add/remove hidden class-->
            <div class=" col-md-12 col-sm-12 col-lg-12 col-xs-12" style="color: whitesmoke;">
                <h3>F1:  Development Projects</h3>
                <br>
                <br>
            </div>


            <!-- projects row with carousel etc-->


            <div class="col-md-8 col-sm-8 col-lg-8 hidden-xs">
                <img src="pics/allotment.jpg" class="img-responsive" alt="project cover photo">


            </div>

            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <ul class="list-unstyled">
                    <li>Project Title: </li>
                    <li>Project Context: </li>
                    <li>Project Skills:
                        <ul class="nested">
                            <li>test nested list</li>
                            <li>test nested list</li>
                            <li>test nested list</li>
                            <li>test nested list</li>
                            <li>test nested list</li>
                            <li>test nested list</li>
                            <li>test nested list</li>
                            <li>test nested list</li>
                        </ul>
                    </li>
                    <br>
                    <li>Website:</li>
                </ul>

                <div class="col-md-6 col-sm-6 col-xs-6  col-lg-6 nested" >
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Previous
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 nested">
                    Next<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                </div>
            </div>
        </div>

        <!-- languages row-->
        <div class="row hidden  " id="languages">

            <div class=" col-md-12 col-sm-12 col-lg-12 col-xs-12" >
                <h3>F2:  Languages and Skills <small style="color: whitesmoke;">Please select a development area:</small></h3>

            </div>

            <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <h3>Front End</h3>
                </div>

                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6">
                    <span class="html"><h4>&lt; HTML 5 &gt;</h4></span>

                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6">
                    <span class="css">  <h4>&#123; CSS 3 &#125;</h4></span>


                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6">
                    <span class="bootst"><h4>Bootstrap</h4></span>


                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6">
                    <span class="js">   <h4>JavaScript</span><span class="js2">.()</span></h4>


                </div>

                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                    <h3>Back End</h3>
                </div>

                <div class="col-md-6  col-sm-6 col-lg-6 hidden-xs">
                    <h3>Design</h3>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
                    <span class="php"><strong> <h4>&lt;? php ?&gt;</h4></strong></span>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
                    <span class="mysql"> <h4><a> MySQL</a></h4></span>
                </div>
                <div class="col-xs-12 visible-xs">
                    <h3>Design</h3>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
                    <span style="font-family: 'Helvetica Neue'" >   <h4>PhotoScape X</h4></span>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
                    <span style="font-family: 'Helvetica Neue';color: #008272;"  >   <h4>Publisher</h4></span>
                </div>


                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <br>
                    <br>
                    <p>.... </p>

                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12">

                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <h3>Freetime Coding</h3>
                </div>

                <div class="col-md-12 col-sm-4 col-lg-12 col-xs-6 ">

                    <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                        <br>
                        <img src="pics/codewars.png"  class="img-responsive">
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 text-justify">
                        <br>
                        <p>Level 7 Kyu</p>
                    </div>

                </div>

                <div class="col-md-12 col-sm-4 col-lg-12 col-xs-6 ">

                    <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                        <br>
                        <img src="pics/ca.png"  class="img-responsive">
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 text-justify">
                        <br>
                        <p>Smashing through it</p>
                    </div>

                </div>

                <div class="col-md-12 col-sm-4 col-lg-12 col-xs-6 ">

                    <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                        <br>
                        <img src="pics/devbats.png"  class="img-responsive">
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12 col-lg-9 text-justify">
                        <br>
                        <p>Contender....Ready!</p>
                    </div>

                </div>

            </div>




        </div>

    </div>


    <!-- bottom div of skillz panel-->

    <!-- start of about panel-->
    <div class="window col-md-12 col-sm-12 col-lg-12 col-xs-12" id="personal">
        <div class="row black">
            <div class="col-md-12 col-xs-12 text-center">
                <h2>Hi, I'm James:<span style="color: white;"> I love to</span>  <span class="html"><strong>code</strong> </span></h2>
            </div>
            <div class="col-md-12 text-center col-sm-12 col-xs-12 ">
                <h3><span style="color: white;">But I do other stuff too...</span></h3>
            </div>
        </div>


        <div class="container  hidden-xs deck">


            <div class="col-md-4  col-sm-4 col-lg-4 ">
                <div id="prof" onclick="flip(this);" class="cardwrap ">
                    <figure class="front">
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
                    <figure class="back">
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
                                <small>Creative problem solver, versatile communicator and team player; Sirius Profesionaris is as at home entertaining clients as joining office
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
                <div id="pers" onclick="flip(this);" class="cardwrap">
                    <figure class="front">
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
                    <figure class="back">
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
                <div id="papp" onclick="flip(this);" class="cardwrap ">
                    <figure class="front">
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
                    <figure class="back">
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

        <div class="container  visible-xs">
            <div class="row black">
                <div class="col-xs-12 text-left" >
                    <h4 class=" php bold ">Who is James Carr?</h4>
                    <ul class="list-inline list1 list-unstyled" >
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

        <div class="row text-center hidden-xs black">
            <h3>Family Motto <i>"Il n'y a <span class="mysql"><a>pas d'essai"</a></span></i></h3>

        </div>

    </div>



</div>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<script src="http://localhost/Winternet/style/bootstrap-3.3.4/js/tests/vendor/jquery.min.js"></script>
<script src="http://localhost/Winternet/style/bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>

