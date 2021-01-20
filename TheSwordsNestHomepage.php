<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>The Swords Nest Homepage</title>
	
	<style type="text/css">
	
		body {
			background-image: url(./Photos/Backgrounds/BlackWood.jpg);
			background-size:fit;
		}
		
		.carousel img{
			height: 300px;
			object-fit: cover;
		}
		
		.headingGrid{
			margin-top: 25px;
			margin-bottom: 25px; 
			text-align: center;
		}
		
		.gridrow{
			padding-top: 25px;
		}
		
		.book {
			padding-left: 100px;
			padding-right: 10px;
		}
		
		.card-img{
			height: 250px;
			width: 180px;
			object-fit: cover;
		}
		
		.card-img-cart{
			
			height: 120px;
			width: 80px;
		}
		
		#shoppingCartTable > tbody > tr > td {
			 vertical-align: middle;
		}
		
		#shoppingCartTable{
			text-align: center;
		}
		
		#shoppingCartMenuDropdown {
			width: 340px !important;
		}
		
		.padding-0{
			padding-right:0;
			padding-left:0;
		}
		
		.ellipsis{
			white-space: nowrap; 
			text-overflow: ellipsis; 
			overflow: hidden; 
			height: 14px;
		}
		
		.asText {
			background:none;
			border:none;
			margin:0;
			padding:0;
			cursor: pointer;
			color: dodgerblue;
		}
		
		.asText:hover{
			color: steelblue;
		}
		
		.bookCard{
			width: 540px;
			background-color: silver;
		}

	</style>
  </head>
  <body>
	<!-- Log In Modal -->
	<!-- Modal at the beguinning of the body. Otherwise, "focus" error (Modal opens but all page in "shadow" not clickable...)-->
	
	<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="form">
			  <div class="form-group">
				<label for="logInEmail">Email address</label>
				<input type="email" class="form-control" id="logInEmail" aria-describedby="emailHelp" required>
				<small id="emailHelp" class="form-text text-muted">(Michael, just write any valid Email, e.g. a@a.com)</small>
			  </div>
			  <div class="form-group">
				<label for="logInPassword">Password</label>
				<input type="password" class="form-control" id="logInPassword" required>
				<small id="emailHelp" class="form-text text-muted">(and any password)</small>
			  </div>
			  <div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember me</label>
			  </div>
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div align="center">
					<button type="submit" class="btn btn-secondary btn-block" id="logInModalButton">Log In</button>
				</div>
				<div class="row mt-2">
					<div class="col align-self-center padding-0">
					<a href=""><small>Forgot Password?</small></a>
					</div>
					<div class="col float-right padding-0">
					<small>New here?  <a href="">Sign Up!</a></small>
					</div>
				</div>
			</div>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	<!-- Log Out Modal -->
	<div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title col-11 text-center" id="exampleModalLabel2">Log Out</h5>
			<button type="button" class="close align-top" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="my-2 col-12 text-center padding-0" id="logOutText">Are you sure you want to Log out?</div>
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div class="row mt-2" id="closeButtonLogOut">
					<div class="col col-6" id="">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					<div class="col col-6" id="logOutButtonLogOut">
						<form>
						<button type="button" class="btn btn-danger" id="logOutModalButton">Log Out</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Check Out Modal -->
	<div class="modal fade" id="checkOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title col-11 text-center" id="exampleModalLabel2">Summary of your order</h5>
			<button type="button" class="close align-top" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body" id="checkOutBody">			  
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div class="row mt-2" id="checkOutCloseButton">
					<div class="col col-6" id="">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					<div class="col col-6" id="buyButtonLogOut">
						<form>
						<button type="submit" class="btn btn-danger float-right" onclick="bought();" id="buyModalButton">Order</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  
	<!-- NavBar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="navBar">
	  <a class="navbar-brand" href="#" id="logoWeb">The Swords Nest</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active d-none d-lg-block">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item d-none d-lg-block">
			<a class="nav-link" href="#">Bestellers</a>
		  </li>
		  <li class="nav-item dropdown navbar-right d-none d-lg-block">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Best-Selling Authors
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="#">Patrick Rothfuss</a>
			  <a class="dropdown-item" href="#">J.R.R. Tolkien</a>
			  <a class="dropdown-item" href="#">Brandon Sanderson</a>
			</div>
		  </li>
		</ul>
				
		<!-- Search -->
		<div>
			<form class="form-inline">
			  <input class="form-control mr-sm-2" style="width: 150px" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-secondary my-2 my-sm-0 mr-2" type="submit">Search</button>
			</form>
		</div>
		
		<!-- Log-In --> 
		<div id="logedIn"></div>
		
		<!-- Button trigger modal -->
		<div id="LogInButtonWrapper" class="mr-2">
			<button id="logInButton" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#logInModal">
			  Log In
			</button>
		</div>
		
		<!-- ShoppingCart -->
		<div class="dropdown">
			<button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split mt-2 mt-lg-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="./Photos/Icons/ShoppingCart.png" class="shoppingCartIcon mb-1 mr-2" height="20"><span class="badge badge-light" id="shoppingCartBadge">0</span>
				<span class="shoppingCartTotal"></span>
			</button>
			<div class="dropdown-menu dropdown-menu-right pre-scrollable" style="display:none" id="shoppingCartMenuDropdown" aria-labelledby="dropdownMenuButton">
				<div class="table-responsive" id="shoppingCartTableDropDown"></div>
			</div>
		</div>
		
	  </div>
	</nav>

	<!-- Carousel -->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
		  </ol>
		  <div class="carousel-inner" id="carousel-inner">
			<div class="carousel-item">
			  <img src="./Photos/Carousel/Fellowship2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./Photos/Carousel/Dragon2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./Photos/Carousel/Ring2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./Photos/Carousel/Fire2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./Photos/Carousel/Flying2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./Photos/Carousel/Bridge2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
