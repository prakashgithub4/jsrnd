
<html>
<head>
<style>
#container {
	position: relative;
	top: 30px;
	outline:2px solid #000;
	font-size: 0;
	margin:auto;
	height:960px;
	width:960px;
	padding: 0;
	border: none;
}

.grid {
	margin:0;
	padding:0;
	border:none;
	outline:1px solid #000;
	display:inline-block;
}
</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body>
<!-- <h4><a href="http://www.theodinproject.com/home">The Odin Project</a> >> <a href="http://www.theodinproject.com/web-development-101">Web Development 101</a> >> <a href="http://www.theodinproject.com/web-development-101#section-the-front-end">The Front End</a> >> <a href="http://www.theodinproject.com/web-development-101/javascript-and-jquery">Project: Javascript and jQuery</a> >> Nick Kessler entry February 6, 2015</h4> -->

<center><button class="newGrid" id ="button" onclick="creategrid(2)">Create Grid</button></center>

<div id="container"></div>
<div class="result" data-test="234">

</div>
<button class="clickable">Click to get id</button>
<br><br>

</body>
<script>
var count =  2;
var read = 0;
const imageobj = [{
src:"https://demo-res.cloudinary.com/image/upload/sample.jpg"
},
{
src:"https://file-examples-com.github.io/uploads/2017/10/file_example_JPG_1MB.jpg"
},
{
src:"https://hunyadi.info.hu/projects/boxplusx/images/image1.jpg"
},
{
src:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6McydDK52mjKD4cqVVgmiyavkNnprK4QCvQ&usqp=CAU"
},{
src:"https://sample-videos.com/img/Sample-jpg-image-2mb.jpg"
},
{
src:"https://upload.wikimedia.org/wikipedia/commons/1/16/HDRI_Sample_Scene_Balls_%28JPEG-HDR%29.jpg"
},
{
src:"https://www.learningcontainer.com/wp-content/uploads/2020/07/Sample-JPEG-Image-File-Download-scaled.jpg"
},
{
src:"https://lh3.googleusercontent.com/proxy/yhLxjKC9Qu70PruPaVFmp0lCcHc7yzX4hpw-QLKXjBH5rPC0o7bI_3etApAIJ-Jpyg"
},
{
src:"https://www.roadrunnerrecords.com/sites/g/files/g2000005056/f/sample-4.jpg"
}];
function creategrid(x){
  if(count == 2){
 for(let rows = 0; rows<x;rows++){
   
   for(let col = 0; col<x;col++){
     
      $("#container").append("<div class ='grid'><img src ="+imageobj[read].src+" class='grid'></div>");
     
    
     read++;
   }
 
 }
 $(".grid").width(960/x);
 $(".grid").height(960/x);

  }else{
    refreshimage();
  }

  count++;
  alert(read);
}
function refreshimage(){
  $("#button").text("Refresh")
}
$(".clickable").click(function(){
	//first way of accessing id 
	alert($(".result").data('test'))
	//second way of getting id 
	alert($(".result").attr('data-test'))
	
})
</script>
</html>