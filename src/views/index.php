<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
</head>
<body>

  <!-- <h1><?= $this->params['foo'] ?></h1> -->
  <!-- <h1><?= $this->foo ?></h1> -->
  <h1><?= $foo ?></h1>

  <form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" name="receipt" />
    <button type="submit">Upload</button>
  </form>

</body>
</html>