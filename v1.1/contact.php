<?php

$success = "";
include "scripts/contactscript.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get In Touch</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/card.css" rel="stylesheet">
</head>
<body style="overflow-x: hidden;">


<div class="container-fluid">
    <div class="container hidden-xs hidden-sm" role="navigation" id="nav">
        <ul class="col-md-offset-1 col-xs-12  nav nav-tabs" style="text-transform: uppercase;">
            <li role="presentation" ><a href="index.html">home</a></li>
            <li role="presentation"><a href="projects.html">projects</a></li>
            <li role="presentation" class="active"><a href="contact.php">contact</a></li>




        </ul>


    </div>
    <!-- mobile menu-->
    <div class="container visible-xs visible-sm" role="navigation" id="nav" style="padding-left: 10px; margin-left: 10px">
        <ul class="col-xs-12 nav nav-pills nav-stacked pull-left" style="text-transform: uppercase;">
            <h1> <li role="presentation"><a href="index.html">home</a></li></h1>
            <h1><li role="presentation"><a href="projects.html">projects</a></li></h1>
            <h1><li role="presentation" class="active"><a href="contact.php">contact</a></li></h1>
        </ul>
    </div>
<div class="container-fluid">
    <div class="container">
        <h2 style="color: black;" ><?echo$success?></h2>
    </div>

</div>
    <div class="container">
        <div class="container col-xs-12 col-sm-offset-2 col-lg-offset-2 col-lg-8 col-sm-8 col-md-8" id="card">

                        <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12" id="head">
                            <h2>James Carr</h2>
                        </div>

                    <div class="container col-xs-10 col-md-10 col-sm-10 col-lg-10">

                        <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 60px;">
                            <div class="container col-xs-12 col-md-3 col-sm-6 col-lg-3 text-left" >
                            <a href="tel:07718251593">07718251593</a>
                            </div>
                            <div class="container col-xs-12 col-md-3 col-sm-6 col-lg-3">
                            <a href="mailto:jamescarr28@hotmail.co.uk">james@jamesmcarr.co.uk</a>

                            </div>
                            <div class="container col-xs-12 col-md-offset-1 col-md-3 col-sm-12 col-lg-offset-1 col-lg-3" id="modclik">
                             <a data-toggle="modal" href="#modalContact" type="button"> Enquiry Form</a>

                        </div>
                        </div>

                                <div class="container hidden-xs col-md-12 col-lg-12 col-sm-12 pull-left" style="margin-top: 100px; padding-left: 0px;">

                                    <h4>
                                    <ul>
                                        <li>Front End Development</li>
                                        <li>Twitter Bootstrap</li>
                                        <li>PHP</li>
                                        <li>MySql</li>
                                        <li>Javascript & jquery</li>




                                    </ul>

                                    </h4>



                                </div>
                        <div class="container visible-xs col-xs-12 pull-left" style="padding-left: 0px;">

                            <h4>
                                <ul>
                                    <li>Front End Development</li>
                                    <li>Twitter Bootstrap</li>
                                    <li>PHP</li>
                                    <li>MySql</li>
                                    <li>Javascript & jquery</li>




                                </ul>

                            </h4>



                        </div>


                    </div>




                 <div class="container hidden-xs col-md-2 col-sm-2 col-lg-2" id="links">
                        <div class="container coll-xs-4 col-md-12 col-sm-12 col-lg-12" style="margin-top: 60px;">

                            <a href="https://twitter.com/PappaandLizzy"><img src="pics/twitter.png" class="img-responsive"/></a>
                        </div>

                        <div class="container col-md-12 col-xs-4 col-sm-12 col-lg-12">

                          <a href="https://uk.linkedin.com/in/jamescarr29">  <img src="pics/linkedin.png" class="img-responsive"/></a>
                        </div>

                        <div class="container col-xs-4 col-md-12 col-sm-12 col-lg-12" >

                            <a href="http://pappaandlizzy.weebly.com/"><img src="pics/weebly.png" class="img-responsive"/></a>
                        </div>



            </div>
                <div class="container visible-xs col-xs-12" style="margin-top: 20px; margin-bottom: 40px;">
                    <div class="col-xs-4">

                        <a href="https://twitter.com/PappaandLizzy"><img src="pics/twitter.png" class="img-responsive"/></a>
                    </div>

                    <div class="col-xs-4 ">

                        <a href="https://uk.linkedin.com/in/jamescarr29">  <img src="pics/linkedin.png" class="img-responsive"/></a>
                    </div>

                    <div class=" col-xs-4">

                        <a href="http://pappaandlizzy.weebly.com/"><img src="pics/weebly.png" class="img-responsive"/></a>
                    </div>

                </div>

        </div>


    </div>


