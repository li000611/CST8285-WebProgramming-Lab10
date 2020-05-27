<?php $title= 'WP Eatery - Home'; include'header.php'; ?>

<div id="content" class="clearfix">
<?php include'menuItem.php'; ?>
<?php
$MIArray = array();
$i = 0;
$star = "*";
while($i<4){
	$k = $i + 1;
	if($i%2 == 0){
		echo '<img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">';
	$MIArray[$i] = new menuItem('<h3>The WP Burger'.$star.$k'<h3>,'Freshly made all-beef patty served up with homefries','$14');
} else{
	<img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
	$MIArray[$i] = new menuItem('<h3>WP Kebab'.$star.$k</h3>','Tender cuts of beef and chicken, served with your choice of side','$17');}
	echo $MIArray[$i]->get_itemName();
	echo $MIArray[$i]->get_description();
	echo $MIArray[$i]->get_price();
	i++;
	$star .= "*";
}
 ?>

                <div class="main">
                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->

<?php include'footer.php';
?>
