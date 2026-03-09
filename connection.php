<?php 


 $conn = mysqli_connect("127.0.0.1","root","","e_commerce");
 
 
if(mysqli_connect_error())
{
	echo "Unable to Connect" ; 
}
else	
{
	echo "Database connected" ; 
}
echo '<BR>';








?>


<script>
function myfunction()
{
	document.getElementById("furniture").style.css.display="block";
	document.getElementById("office").style.css.display="none";
	document.getElementById("Kitchen").style.css.display="none";
}

function myfunction1()
{
	document.getElementById("furniture").style.css.display="none";
	document.getElementById("office").style.css.display="none";
	document.getElementById("Kitchen").style.css.display="block";
}

function myfunction2()
{
	document.getElementById("furniture").style.css.display="none";
	document.getElementById("office").style.css.display="block";
	document.getElementById("Kitchen").style.css.display="n";
}
</script>


<a href="#" onclick="myfunction()">Furniture </a>
<a href="#" onclick="myfunction1()">Kitchen </a>
<a href="#" onclick="myfunction3()">Office</a>