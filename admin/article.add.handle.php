<?php
    require_once ('../connect.php');
    //把传递过来的信息存入数据库
    //print_r($_POST);
    //echo "<br/>";

    if(!(isset($_POST['title']) && !empty($_POST['title']))){
        echo "<script> alert('标题不能为空！');window.location.href='article.add.php'</script>";
    }

    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();

    //echo $title."--".$author."--".$description."--".$content;

    $sql = "insert into article (title, author, description, content, dateline) 
    value ('$title','$author','$description','$content',$dateline)";
    //echo $sql;
    if(mysqli_query($con,$sql)){
        echo "<script>alert('发布文章成功');window.location.href='article.add.php'</script>";
    }else{
        echo "<script>alert('发布文章失败');window.location.href='article.add.php'";
    }
?>