<?php
  $badWord = $_POST["bad-word"];
  $text = $_POST["text"];
  $censor = str_replace($badWord, "***", $text);

  $textLength = strlen($text);
  $censorLength = strlen($censor);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Bad Word #2</title>
</head>
<body>
  <div class="container">
    <p><span>Text wrote:</span> <?php echo $text ?></p>
    <p><span>Word to censor:</span> <?php echo $censor ?></p>
    <p><span>Text length:</span> <?php echo $textLength ?></p>
    <p><span>Text length after censor:</span> <?php echo $censorLength ?></p>
  </div>
</body>
</html>