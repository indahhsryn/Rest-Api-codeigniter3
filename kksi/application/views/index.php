<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        fetch("http://localhost/kksi/index.php/Api")
            .then(res => res.json())
            .then(data => console.log(data))
    </script>
</body>

</html>