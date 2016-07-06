<?php
// getenv() の使用例
$ip = getenv('REMOTE_ADDR');
echo $ip.'<br />';
// または単純にスーパーグローバル（$_SERVER または $_ENV）を使用します
$ip = $_SERVER['REMOTE_ADDR'];

echo $ip;
?>