<!-- Title Grid Card Deck -->
	<h2 class="headingGrid" style="color: white">Most Relevant Books</h2>

<!-- Add from XAMPP -->

	<?php
		//Connect to the database
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpassword = "";
		$dbname = "TheSwordsNestDB";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//Test if connection occoured
		if(mysqli_connect_errno()){
			die("DB connection failed: " .
				mysqli_connect_errno().
					" (" . mysqli_connect_errno() . ")"
					);
		}
		
		if(!$connection){
			die('Could not connect: ' . mysqli_error());
		}
		
		//Perform DB Query
		$result = mysqli_query($connection,"SELECT * FROM Items");
		
		//Use data
		
		//Create a class to store Book Objects
		class Book{
				var $Id;
				var $NameOfTheBook;
				var $Author;
				var $BookCover;
				var $Price;
				var $BookDescription;
				
				public function __construct($Id, $NameOfTheBook, $Author, $BookCover, $Price, $BookDescription){
					$this->Id = $Id;
					$this->NameOfTheBook = $NameOfTheBook;
					$this->Author = $Author;
					$this->BookCover = $BookCover;
					$this->Price = $Price;
					$this->BookDescription = $BookDescription;
				}
		}
		
		//Array to store the Book objects
		$books = array();
		
		//Loop over the DB
		while($bookDB = mysqli_fetch_array($result)){
			//Name each BookObject with the ID of the object, and create a new BookObject for each row in the DB
			${"b".$bookDB['Id']} = new Book($bookDB['Id'], $bookDB['NameOfTheBook'], $bookDB['Author'], 
				$bookDB['BookCover'], $bookDB['Price'], $bookDB['BookDescription']);
			//Add the BookObject to the array
			array_push($books, ${"b".$bookDB['Id']});
		}
		
		//Now we have an array "books" populated by all BookObjects of the DB
		//Now create one of those "JSON" things to send it to JS
		$myJSON = json_encode($books);
		
		
		
		//Take the info again
		$result2 = mysqli_query($connection,"SELECT * FROM Items");
		//Start Structure
		echo "<div class=\"container-fluid\">
				<div class=\"row gridrow justify-content-center\">";
		//Loop over all the results and integrate the different values in the middle of HTML text to generate the different cards
		while($card = mysqli_fetch_array($result2)){
			
			echo "<div class=\"card border-light mb-5 ml-4 mr-4 bookCard\" id=\"" . $card['Id'] . "\">";
			  echo "<div class=\"row no-gutters\">";
				echo "<div class=\"col-md-4 d-flex flex-wrap align-items-center\">";
				  echo "<img src=\"" . $card['BookCover'] . "\" class=\"card-img\" alt=\"...\" >";
				echo "</div>";
				echo "<div class=\"col-md-8\">";
				  echo "<div class=\"card-body\">";
					echo "<h5 class=\"card-title text-center\">" . $card['NameOfTheBook'] . "</h5>";
					echo "<p class=\"card-text text-justify\">" . $card['Author'] . "</p>";
					echo "<div id=\"descriptionHere\"></div>";
					//echo "<p class=\"card-text text-justify\">" . $card['BookDescription'] . "</p>";
					echo "<div class=\"row\">";
						echo "<div class=\"col\">";
							echo "<a href=\"#\" class=\"card-link ml-5\">More Info</a>";
						echo "</div>";
						echo "<div class=\"col\">";
							echo "<p class=\"card-text text-center\">" . $card['Price'] . "</a>";
						echo "</div>";
					echo "</div>";
					echo "<div class=\"card-body container\">";
						echo "<div class=\"row justify-content-center\">";
							echo "<button type=\"button\" class=\"btn btn-dark\" id=\"" . $card['Id'] . "\" onclick=\"getItemData(this);\">";
								echo "Add to Cart"; 
							echo "</button>";
						echo "</div>";
					echo "</div>";
				  echo "</div>";
				echo "</div>";
			  echo "</div>";
			echo "</div>";
			
		}
		//Finish Structure
		echo "</div>
			</div>";
	?>
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
  </body>
  <script>
  
