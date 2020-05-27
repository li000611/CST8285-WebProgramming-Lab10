
<?php   <title>WP Eatery - Home</title>   include'header.php'; include'menuItem.php';
$MIArray = array();
$i = 1;
$star = "*";
while($i<5){
	if($i%2 == 0){
		<img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
	$MIArray[$i] = new menuItem('The WP Burger'.$star.$i','Freshly made all-beef patty served up with homefries','$14');
} else{
	<img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
	$MIArray[$i] = new menuItem('WP Kebab'.$star.$i','Tender cuts of beef and chicken, served with your choice of side', '$17');}
	i++;
	$star .= $star;
}

echo $MIArray =[1]->get_itemName
 ?>


 <div id="content" class="clearfix">
					 <aside>
									 <h2><?php echo date("l"); ?>'s Specials</h2>
									 <hr>
									 <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
									 <h3><?php echo $food1->showItemName();
					 ?></h3>
									 <?php echo'<p>';
						 echo $food1->showDescription()." - ";
					 echo $food1->showPrice();echo'</p>';?>
									 <hr>
									 <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
									 <h3><?php echo $food2->showItemName();?></h3>
									 <p><?php echo $food2->showDescription()." - "; echo $food2->showPrice();?></p>
									 <hr>
					 </aside>
  <div class="main">
     <h1>Welcome</h1>
     <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      <h2>Book your Christmas Party!</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  </div><!-- End Main -->
	  </div><!-- End Content -->
<?php include'footer.php';
?>