</div>


<!-- modal dialog box-->

<div class="modal fade" id="modalContact" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content" id="form">

        <div class="modal-header">
            <h4 style="color: black;">Not sure what you need?</h4><p>Fill in form below as you can and we will get in touch with some suggestions.  Please ensure you fill in every field, if you're not sure, say you're not sure!</p>

        </div>

        <div class="modal-body">

            <form action="contact.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-md-3 col-xs-12 col-lg-3 col-sm-3">Name: </label>
                    <div class="col-md-9 col-xs-12 col-lg-9 col-sm-9">
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Please give us your full name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 col-xs-12 col-lg-3 col-sm-3">Email: </label>
                    <div class="col-md-9 col-xs-12 col-lg-9 col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Example@youremail.com">
                    </div>
                </div>

                <div class="form-group">
                    <label for="url" class="col-md-3 col-xs-12 col-lg-3 col-sm-3">Website:    <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="If you already have a website please enter it here. Alternatively you may want to enter a link to a site that you like or feel would help us better understand your aims, this could be for content, styles or interactive sections.  Please let us know any specifics in the 'extra' section below"></span> </label>
                    <div class="col-md-9 col-xs-12 col-lg-9 col-sm-9">
                        <input type="text" class="form-control" id="url" name="url" placeholder="www.yourexample.com">
                    </div>

                </div>

                <div class="form-group">
                    <label for="background" class="col-md-3 col-xs-12 col-lg-3 col-sm-3">What: <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="Let us know what you want from your website.  Is it a business, a blog, for fun? try and keep the description short using keywords"></span></label>
                    <div class="col-md-9 col-xs-12 col-lg-9 col-sm-9">
                        <textarea class="form-control" name="bkgrd" placeholder="Tell us about what you want to achieve" rows="3" id="background"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="content" class="col-md-3 col-xs-12 col-lg-3 col-sm-3">Content: <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="What tools do you need your website to have? "></span></label>
                    <div class="col-md-9 col-xs-12 col-lg-9 col-sm-9">
                        <label class="checkbox ">
                            <input type="checkbox" name="content[]" id="contact" value="contact form">Contact form
                        </label>
                        <label class="checkbox ">
                            <input type="checkbox" name="content[]" id="booking" value="booking system">Booking system/interactive calender
                        </label>
                        <label class="checkbox ">
                            <input type="checkbox" name="content[]" id="commerce" value="ecommerce"> E-commerce/secure check out
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="content[]" id="cms" value="cms"> Content management system <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="Having a content management system means users (or you) can update the website via a log on function, similar to a blog.  Without this you may need someone to update your website manually"></span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="content[]" id="users" value="profiles"> Secure log in/user profiles
                        </label>
                        <label class="checkbox ">
                            <input type="checkbox" name="content[]" id="social" value="social"> Embedded social media
                        </label>
                        <label class="checkbox ">
                            <input type="checkbox" name="content[]" id="none" value="none" checked> None
                        </label>
                        <textarea class="form-control" rows="2" placeholder="Let us know any specific ideas you may have in mind or have discovered on other sites while browsing"></textarea>

                    </div>
                </div>

                <div class="form-group">
                    <label for="other" class="col-md-3 col-xs-12 col-lg-3 col-sm-3">Anything else? </label>
                    <div class="col-md-9 col-xs-12 col-lg-9 col-sm-9">
                        <textarea id="other" name="other" class="form-control" rows="2" placeholder="Anything else you feel might be useful" ></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-default" name="submit" value="submit">Submit</button>
            </form>

        </div>


    </div>
    </div>

</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>