$
    if(isset($_COOKIE['no'])){
        echo("No Induk:".$_COOKIE['no']);
        setcookie("no","",time()-3600);
    }