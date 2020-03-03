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
    <title>James Carr Dev Portfolio</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="http://localhost/bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link href="styles.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">


</head>

<script>
    setInterval(
   function cursor() {
        var x = document.getElementById("cursor");
       if(x.innerHTML ==="|"){
           x.innerHTML = " ";
       }else{
           x.innerHTML = "|";
       }
    },500);



    $(document).keydown(function(keyPressed) {
        if (keyPressed.keyCode == 112) {
            if($("#projects").hasClass('hidden') && $("#languages").hasClass('hidden')){
                $("#projects").removeClass('hidden');
            }else if(!$("#languages").hasClass('hidden') && $("#projects").hasClass('hidden') ){
                $("#projects").removeClass('hidden');
                $("#languages").addClass('hidden');
            }


        }

        else if (keyPressed.keyCode ==113)
        {
            if($("#projects").hasClass('hidden') && $("#languages").hasClass('hidden')){
                $("#languages").removeClass('hidden');
            }else if($("#languages").hasClass('hidden') && !$("#projects").hasClass('hidden') ){
                $("#projects").addClass('hidden');
                $("#languages").removeClass('hidden');
            }


        }

    });

function option(x) {
    var proj = document.getElementById("projects");
    var langs = document.getElementById("languages");


    if (x == 112) {
        if (proj.classList.contains('hidden') && langs.classList.contains('hidden')) {
            proj.classList.remove('hidden');
        } else if (!langs.classList.contains('hidden') && proj.classList.contains('hidden')) {
            proj.classList.remove('hidden');
            langs.classList.add('hidden');

        }
    } else if (x == 113) {
        if (proj.classList.contains('hidden') && langs.classList.contains('hidden')) {
            langs.classList.remove('hidden');
        } else if (langs.classList.contains('hidden') && !proj.classList.contains('hidden')) {
            langs.classList.remove('hidden');
            proj.classList.add('hidden');

        }
    }
}

</script>

<body>
<div class="jumbotron-fluid consolefont"  id="landing" style="background-color: whitesmoke;">


        <div id="board" class="container  bords consbar col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="row">
                <div class="col-md-8 whitesmoke col-lg-8 col-sm-8 col-xs-8">
                    <p>http://jamesfacedesigns.cmd.exe</p>
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
        <div class="container  col-md-12 col-sm-12 col-lg-12 col-xs-12" id="skills" >
        <!-- console log style list-->


            <div class="col-sm-12 bords col-xs-12 col-lg-12 col-md-12">

                <p>JamescarrJrDv Portfolio [Version 2.2]</p>
                <p>Copright &lt;c&gt; jamesfacedesigns.com.  All rights reserved.<br>
                    <br>
                    Please select an option: <span id="cursor"></span>

                <ul class="list-unstyled">
                    <li onclick="option(112);" >F1.  Projects</li>
                    <li onclick="option(113);">F2.  Languages</li>
                </ul>

                </p>
                <div class="row hidden" id="projects"> <!-- will use onclick(this)function to add/remove hidden class-->
                    <div class=" col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h3>F1:  Development Projects</h3>
                        <br>
                        <br>
                    </div>


                    <!-- projects row with carousel etc-->


                    <div class="col-md-8 col-sm-8 col-lg-8 hidden-xs">
                        <img src="pics/dietsite.png" class="img-responsive projimg" alt="project cover photo">


                    </div>

                    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li>Project Title: Where can I Get That </li>
                            <li>Project Context: Internet Start-Up <small>(awaiting funding)</small>  </li>
                            <li>Project Skills:
                                <ul class="nested">
                                    <li>Classic simple design</li>
                                    <li>User input and update functionality</li>
                                    <li>Database Design</li>
                                    <li>PHP Log-in system</li>
                                    <li>Site administrator function</li>
                                    <li>Changable content <ul>
                                            <li>e.g random ingredient/news generator</li>
                                        </ul></li>
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
                <div class="row hidden" id="languages">

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
        </div>



    </div>



</div>
<!--this is the bottom of the main jumbotron-->



<script src="js.js"></script>
</body>
</html>

