<!DOCTYPE html>
<html>
<head>
  <title>Результати голосування</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Результати голосування</h1>
    <form action="index.html">
    <?php
    $file = 'text.txt';
    if (file_exists($file)) {
      $votes = file($file, FILE_IGNORE_NEW_LINES); 
      $option1_count = array_count_values($votes)["option1"] ?? 0;
      $option2_count = array_count_values($votes)["option2"] ?? 0; 
      $option3_count = array_count_values($votes)["option3"] ?? 0; 

      echo "<p>C++ $option1_count голосів</p>";
      echo "<p>PHP $option2_count голосів</p>";
      echo "<p>Java $option3_count голосів</p>";

    } else {
      echo "Ще немає голосів";
    }
    ?>
      <input type="submit" value="Голосувати ще раз">
    </form>  
</body>
</html>
