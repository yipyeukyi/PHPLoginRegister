<?php    header ( "Content-type:text/html;charset=utf-8" );

    $conn = mysqli_connect('localhost','aaa','aaa','aaa') or die('数据库连接失败');

    $conn->set_charset('utf8');

 

    $user = $_POST['user'];

    $pass = $_POST['pass'];

    $connect = $_POST['connect'];

     $id=1;

    $sql = "INSERT INTO users(id,username,password) 

                VALUES (null,'{$user}' ,'{$pass}')";

    mysqli_query($conn,$sql) or die(mysqli_error($conn));

    echo("注册成功！！！<br/><a href='index.html'>点击登录</a>")     ?>