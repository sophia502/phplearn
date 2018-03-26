<?php
    if (isset($_POST['sub'])){
        $arr = array_unique($_POST);
        if (count($arr)==4){
            echo "<script>alert('successful')</script>";
        }else{
            echo "<script>alert('name repeat')</script>";
        }

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
    <h2>输入三位不同员工的姓名</h2>
    <form action="test11.php" method="post">
        分组姓名1：<input type="text" name="n1"><br>
        分组姓名2：<input type="text" name="n2"><br>
        分组姓名3：<input type="text" name="n3"><br>
        <input type="submit" name="sub" value="提交">
    </form>

</body>
</html>
