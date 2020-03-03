<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 09/02/2016
 * Time: 07:06
 */





/*if(isset($_POST['submit'])){//try by capturing ID, if doesnt wrk will need to add name to each input
    $emailTo = "jamescarr28@hotmail.co.uk";
    $subject = "Webiste enquiry from jamesmcarr.co.uk";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $bkgrd = $_POST['background'];
    //$content = $_POST['content'];//write array for checkboxes
    $other = $_POST['other'];


    $emailMessage = "You have received an enquiry from jamesmcarr.co.uk"."\n";

    function clean_string($string){

        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $emailMessage .="Name: ".clean_string($name)."\n";
    $emailMessage .="Email: ".clean_string($email)."\n";
    $emailMessage .="URL: ".clean_string($url)."\n";
    $emailMessage .="What: ".clean_string($bkgrd)."\n";
    //$emailMessage .= "Content: ".implode(" ", $_POST['content'])."\n";
    $emailMessage .="Other: ".clean_string($other)."\n";

    $headers = 'From: '.$email."\r\n".
        'Reply-tp: '.$email."\r\n". 'X-mailer: PHP/'. phpversion();


    mail($emailTo, $subject, $emailMessage, $headers);


    header("location: http://www.jamesmcarr.co.uk/contact.php");
}else{

    header("location: error buddy.com");
}*/
error_reporting(E_ALL); ini_set('display_errors', 'On');




if(isset($_POST['submit'])) {

    if (!$_POST['name'] || !$_POST['email'] || !$_POST['url'] || !$_POST['bkgrd'] || !$_POST['content'] || !$_POST['other']) {
        header("location: http://www.jamesmcarr.co.uk/error.php ");

    } else {

            $success = "Thank you for submitting an enquiry form, someone will be in touch soon";

        /*if(isset($_POST['submit'])) {
            $to = "noreply@jamesmcarr.co.uk";
            $subject = "Website Enquiry";
            $name = $_POST['name'];
            $email = $_POST['email'];
            $url = $_POST['url'];
            $bkgrd = $_POST['bkgrd'];

            $other = $_POST['other'];


            $sub2 = "Thank you for your enquiry";
            $msg = "Thank you for your enquiry.  We have received your contact form and will be in touch soon to discuss this further\n


        Thanks\n

        www.jamesmcarr.co.uk";


            $message = "From:  $name\n Email: $email\n URL: $url\n Overview: $bkgrd\n Content:  \n Other: $other   ";

            mail($email, $sub2, $msg);
            mail($to, $subject, $message);

            if(!$message){
                $test="fail";

            }else{
                $test = "winner";
            }
        }*/

    $to = "noreply@jamesmcarr.co.uk";
    $subject = "Website Enquiry";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $bkgrd = $_POST['bkgrd'];
    $content = implode(": ", $_POST['content']);
    $other = $_POST['other'];




        $sub2 = "Thank you for your enquiry";
        $msg = "Hi $name, thank you for your enquiry.  We have received your contact form and will be in touch soon to discuss this further\n


Thanks\n

www.jamesmcarr.co.uk";


        $message = "From:  $name\n Email: $email\n URL: $url\n Overview: $bkgrd\n Content: $content \n Other: $other   ";


        mail($email, $sub2, $msg);
        mail($to, $subject, $message);


    }
}