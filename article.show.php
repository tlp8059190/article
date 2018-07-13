﻿<?php
    require_once ('connect.php');
    $id = $_GET['id'];
//    echo 'id = '.$id.'<br/>';
//    echo "id = $id<br/>";
    $sql = "select * from article where id = $id";
    $result = mysqli_query($con,$sql);
    if($result && mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }else{
	    echo "这篇文章不存在";
        exit();
    }
//    print_r($data);
//    echo "<br/>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>文章发布系统</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <!-- start header -->
    <div id="header">
        <div id="logo">
            <h1><a href="#">php与mysql<sup></sup></a></h1>
            <h2></h2>
        </div>
        <div id="menu">
            <ul>
                <li class="active"><a href="#">文章</a></li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
        </div>
    </div>
    <!-- end header -->
</div>

<!-- start page -->
<div id="page">
    <!-- start content -->
    <div id="content">
        <div class="post">
            <h1 class="title"><?php echo $data['title']?><!--文章标题放置到这里--><span style="color:#ccc;font-size:14px;">　　作者：<?php echo $data['author']?><!--作者放置到这里--></span></h1>
            <div class="entry">
                <!--文章内容放置到这里-->
                <?php echo $data['content']?>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- start sidebar -->
    <div id="sidebar">
        <ul>
            <li id="search">
                <h2><b class="text1">Search</b></h2>
                <form method="get" action="">
                    <fieldset>
                        <input type="text" id="s" name="s" value="" />
                        <input type="submit" id="x" value="Search" />
                    </fieldset>
                </form>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
    <p id="legal"></p>
</div>
<!-- end footer -->
</body>
</html>