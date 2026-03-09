
<html>

<body>

<p id="demo"> </p>
<p id="demo1"> none</p>
<p id="demo2"> none</p>
<p id="demo3"> none</p>

<script>

//alert("Hello");
console.log("Hello");
const cars = ["Maruti","vsolvo","Futuner"];
document.getElementById("demo").innerHTML = cars ; 

/////Function Array in javascript
let size = cars.Length;

console.log(size);

/////Array search 

//1)  find, indexOf

const numbers = [4,7,15,19,30]

let position = cars.lastIndexOf("Maruti")+1;

document.getElementById("demo1").innerHTML = "Volvo number id " + position

///Array sort 

cars.sort();

document.getElementById("demo2").innerHTML = cars ; 

//Array Iteration Methods

// 1) Array forEach 
// 2) Array map()
// 3) Array filter()

const numbers2 = numbers.map(myFunction);

function myFunction(value,index,array)
{
	return value+5 ; 
}

document.getElementById("demo3").innerHTML = numbers2 ; 


</script>

</body>
</html>




<?php /*
echo '<br>'; echo '<br>';

$variable = 20.35 ; 
$VARIABLE = 20 ; 

mysqli_query($conn,"INSERT INTO `user` (`id`, `username`, `password`, `email`) 
                           VALUES ('6', 'admin1123', 'admin1123', 'admin1@example.com');

            ");

//function add() { 

echo $string = "RAj";  echo '<br>';
print $string ; echo '<br>';
var_dump($string);

//}

$string ; 


echo '<br>';


include("connection.php");

/*
1) Class
2) Objects
3) Encapsulation
4) Inheritance
5) Polymorphism
6) Abstraction
7) Constructor & Destructor
*/
/*

//////// Creating Class 
Class book {
	public  $bookname  ;
	private   $price ; 
	protected $pages ;
	
	var $author ;
	
	private function addbooks($bookname,$price,$pages,$author)
	{
		$this->bookname = $bookname ; 
		$this->price = $price ; 
		$this->pages = $pages ; 
		$this->author = $author ; 
	}
	function printbooks()
	{   
	   echo $this->bookname ;  echo '<br>';
	   echo $this->price ;     echo '<br>'; 
	   echo $this->pages ;     echo '<br>';
	   echo $this->author ;    echo '<br>';
		
	}
	
}


Class hindi extends book
{
	var $fontname ; 
}


/////////Creating Object
$book1 = new book() ; 


echo $book1->bookname = "PHP Fundamentals";  echo '<br>';
//echo $book1->price = 500 ;   echo '<br>';
echo $book1->Pages = 200 ;   echo '<br>';
echo $book1->author = "Denis Ritchi";  echo '<br>';


$hindibook = new hindi(); 

echo $hindibook->bookname = "The Autobiography of Ramdhari_singh Dinkar" ; 
//echo '<br>'; echo $hindibook->price = 500 ;  echo '<br>';
echo '<br>'; echo $hindibook->Pages = 400 ;  echo '<br>';
echo $hindibook->author = "Ramdhari_singh" ; echo '<br>';
echo $hindibook->fontname = "Kruti dev" ;

/*
interface shapes {
	function calculatearea(){
		
	}
}

class circle extends shapes
{
	function calculatearea(){
		
	}
}

class square extends shapes
{
	 function calculatearea(){
	   	
	}
}
*/
//circle1 = new circle();
//square1 = new square1();









////// Creating Inhertance
////// Creating Encapsulation
////// Polymorphism
////// Abstraction
////// Constructor & Destructor


//echo phpversion();
?>



