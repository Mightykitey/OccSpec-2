<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo"<title>The Forms</title>";
echo "</head>";

echo "<body>";
    echo "<form method='post' action=''>";
        echo"<label for='num'>No. of ticket </label>";
        // this a label in front of the box's
        echo "<input type='text' name='num' id='num' placeholder='number of tickets required'>";
        // most thing start with an input. declare a name(num). placeholder text in the box's
        echo "<br>";
        echo"<label for='pss'> Password </label>";
        echo "<input  type='password' name='password' id='pss' placeholder='password'>";
        // it hides what your typing
        echo "<br>";
        echo"<label for='lgn'> Login in </label>";
        echo "<input  type='submit' name='submit' id='lgn' value='login'>";
        //
        echo "</form>";
    echo "<a href='index.php'> go back to main page</a> ";
    echo"<link rel='stylesheet' href='css/styles.css'>";
echo "</body>";
echo "</html>";


?>