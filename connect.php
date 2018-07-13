<?php
    require_once('config.php');
    //phpinfo();'
    //连库
    $con = mysqli_connect("127.0.0.1", "root", "");
    if (!$con) {
        echo mysqli_error($con);
        echo 'faile<br/>';
    } else {
        //echo 'SUCCESS<br/>';
    }
    //选库
    if (!mysqli_select_db($con, 'info')) {
        echo mysqli_error($con);
        echo 'faile1<br/>';
    } else {
        //echo 'SUCCESS1<br/>';
    }
    //字符集
    if (!mysqli_query($con, 'set names utf8')) {
        echo mysqli_error($con);
        echo 'faile2<br/>';
    } else {
        //echo 'SUCCESS2<br/>';
    }
//    $sql = "select id,title from article";
//    $result = mysqli_query($con,$sql);
//    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
//        if($row == null) {
//            echo 'null<br/>';
//        }else{
//            //print_r($row);
//        }
//    }
   // mysqli_close($con)
?>