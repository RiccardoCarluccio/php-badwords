<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Bad Word #1</title>
</head>
<body>
  <div class="apex">
    <div class="container">
      <form action="filter.php" method="POST">
        <input type="text" name="bad-word" placeholder="bad word">

        <input type="text" name="text" placeholder="text to check">
        <button type="submit">submit</button>
        <button type="reset">clear text</button>
      </form>
    </div>
  </div>
</body>
</html>