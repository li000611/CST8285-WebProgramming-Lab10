
<?php
global $title;
echo "<!DOCTYPE html>";
echo"<html>";
   echo" <head>";
      echo"  <title>$title</title>";
        echo'<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
       echo "<link href='http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800' rel='stylesheet'";
	   echo "type='text/css' />";
      echo '<link href="css/style.css" rel="stylesheet" type="text/css">';
 echo "</head>";
	echo'    <body>';
       echo '<div id="wrapper">';
          echo ' <header class="clearfix">';
              echo  '<img src="images/header_img.jpg" alt="Dining Room" title="WP Eatery"/>';
               echo '<div id="title">';
                 echo   '<h1>WP Eatery</h1>';
                   echo '<h2>1385 Woodroffe Ave, Ottawa ON</h2><br>';
                  echo  '<h2>Tel: (613)727-4723</h2>';
               echo '</div>';
          echo  '</header>';
          echo  '<nav>';
               echo '<div id="menuItems">';
                  echo  '<ul>';
                   echo    ' <li><a href="index.php">Home</a></li>';
                    echo    '<li><a href="menu.php">Menu</a></li>';
                       echo '<li><a href="contact.php">Contact</a></li>';
                   echo '</ul>';
               echo '</div>';
           echo '</nav>';

?>
