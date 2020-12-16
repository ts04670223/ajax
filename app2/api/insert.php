<?php
//處理新增資料的請求
include_once "../base.php";
$Stu->save($_POST);

// to("../index.php");

?>
<pre>
  <?=print_r($_POST);?>
</pre>