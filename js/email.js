$(document).ready(function(){
 
$('#submit').click(function(){
 
$.post("email.php", $("#contactForm").serialize(),  function(data) {   });
 
$('#success').html('Message sent!');
$('#success').hide(2000);
 
});
 
});
