$(document).ready(function(){
$('#UserPassword').keyup(function(){
var len	=	$('#UserPassword').val().length;

if(len<1)
{
$('.first').text('');
$('.first').removeClass('red');
$('.first').removeClass('orange');
$('.first').removeClass('green');
}

else if(len<=5)
{
$('.first').text('weak');
$('.first').addClass('red');
$('.first').removeClass('orange');
$('.first').removeClass('green');
}

else if(len<=9)
{
$('.first').text('Good');
$('.first').addClass('orange');
$('.first').removeClass('red');
$('.first').removeClass('green');
}

else
{
$('.first').text('Strong');
$('.first').addClass('green');
$('.first').removeClass('red');
$('.first').removeClass('orange');
}

});
});