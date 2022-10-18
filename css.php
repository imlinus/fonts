<?php
if (isset($_GET['family'])) {
  $font_family = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_GET['family'])));
  $stylesheet = file_get_contents('./fonts/' . $font_family . '/style.css');

  header("Content-type: text/css");
  echo $stylesheet;
}
