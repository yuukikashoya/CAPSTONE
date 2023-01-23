<?php
// value setter

$web = "home";
if(isset($_POST['grade'])){
    $web = "grade";
}
else if(isset($_POST['home'])){
    $web = "home";
}
else if(isset($_POST['advisement'])){
    $web = "advisement";
}
else if(isset($_POST['login'])){
    $web = "login";
}

// and this what design will show in the php
    $grade = "grade";
    $home = "home";
    $advisement = "advisement"; 
    $login = "login"; 
    if($web == $grade)
    {
        include 'design/nav.php';
        echo "uy bagsak";
    }

    else if($web == $home)
    {
        include 'design/nav.php';
        echo "Home";
 
    }
    else if($web == $advisement)
    {
        include 'design/nav.php';
        echo "Advisement";
 
    }
    else if($web == $login)
    {

        include 'design/login.php';
 
    }
?>