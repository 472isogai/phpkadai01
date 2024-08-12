<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
</head>
<body>
    <h1>アンケートフォーム</h1>
    <form action="write.php" method="post">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required><br>
        血液型: <select name="Blood_type">
        <option value='A型'>A型</option>
        <option value='B型'>B型</option>
        <option value='O型'>O型</option>
        <option value='AB型'>AB型</option>
        </select><br>
        <input type="submit" value="送信">
    </form>
    <a href="read.php">アンケート結果を見る</a>
</body>
</html> 