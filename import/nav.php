<?php
    session_start();
    $flag = 0;
    if (isset($_GET['flag'])){
        $flag = $_GET['flag'];
    }
    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
    }
?>
<link rel="stylesheet" type="text/css" href="css/nav.css">
<?php
    if ($flag == 0){
        echo "
            <header>
                <div class=\"nav\">
                    <ul id=\"ul-nav\">
                        <li class=\"logo\">SL Movie Club</li>
                        <li class=\"home\"><a class=\"\" href=\"index.php\">Home</a></li>
                        <li class=\"search\"><a href=\"browse.php\">Browse</a></li>";
                        if (!isset($_SESSION['logged'])){
                            echo "<li class=\"login\"><a href=\"login.php?flag=1\">Login or Register</a></li>";
                        }else{
                          echo "
                          <li class=\"login\"><a class=\"\" href=\"logout.php\">Logout</a></li>
                          <li class=\"login\"><a class=\"\" href=\"logout.php\">$user</a></li>";
                        }
                        
                    echo "</ul>
                </div>
            </header>
        ";
    }else{
        echo "
            <header>
                <div class=\"nav\">
                    <ul id=\"ul-nav\">
                        <li class=\"logo\"><a href = 'index.php'>SL Movie Club</a></li>
                        <li class=\"home\"><a class=\"\" href=\"#\"></a></li>
                    </ul>
                </div>
            </header>
        ";
    }
?>