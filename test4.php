<?php
    if (isset($_GET['sub'])){
        $n1=$_GET['n1'];
        $n2=$_GET['n2'];
        $opr=$_GET['operator'];
//        echo $n1." ".$n2." ".$opr;
        $end='';
        switch ($opr){
            case'+':
                $end="结果为：$n1 $opr $n2 =".($n1 + $n2);
                break;
            case'-':
                $end="结果为：$n1 $opr $n2 =".($n1 - $n2);
                break;
            case'*':
                $end="结果为：$n1 $opr $n2 =".($n1*$n2);
                break;
            case'/':
                $end="结果为：$n1 $opr $n2 =".($n1/$n2);
                break;
            case'%':
                $end="结果为：$n1 $opr $n2 =".($n1%$n2);
                break;
        }
        if(!is_numeric($n1)||!is_numeric($n2)){
                $end="输入不是数字";
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
    <style>
        table{
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>计算器</h1>
    <form action="test4.php" method="get">
    <table>
        <tr>
            <td>
                <input type="text" name="n1" value="<?php echo isset($n1)?$n1:''?>">
            </td>
            <td>
                <select name="operator">
                    <option value="+" <?php echo isset($opr)&&$opr=='+'?'selected':''?>>+</option>
                    <option value="-" <?php echo isset($opr)&&$opr=='-'?"selected":''?>>-</option>
                    <option value="*" <?php echo isset($opr)&&$opr=='*'?"selected":''?>>x</option>
                    <option value="/" <?php echo isset($opr)&&$opr=='/'?"selected":''?>>/</option>
                    <option value="%" <?php echo isset($opr)&&$opr=='%'?"selected":''?>>%</option>
                </select>
            </td>
            <td><input type="text" name="n2" value="<?php echo isset($n2)?$n2:''?>"></td>
            <td><input type="submit" name="sub" value="计算"></td>
        </tr>
        <tr>
            <td colspan="4">
                <?php echo $end?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
