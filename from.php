<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
<form action="post.php" method= "post">
    <input type="text" name="isim" placeholder="isim"><br>
    <input type="text" name="isim" placeholder="soyisim"><br>
    <hr>
    <label>Diller</label><br>
    <label>Php</label>
    <input type="checkbox" value="php" name="dil[]"><br>
    <label>Node.js</label>
    <input type="checkbox" value="node" name="dil[]"><br>
    <label>JS</label>
    <input type="checkbox" value="js" name="dil[]"><br>

    <button type="submit">GÖNDER</button>
<hr>
</form>

</body>
</html>
