<?php
  /* Принимаем данные из формы */
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $mysqli = new mysqli("localhost", "admin", "123456", "database");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`, `date`) VALUES ('$name', '$page_id', '$text_comment', NOW())");// Добавляем комментарий в таблицу
  mysql_query("SET names cp1251");
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>