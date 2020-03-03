/**
 * Created by James on 17/08/2015.
 */


//create variables for message

var greeting = 'Howdy ';
var name = 'Daddy face';
var message = ' , your so blooming fabulous';

//concatenate

var welcome = greeting + name + message;

//sign variable

var sign = 'knaphill place';
var tiles = sign.length;
var subTotal = tiles * 5;
var shipping = 7;
var grandTotal = subTotal + shipping;

//get element with ID greeting

var el = document.getElementById('greeting');
//replace with message
el.textContent = welcome;

//id element

var elSign = document.getElementById('userSign');
elSign.textContent = sign;

var elTiles = document.getElementById('tiles');
elTiles.textContent = tiles;

var elSubTotal = document.getElementById('subTotal');
elSubTotal.textContent = '$' + subTotal;

var elShipping = document.getElementById('shipping');
elShipping.textContent = '$' + shipping;

var elGrandTotal = document.getElementById('grandTotal');
elGrandTotal.textContent = '$' + grandTotal;





