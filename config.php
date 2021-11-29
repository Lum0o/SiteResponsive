<?php
session_start();
$pdo = new PDO(
<<<<<<< HEAD
  'mysql:host=localhost;dbname=site_project;',
  'root',
  '',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
=======
    'mysql:host=localhost;dbname=mybdd;',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
>>>>>>> cc7bb1e57812446444771df0073aee7c20ade8f2
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