//Carousel Random Start
	//CodeSource: sitepoint.com -> Addapted to pure JS (orginal with JQuery)
	
	//get the number of slides
	var numberSlides = document.querySelectorAll('#carousel-inner .carousel-item').length;
	//Select a random slide
	var startSlide = Math.floor((Math.random() * numberSlides));
	//NodeList to store the items in the list of "carousel-indicators"
	var indicators = document.querySelectorAll('.carousel-indicators li')
	//Loop over the NodeList, get the value of the slide, if its the same as selected, add ".active" class to the "indicator" and the "item"
	//If not, remove it
	for(var i = 0; i < indicators.length; i++){
		var slideValue = indicators[i].getAttribute('data-slide-to');
		if(startSlide == slideValue){
			indicators[i].classList.add("active");
			document.querySelectorAll('.carousel-item')[slideValue].classList.add('active');
		}else{
			indicators[i].classList.remove("active");
			document.querySelectorAll('.carousel-item')[slideValue].classList.remove('active');
		}
	}
	
//ShoppingCart
	//Variable to know if the table needs to be created (when adding first element to shopping cart)
	var createShoppingTable = true;
	//Variable to store the ID's of the items in the cart
	var itemsInCart = [];
	
	//Method to get the data of the item added. Triggered from "Add to cart" Button. Para: element to buy 
	function getItemData(item){
		//Get the ID of the item to buy and locate it in the Array of all books (ID -1 = position, as it starts in 0)
		var IdItemToBuy = parseInt(item.getAttribute('id'));
		var itemBook = loadedBooks[IdItemToBuy-1];
		//Loop over the items stored in the array of items in the cart, if the item to add is already there, say it and break
		for(var i = 0; i < itemsInCart.length; i++){
			if(itemsInCart[i] == itemBook.Id){
				alert("Item alredy in the Shopping Cart! Select quantity to buy there :)");
				return;
				}
		}
		//If it's not already in the cart, add its ID to the array of items in cart
		itemsInCart.push(itemBook.Id);
		//Get values of the element to buy from the array of all books
		var itemName = itemBook.NameOfTheBook;
		var itemCover = itemBook.BookCover;
		var itemPrice = itemBook.Price;
		var itemId = itemBook.Id
		//Call UpdateCart with the values
		updateCart(itemCover, itemPrice, itemName, itemId);
	}
	//Method to create shoppingcart table (if doesn't exist) or/and add elements to the table
	function updateCart(itemCover, itemPrice, itemName, itemId){
		//Get where the dropdown menu to show the table is
		var shoppingTable = document.getElementById("shoppingCartTableDropDown");
		//Check if the table needs to be created (true from default, false when adding elements, true when removing all elements)
		if(createShoppingTable == true){
			showShoppingCart();
			//Inser into the container of the table (drop down) the table structure: head, body and foot, with body blank)
			shoppingTable.innerHTML += "<table class=\"table table-sm\" id=\"shoppingCartTable\"><thead><tr><th scope=\"col\">Book</th><th class=\"w-100\" scope=\"col\">Name</th><th scope=\"col\">Quantity</th><th scope=\"col\">Price</th></tr></thead><tbody id=\"shoppingCartTableBody\"></tbody><tfoot id=\"shoppingCartFoot\"><tr><td colspan=\"2\"><h5>Total</h5></td><td colspan=\"2\" id=\"totalPrice\">0</td></tr><tr><td colspan=\"4\"><button type=\"button\" class=\"btn btn-primary\" onclick=\"buy()\">Check Out</button></td></tr></tfoot>";
		}
		//Get the table from id 
		var table = document.getElementById("shoppingCartTable");
		//Create row
		var newJob = document.createElement("tr");
		//Asign the ID of the row as the ID of the element to buy
		newJob.setAttribute("id", ("SCitemId" + itemId));
		//Body of the row, taking elements passed on parameter
		newJob.innerHTML = "<tr><td id=\"tdIDIMG\"><img src=\"" + itemCover + "\" class=\"card-img-cart\"></td><td id=\"tdIDName\" class=\"small\">" + itemName + "</td><td id=\"quantityTD\"><form><input type=\"number\" class=\"form-control numberOfBooks\" id=\"quantityForm\"  value=\"1\" min=\"1\" oninput=\"managePrice()\"></form><button type=\"button\" class=\"btn btn-danger btn-sm mt-2\" onclick=\"removeCartItem(this)\">Remove</button></td><td>" + itemPrice + "</td></tr>";
		//Append the row to the body of the table
		table.tBodies[0].appendChild(newJob);
		//Set create table to false
		createShoppingTable = false;
		
		//Each time a new element added, manage prices
		managePrice();
	}
	//Method to remove an element from the shopping cart table. Triggered from button "Remove" on table. Param: the button element on this row
	function removeCartItem(element){
		//Get the TR element of the row where the button is
		var trToDelete = element.parentElement.parentElement;
		//Get the ID of the TR (same as the ID of the book)
		var idBookToDelete = (trToDelete.id).substring(8);
		//Check if the row is the only rw in the table, to delete the whole table
		var deleteOnlyRow = checkDeleteTable();
		//If it's not the only item, delete only the row
		if(deleteOnlyRow == true){
			//Delete the row
			trToDelete.remove();
			//Loop over the array of Items in the cart to delete the ID of the item, as it's no longer on the cart
			for(var i = 0; i < itemsInCart.length; i++){
				if(itemsInCart[i] === idBookToDelete){
					delete itemsInCart[i];
				}
			}
			quantityMap.delete(idBookToDelete);			
			//After deleting, manage price (not needed if whole table deleted)
			managePrice();
		}
	}
	//Method to delete the whole table instead of the row, if it's the only row in the table
	function checkDeleteTable(){
		//Check the elements in the Array storing the elements in the car (filer: deleting elements leaves empty slots, get rid of them)	
		var itemsInCartFiltered = itemsInCart.filter(function (filt){
			return filt != null;
		});
		//Check if there's only one element in the array/cart
		if(itemsInCartFiltered.length == 1){
			//Remove whole table
			document.getElementById("shoppingCartTable").remove();
			//Set items in the cart to none
			itemsInCart = [];
			//Set to create new table if needed
			createShoppingTable = true;
			//Set the badge of the ShoppingCartButton with the total quantity of elements
			document.getElementById("shoppingCartBadge").innerHTML = 0;
			notShowEmptyShoppingCart();
			quantityMap.clear();
			return false;
		}else{
			//If there are more than one element, return to continue in the other method
			return true;
		}
	}
	
	var quantityMap = new Map();
	
	//Method to manage the price. Triggered by Adding element to the cart, by deleting element from the cart and change on quantity input form
	function managePrice(){
		//Get all elements (rows) sotirng the quantity on the table
		var itemsInCartQuantity = document.getElementsByClassName("numberOfBooks");
		//Variable to store the total price
		var total = 0;
		//Variable to store the total cuantity of books
		var quantityTotal = 0;
		//Loop over the elements of the quantity. For each element...
		for(var i = 0; i < itemsInCartQuantity.length; i++){
			//Get the value of the quantity input
			var quantity = parseInt(itemsInCartQuantity[i].value);
			//Update the total quantity of books
			quantityTotal += quantity;
			//Get the partial ID of the item going back to the TR parent (ID same as book)
			var trOfItem = itemsInCartQuantity[i].parentElement.parentElement.parentElement;
			//Get the ID of the book
			var idBookManagePrice = (trOfItem.id).substring(8);
			//Get the object-Book storing all data from books loaded
			var itemBook = loadedBooks[idBookManagePrice-1];
			//Get the price of one book from the object
			var unitaryPrice = parseFloat(itemBook.Price);
			
			//Calculte total price
			var lotPrice = quantity*unitaryPrice;
			//Separated in two for readibility: go to the TD element storing the quantity, and get to the next TD (Price) and change the innerHTML
			var goToTD = itemsInCartQuantity[i].parentElement.parentElement;
			goToTD.nextSibling.innerHTML = lotPrice.toFixed(2);
			//Add cost of the book(s) to the total
			total += lotPrice;
			//Insert into Map (to save quantity in shopping cart and Check Out Modal)
			quantityMap.set(idBookManagePrice, quantity)
		}
		//After all books in cart done, set the total (2 decimal spaces)
		document.getElementById("totalPrice").innerHTML = total.toFixed(2);
		//Set total back to 0 for next calculus
		total = 0;
		
		//Set the badge of the ShoppingCartButton with the total quantity of elements
		document.getElementById("shoppingCartBadge").innerHTML = quantityTotal
		
		//Save shopping cart in case of refresh	
		saveShoppingCart();
		
	}
	//Method to show what has been bought. Triggered by "Check out" button on Modal (after Buy in Shopping Cart)
	function bought(){
		//Delete the cart table
		var myNode = document.getElementById("shoppingCartTableDropDown");
		myNode.innerHTML = '';
		//Set variables of cart creation and badge to 0
		itemsInCart = [];
		createShoppingTable = true;
		//Set the badge of the ShoppingCartButton with the total quantity of elements
		document.getElementById("shoppingCartBadge").innerHTML = 0
		notShowEmptyShoppingCart();
		quantityMap.clear();
		//Show something
		alert("Your order has been dispached. Thanks!");

	}
	//Method to not let show the empty dropdown menu with no items in cart
	function notShowEmptyShoppingCart(){
		//Remove Info stored in session (if LoginOut or buying, delete Info to not leave it for other users)
		sessionStorage.removeItem("saveShoppingCartSessionVar")
		//Same for badge in shopping cart icon
		sessionStorage.removeItem("saveBadgeSessionVar")
		//Change to "style="display: none"" to not let the dropdown display
		document.getElementById("shoppingCartMenuDropdown").style.display = "none"
	}
	//Method to let show the dropsown menu with items in cart
	function showShoppingCart(){
		//Change "style="display: none"" to let the dropdown display
		document.getElementById("shoppingCartMenuDropdown").style.display = ""
	}
	//Method to save the shopping cart items in case of refresh
	function saveShoppingCart(){
		//Store the data of the shopping cart
		var saveShoppingCart = document.getElementById("shoppingCartTableDropDown").innerHTML
		//Save it in Session Variable
		sessionStorage.setItem("saveShoppingCartSessionVar", saveShoppingCart);
		//Same for the badge of the shopping cart
		var saveBadge = document.getElementById("shoppingCartBadge").innerHTML
		sessionStorage.setItem("saveBadgeSessionVar", saveBadge);
		//And variables to manage the shoppingCart
		
		//Filter the array
		var itemsInCartFiltered = itemsInCart.filter(function (filt){
				return filt != null;
			});
		
		//Strange, when saving in Session it saves as String, but converts into String the colons "," between values too
		//Add a colo "," at the end for the reader on refresh
		itemsInCartFiltered += ",";
		//Save variables
		sessionStorage.setItem("saveItemsInCart", itemsInCartFiltered);
		sessionStorage.setItem("saveCreateTable", createShoppingTable);
		//Save quantityMap
		//Map Keys&Values to arrays (sessionStorage converts to string or object name(?))
		var quantityMapKeys = Array.from( quantityMap.keys());
		var quantityMapValues = Array.from( quantityMap.values());
		//Save keys&values as arrays (will be a string)
		sessionStorage.setItem("saveQuantityMapKeys", quantityMapKeys);
		sessionStorage.setItem("saveQuantityMapValues", quantityMapValues);
	}
	//Method to check if there are elements in shopping cart on refresh
		//Called by general listener
	function checkSavedShoppingCart(){
		//Variable to store the saved shopping cart (if somethig has been added to the cart not loged In, saved it for the user)
		var checkShoppingCart = sessionStorage.getItem("saveShoppingCartSessionVar")
		//Check if there was something in the shopping cart before loggin in
		if(checkShoppingCart !== null){
			//Insert the saved data in the Shopping cart and the badge
			document.getElementById("shoppingCartTableDropDown").innerHTML = sessionStorage.getItem("saveShoppingCartSessionVar");
			document.getElementById("shoppingCartBadge").innerHTML = sessionStorage.getItem("saveBadgeSessionVar");
			//Show the sopping cart as now there is somethig there
			showShoppingCart();
			//Split the array from session storage into different values and push them into the itemsInCart array
			var tempItemsInCart = sessionStorage.getItem("saveItemsInCart");
			var last = 0;
			for(var i = 0; i < tempItemsInCart.length; i++){
				if(tempItemsInCart.charAt(i) === ","){
					var itemId = tempItemsInCart.substring(last, i);
					last = i + 1;
					itemsInCart.push(itemId);
				}
			}
			//Same for create shooping cart table
			createShoppingTable = sessionStorage.getItem("saveCreateTable");
			//Get keys&values strings
			quantityMapKeys = sessionStorage.getItem("saveQuantityMapKeys");
			quantityMapValues = sessionStorage.getItem("saveQuantityMapValues");
			//Loop over the array and do...
			for(var i =0; i<quantityMapKeys.length; i++){
				//Convert to string saves the colons........ so ignore it if it's one
				if(quantityMapKeys[i] === ","){continue;}
				//Assign the map as it was
				quantityMap.set(quantityMapKeys[i], quantityMapValues[i]);
				//Get the TR of the item (TRId same as book Id plus constant modification)
				var tableTRId = "SCitemId" + quantityMapKeys[i];
				//Get the table element
				var tableTR = document.getElementById(tableTRId)
				//Go to the TD of the Quantity (input form in Shopping cart)
				var quantityTD = tableTR.firstElementChild.nextSibling.nextSibling;
				//Get to the Input (Inside of the form)
				var valueInput = quantityTD.firstElementChild.firstElementChild
				//Assign the value f the map (key used to know which row) to the value of the input
				valueInput.value = quantityMapValues[i];
			}			
		}
	}
	//Method to Manage the data inside CheckOutModal from the ShoppingCart Table
	//Fired by "buy" in Shopping Cart
	function buy(){
		//Check if there's an user loged in
		var checkLogIn = document.getElementById("logedIn").hasChildNodes();
		//Don't let go to CheckOutModal without user loged in
		if(!checkLogIn){
			alert("Please, Log In or Sign Up to buy!")
			return
		}else{
			//get the table from the shopping cart
			var getTable = document.getElementById("shoppingCartTableDropDown").innerHTML;
			//Put it in the modal body
			document.getElementById("checkOutBody").innerHTML = getTable
			//Modify the table of the modal
			//Go to the table (from modal body)
			var shoppingTable = document.getElementById("checkOutBody").firstElementChild;
			//go to the Head (from table)
			var shoppingTableHead = shoppingTable.firstElementChild;
			//Go to the IMG TH-TD
			var shoppingTableIMGHeading = shoppingTableHead.firstElementChild.firstElementChild;
			//Delete it
			shoppingTableIMGHeading.remove();
			//Go to the Foot of the table (from table)
			var shoppingTableFoot = shoppingTableHead.nextSibling.nextSibling;
			//Go to the button of the table foot
			var shoppingTableCheckOutButton = shoppingTableFoot.firstElementChild.nextSibling;
			//Delete it
			shoppingTableCheckOutButton.remove();
			//Go to the body
			var shoppingTableBody = shoppingTableHead.nextSibling;
			//Get all rows of the Body
			var shoppingTableTRs = shoppingTableBody.children;
			//Loop through the rows and do...
			for (var i = 0; i < shoppingTableTRs.length; i++) {
				//Get the row
			  var tableChild = shoppingTableTRs[i];
			  //Get ID of the item (same as TR ID)
			  var idOfItem = (tableChild.id).substring(8);
			  //Get its quantity from QuantityMap
			  var getMapQuantity = quantityMap.get(idOfItem);
			  //Go to the TD of the Quantity (input form in Shopping cart)
			  var quantityTD = tableChild.firstElementChild.nextSibling.nextSibling;
			  //Exchange the From Element for the quantity
			  quantityTD.innerHTML = getMapQuantity;
			  //Go to the IMG TD
			  var imgTD = tableChild.firstElementChild;
			  //Delete it
			  imgTD.remove();
			  
			}
			//After all changes, fire Modal
			$('#checkOutModal').modal('show');
		}
	}
	
