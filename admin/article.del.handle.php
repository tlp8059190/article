<?php
    require_once ('../connect.php');
    $id = $_GET['id'];
    $sql = "delete from article where id = $id";
    //echo $sql;

    if(mysqli_query($con,$sql)){
        echo "<script>alert('删除文章成功！');window.location.href='article.manage.php';</script>";
    }else{
        echo "<script>alert('删除文章失败！');window.location.href='article.manage.php'</script>";
    }
?>