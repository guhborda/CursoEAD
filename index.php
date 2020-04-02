<?php
    include('config.php');
    include('autoload.php');

    if($_REQUEST['url']){
        if(($_REQUEST['url'] != '/') or ($_REQUEST['url'] != ' ')){

        }else{
            include('home.view.php');
        }
    }else{
        header()
    }


?>