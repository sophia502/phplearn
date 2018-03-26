<?php
//    echo var_dump($arr);
    session_start();
    $users=array();
    if(isset($_SESSION['users'])){
        $users=$_SESSION['users'];
    }
    if (isset($_POST['sub'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $arr=array();
        $arr['name']=$name;
        $arr['age']=$age;

        $users[]=$arr;
        $_SESSION['users']=$users;
    }
//    echo count($users);
    if (isset($_POST['delete'])){
//        $user=$_SESSION['users'];
//        array_pop($user);
//        $users=$user;
//        $_SESSION['users']=$user;
        array_pop($users);
        $_SESSION['users']=$users;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="test7.php" method="post">
        <h3> 录入员工信息 </h3>
        名称：<input type="text" name="name">
        年龄：<input type="number" name="age">
        <input type="submit" name="sub" value="提交">
    </form>
    <hr>
    <form action="test7.php" method="post">
        <table style="border: 1px solid #000">
            <caption>员工信息表</caption>
            <tr>
                <td>编号</td>
                <td>姓名</td>
                <td>年龄</td>
            </tr>
            <?php for ($i=0;$i<count($users);$i++) {?>
                <tr>
                    <td><?php echo $i+1?></td>
                    <td><?php echo $users[$i]['name']?></td>
                    <td><?php echo $users[$i]['age']?></td>
                </tr>
            <?php }?>
        </table>
        <input type="submit" name="delete" value="删除">
    </form>
</body>
</html>
