<?php
$paragraph = $_POST['paragraph'];
$bad_word = $_POST['badWord'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    span {
      color: red;
    }
  </style>
  <title>Document</title>
</head>
<body>


<h2>Il paragrafo che hai digitato è: <span><?php echo $paragraph ?></span></h2>

<h3>La lunghezza del paragrafo è di <?php echo strlen($paragraph) ?> caratteri.</h3>



<?php str_replace($bad_word, '***', $paragraph) ?>
<h2>Il paragrafo che ho modificato, censurando le ingiurie, è: <span><?php echo str_replace($bad_word, '***', $paragraph) ?></span></h2>

<h3>La lunghezza del paragrafo adesso è di <?php echo strlen(str_replace($bad_word, '***', $paragraph)) ?> caratteri.</h3>

</body>
</html>
