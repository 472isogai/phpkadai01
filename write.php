<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Blood_type = $_POST['Blood_type'];
    //File書き込み
    $file = fopen("./data/data.csv", "a");    // ファイル読み込み
    fputcsv($file, [$name, $email, $Blood_type]);
    fclose($file);

}

?>
<a href="read.php">結果を見る</a>
</body>
</html>
