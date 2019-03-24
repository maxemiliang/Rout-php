<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="/post" method="POST">
        <input type="text" name="Test">
        <input type="submit" value="submit">
    </form>
    <p><?php echo $v['msg']; ?></p>
    <p><?php print_r($v); ?></p>
</body>

</html> 