//LogIn
	//Variable to store the form element of the modal
	var form = document.getElementById("form")
	//Variable to store the email introduced
	var email = document.getElementById("logInEmail")
	//Variable to store the button to Log In of the modal
	var submit = document.getElementById("logInModalButton")
		
	//Listener to do something when clicking in the modal button
	submit.addEventListener("click", function(){
		//If the form is valid (otherwise would do it even with invalid, but not closing because of above)
		if (form.checkValidity()) {
			//Store the value of the email input
			var email = document.getElementById("logInEmail").value
			//Delete from @ and store the rest as "name"
			var name = email.substring(0, email.indexOf('@'));
			//If name is too long, shorten it
			if(name.length > 10){
				var name = name.substring(0, 10);
			}
			//Say Hello
			alert("Welcome " + name + "!")
			//Store the "name" in session variable (Closing the Modal refresh the page and deletes all JS changes/vars)
			//Session variable dissapears when closin the Window. Local varible (not used) dissapears closing the browser
			sessionStorage.setItem("userName", name);
		}
	}) //End of the function, will close the Modal

	//General Listener in Load to know if there's an user saved & to check if there are items in shopping cart (loged or not)
	document.addEventListener('DOMContentLoaded', function(){
			logedIn();			
			checkSavedShoppingCart();
		});

	//Method to change the page for an user loged in (closin modal refresh page Idk why tbh)
	function logedIn(){
		//Store the data of the session variable
		var userName = sessionStorage.getItem("userName")
		//Check if there's data there (Listener listens always, even at the beguinning (first load of page). If no user, stops here)
		if(userName !== null){
			//Fill the empty Div to show the user name in navBar (structure)
			document.getElementById("logedIn").innerHTML = "<div id=\"userDiv\" class=\"mr-2 row\"><svg style=\"color: white\" class=\"bi bi-people-circle ml-3 mr-2 align-self-center\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/><path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/><path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/></svg><div style=\"color: white\" id=\"logedInName\" class=\"align-self-center\"></div></div>";
			//Fill the empty Div to show the user name in navBar (Actual data name)
			document.getElementById("logedInName").innerHTML = userName
			//Change the Log In button for the Log Out button
			document.getElementById("logInButton").innerHTML = "Log Out"
			//Change the ID of the button
			document.getElementById("logInButton").setAttribute("id", "logOutButton")
			//Change the button to trigger the Log Out Modal
			document.getElementById("logOutButton").dataset.target = "#logOutModal";
			//Change style of NavBar with user In
			document.getElementById("navBar").setAttribute("class", "navbar sticky-top navbar-expand-lg navbar-dark bg-dark")
			document.getElementById("logoWeb").style.color = 'red'
		}
	}

