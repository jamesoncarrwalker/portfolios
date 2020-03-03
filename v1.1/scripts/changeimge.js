/**
 * Created by James on 24/08/2015.
 */

var image_tracker = "desk";
var image_tracker2 = "desk";
var image_tracker3 = "desk";

function changeImage (){

    var image = document.getElementById('change');

    if (image_tracker =="desk"){
        image.src = "pics/nagstab.png";
        image_tracker = "mob";
    }else{
        image.src = "pics/nagsteamdt.png";
        image_tracker = "desk";
    }


}

function changeImage2 (){

    var image = document.getElementById('change2');

    if (image_tracker2=="desk"){
        image.src = "pics/allotmob.png";
        image_tracker2 = "mob";
    }else{
        image.src = "pics/allotment.jpg";
        image_tracker2 = "desk";
    }


}

function changeImage3 (){

    var image = document.getElementById('change3');

    if (image_tracker3=="desk"){
        image.src = "pics/wintmob.png";
        image_tracker3 = "mob";
    }else{
        image.src = "pics/winternet.jpg";
        image_tracker3 = "desk";
    }


}