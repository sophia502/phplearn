<?php

if(isset($_POST['sub'])){
    unset ($_POST['sub']);
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $arr=implode(',', $_POST);
    echo $arr;
}

?>
	<meta charset="utf-8">
	<h3>请输入标题内容和日期</h3>
	<form action='test3.php' method='post' >
	新闻标题：<input type="text" name="title"/><br/>
	新闻内容：<input type="text" name="content"/><br/>
	新闻日期：<input type="text" name="date"/><br/>
	<input type="submit" value="submit" name="sub" />
	</form>