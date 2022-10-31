<?php
session_start();

if(isset ($_SESSION["favcolor"])){
    echo "Favorite color is " . $_SESSION["favcolor"]."<br>";
}
echo "Favorite animals is " . $_SESSION["favanimal"]. ".";

// $_SESSION["favcolor"] = "yellow";
// $_SESSION["favanimal"] = "dog";

?>