//Log Out
/* This Modal does not refresh the page when closing. I don't know why the Log In does and this one no. 
	//General Listener to check if there has been a LogOut (Log Out Modal refreshes the page)
	document.addEventListener('DOMContentLoaded', function(){
			logedOut();
		});
*/
	//Store the element of the log out button (set after login in)
	var submitOut = document.getElementById("logOutModalButton");
	//Listen the Log Out button for click
	submitOut.addEventListener('click', function(){
		//Reove the stored data about the user (or stored data on Log In modal would be still there and trigger the listener "after refresh Log In Modal")
		sessionStorage.removeItem("userName")
		//Go to
		logedOut();
	});
	
	//Method to log out 
	//Called by the Log Out Modal Button and the general listener 
	function logedOut(){
		//Store session data about the user
		var userName = sessionStorage.getItem("userName");
		//Store if the User div Loged In exists (user name shown in page)
		var checkForUser = document.getElementById("logedIn").hasChildNodes();
		//Check if there is data in the session saved user and if the User div shown has childs (if there is a name there)
		//Check both because:
			//Only session data: On refresh with no user session data would do all this even in first load (no session user data and no user div created)
			//Only user div: On refresh with user div, would do it refreshing not loging out (the log out is set deleting the session data in button listener)
		if(userName === null && checkForUser){
			//Take advantage of the Modal (modal Log Out button not dismissin the Modal, only the close one. And close with no Log Out does not Log out, just closes the modal)
				//and just remove the button of Log Out, changuing the HTML inside the modal to show the Logged Out
			document.getElementById("logOutButtonLogOut").remove();
			document.getElementById("logOutText").innerHTML = "Succesfully Loged Out!"
			document.getElementById("exampleModalLabel2").innerHTML = "See you soon!"
			//Change Tag to put the Close button in the middle
			document.getElementById("closeButtonLogOut").setAttribute ("class", "row mt-2 justify-content-center")
			document.getElementById("closeButtonLogOut").innerHTML = "<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>"
			
			//Remove the Div with the user info and reset the Lg In Button/Modal
			document.getElementById("userDiv").remove();
			document.getElementById("logOutButton").innerHTML = "Log In"
			document.getElementById("logOutButton").setAttribute("id", "logInButton")
			document.getElementById("logInButton").dataset.target = "#logInModal";
			//Reset change of style in the NavBar for Users
			document.getElementById("navBar").setAttribute("class", "navbar sticky-top navbar-expand-lg navbar-light bg-light")
			document.getElementById("logoWeb").style.color = 'black'
			//Variables to store the session data of the shopping cart (if something added to the cart before loggin in)
			var checkSavedShoppingCart = sessionStorage.getItem("saveShoppingCartSessionVar")
			//Variable to get the shopping cart table
			var checkShoppingCart = document.getElementById("shoppingCartTable")
			//Check if there is something in the session data of the shopping cart or the shopping cart dropdown
			//Check both because:
				//If something in the cart before log In, would be stored and shown in other log ins (even different users, as the JS would think is from just before login in)
				//If bought logged in wouldn't be in session data and still want to delete it
			if(checkSavedShoppingCart !== null || checkShoppingCart !== null){
				//remove table and set badge
				document.getElementById("shoppingCartTable").remove();
				document.getElementById("shoppingCartBadge").innerHTML = 0;
				//Reset the shopping cart variables
				itemsInCart = []
				createShoppingTable = true
				//Not show shopping cart as it is empty
				notShowEmptyShoppingCart();
			}
		}else{
			return
		}
	}
	
