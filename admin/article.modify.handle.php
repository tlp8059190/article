<?php
    require_once ('../connect.php');
//    print_r($_POST);
//    echo "<br/>";
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $descriptiont = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();

    $sql = "update article set title = '$title',author = '$author',description = '$descriptiont',
    content = '$content',dateline = $dateline where id = $id";

    //echo $sql."<br/>";
    if(mysqli_query($con,$sql)){

        echo "<script>alert('更新成功');window.location.href='article.manage.php';</script>";
    }else{

        echo "<script>alert('更新失败');window.location.href='article.manage.php';</script>";
    }

?>