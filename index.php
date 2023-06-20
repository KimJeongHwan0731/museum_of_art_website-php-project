<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <title>PHP 프로그래밍 입문</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/js/slide.js' ?>"></script>
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/css/slide.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/css/common.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/main/css/main.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/css/header.css' ?>">
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/global_script.php"; ?>
</head>

<body>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/slide.php"; ?>
  </header>

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/main/main.php"; ?>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/footer.php"; ?>
  </footer>
</body>

</html>