//Load Book Objects
	if(document.readyState == 'loading'){
		document.addEventListener('DOMContentLoaded', function(){
			getObjects();
		});
	}else{
		getObjects();
	}
		
	var loadedBooks;
	
	function getObjects(){
		loadedBooks = <?php echo $myJSON ?>;
		manageDescription();
	}

//Manage Books's Description
	//Manage the description on load
	//Called after loading
	function manageDescription(){
		//Get all books loaded
		var displayedBooks = document.getElementsByClassName("bookCard");
		//For each books
		for(var i = 0; i < displayedBooks.length; i++){
			//Get the Id of the book from the Card
			var bookId = parseInt(displayedBooks[i].getAttribute("id"));
			//Get the Object Book
			var specificBook = loadedBooks[bookId-1];
			//Get the description of the book
			var fullBookDescription = specificBook.BookDescription;
			//Variable for the loop: number of words
			var numberOfWords = 0;
			//Variable to store the index of the last character after counting words
			var limitIdex;
			//Loop over the chars of the description string
			for (var j = 0; j < fullBookDescription.length; j++) {
				//Find the spaces to cunt words
			  if(fullBookDescription.charAt(j) === " "){
				  //Add +1 word to the count
				  numberOfWords += 1;
			  }
			  //If the number of words reachs the limit of words to display, store the index of the last char analyzed
			  if(numberOfWords == 27){
				  limitIdex = j;
			  }
			}
			//Get the sub string of the Ellipsed Description from the begguinning until the word of the limit counted above
			var ellipsedBookDescription = fullBookDescription.substring(0, limitIdex+1);
			//Add the tags to show (Create button-text to calling the Show More too)
			var ellipsedBookDescriptionWithTags = "<p>" + ellipsedBookDescription + " (...) <br><button class=\"asText\" onclick=\"showMore(this);\"> Read More</a></button>"
			//Go from Card Div to the Div of the description			
			var goChild = displayedBooks[i].firstChild;
			var goBodyContainer = goChild.lastChild;
			var goCardBody = goBodyContainer.firstChild;
			var goTitle = goCardBody.firstChild;
			var goSibling = goTitle.nextSibling;
			var getToDescription = goSibling.nextSibling;
			//Insert the Ellipsed Description with tags
			getToDescription.innerHTML = ellipsedBookDescriptionWithTags
		}
	}
	//Method to show more description in the card books displayed
	//Caled from button-text on the description (set in ManageDescription)
	function showMore(element){
		//Get the element of the card (from button up to the first element of the Card element)
		var bookCardElement = element.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
		//Get its Id as it is the ID of the book where the user wants to read more
		var bookCardId = bookCardElement.getAttribute("id");
		//Get the Object book correspondent
		var specificBook = loadedBooks[bookCardId-1];
		//Get the description
		var fullBookDescription = specificBook.BookDescription;
		//Add the tags and the button to Show Less
		var fullBookDescriptionWithTags = "<p>" + fullBookDescription + "<br><button class=\"asText\" onclick=\"showLess(this);\"> Read Less</a></button>"
		//Got to parent of the button-text "Show More" clicked
		var getToDescription = element.parentElement;
		//Change inner text for the full description and the button showless
		getToDescription.innerHTML = fullBookDescriptionWithTags;
	}
	//Method to show less description in Description fully displayed
	//Called from button-text on full description displayed (after clicking on Show More in normal display)
	function showLess(element){
		//Get the Card element (from the button-text Show less clicked)
		var bookCardElement = element.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
		//Get the ID of the Book displayed (id of the card)
		var bookCardId = bookCardElement.getAttribute("id");
		//Get the object book with this id
		var specificBook = loadedBooks[bookCardId-1];
		//Get full description
		var fullBookDescription = specificBook.BookDescription;
		//Count words (same in ManageDescription() from here. Check above)
		var numberOfWords = 0;
			var limitIdex;
			for (var j = 0; j < fullBookDescription.length; j++) {
			  if(fullBookDescription.charAt(j) === " "){
				  numberOfWords += 1;
			  }
			  if(numberOfWords == 27){
				  limitIdex = j;
			  }
			}
		
		var ellipsedBookDescription = fullBookDescription.substring(0, limitIdex+1);
			
		var ellipsedBookDescriptionWithTags = "<p>" + ellipsedBookDescription + " (...) <br><button class=\"asText\" onclick=\"showMore(this);\"> Read More</a></button>"
		
		var getToDescription = element.parentElement;
		
		getToDescription.innerHTML = ellipsedBookDescriptionWithTags;
	}
  </script>
</html>