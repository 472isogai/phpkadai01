<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
</head>

<?php
$file = fopen('data/data.csv', 'r');
while (!feof($file)) {
    $line = fgets($file);
    echo $line;
};
fclose($file);
?>

</html> 


