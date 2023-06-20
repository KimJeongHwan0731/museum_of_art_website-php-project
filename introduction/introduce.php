<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP 프로그래밍 입문</title>
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/css/common.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/message/css/message.css' ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/css/header.css' ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/introduction/css/introduce.css?v=<?= date('Ymdhis') ?>">
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/message/js/message.js' ?>"></script>
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/js/slide.js' ?>"></script>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/global_script.php"; ?>
</head>

<body>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/header.php"; ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/db_connect.php"; ?>
  </header>
  <section>
    <div id="contact">
      <div id="contact_box">
        <div>
          <h4>인 사 말</h4>
          <span>안녕하세요, 아름다운 예술 세상에 오신 것을 환영합니다!<br><br>
            본 미술관은 창의성과 예술의 중심지로, 수많은 국내외 유명 작가들의 작품을 선보이고 있습니다. 화려한 회화에서부터 정교한 조각까지, 다양한 분야의 작품들이 전시되어 있어 관람객들에게 신선한 감동을 선사합니다.<br><br>
            우리 미술관은 예술의 가치를 선도하고 다양한 문화를 소통할 수 있는 장을 마련하기 위해 노력하고 있습니다. 정기적으로 개최되는 특별 전시를 통해 인기있는 작가외 신진 작가들의 작품도 만나볼 수 있습니다. 또한, 교육 프로그램과 다양한 워크숍으로 초보자부터 전문가까지 참여할 수 있는 다양한 기회를 제공합니다.<br><br>
            본 미술관은 찾아오시는 분들에게 독특하고 풍요로운 예술 경험을 선사합니다. 이곳에서 여러분은 예술의 참 아름다움을 발견하고, 저마다의 이야기가 담긴 작품들에 감동하실 것입니다. 아름다운 예술의 세상을 만끽하며 특별한 시간을 보내세요.<br><br>
            이제, 빼어난 작품들과 멋진 전시를 가까이에서 가슴 먹먹하게 감상해보세요. 미술관의 매력에 푹 빠져보시기 바랍니다. 여러분의 관람 여행이 행복한 추억으로 남을 수 있기를 기대합니다. 감사합니다.</span>
        </div>
      </div>
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/footer.php"; ?>
  </footer>
</body>

</html>