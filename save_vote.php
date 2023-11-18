<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vote = $_POST["vote"]; // Отримання голосу з форми
  
  $file = 'text.txt';
  $current = file_get_contents($file); // Отримання поточного вмісту файлу
  $current .= $vote . "\n"; // Додавання голосу до файлу, розділеного новим рядком
  file_put_contents($file, $current); // Запис у файл

  header("Location: results.php"); // Перенаправлення на сторінку з результатами
  exit();
}
?>
