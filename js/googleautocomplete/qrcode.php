<!DOCTYPE HTML>  
<html xmlns="http://www.w3.org/1999/xhtml">  
  
<head>  
    <title>JQuery QRCode Example</title>  
    <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
    <meta name="viewport" content="width=device-width, initial-scale=2,user-scalable=no" />-->  
    <style>  
        #divqrcode {  
            width: 102px;  
            height: 102px;  
            margin-top: 14px;  
        }  
    </style>  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.qrcode.min.js"></script>
</head>  
  
<body>  
    <h1 style="margin-top:147px;">JQuery QRCode Demo</h1> Please enter your input:  
    <input id="texInput" type="text" value="SantoshA" /><br />  
   <div id="qrcodeholder"> </div>
  
   <script type="text/javascript">
//Wrap it within $(document).ready() to invoke the function after DOM loads.

$(document).ready(function(){

$('#qrcodeholder').qrcode({
        text    : "http://www.moreonfew.com/generate-qr-code-using-jquery",
        render  : "canvas",  // 'canvas' or 'table'. Default value is 'canvas'
        background : "#ffffff",
        foreground : "#000000",
        width : 150,
        height: 150
    });


});
</script>

</body>  