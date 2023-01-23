<?php
// value setter

$web = "home";
if(isset($_POST['grade'])){
    $web = "grade";
}
else if(isset($_POST['home'])){
    $web = "home";
}

// and this what design will show in the php
    $grade = "grade";
    $home = "home";
    if($web == $grade)
    {
        echo "uy bagsak";
    }

    else if($web = $home)
    {
        echo "Home";
 
    }
?>