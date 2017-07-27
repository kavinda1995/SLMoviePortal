<?php
    $flag = 0;
    if (isset($_GET['flag'])){
        $flag = $_GET['flag'];
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
                        <li class=\"home\"><a class=\"\" href=\"#\">Home</a></li>
                        <li class=\"search\"><a href=\"#\">Browse</a></li>
                        <li class=\"login\"><a href=\"login.php?flag=1\">Login or Register</a></li>
                    </ul>
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