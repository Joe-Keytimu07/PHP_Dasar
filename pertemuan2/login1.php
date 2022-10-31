<?php

if($_POST['nama']== 'admin' && $_POST['pass']=='admin123'){
    echo "selamat login sukses";
}else {
    echo "username dan pass salah";
}

?>