<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>이미지 게시판</title>
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/css/common.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/image_board/css/image_board.css?v=<?= date('Ymdhis') ?>">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/css/header.css' ?>">
  <!-- board_excel 자바스크립트 -->
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/image_board/js/image_board.js' ?>" defer></script>
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/image_board/js/btnTop.js' ?>" defer></script>
  <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/js/slide.js' ?>" defer></script>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/global_script.php"; ?>
</head>

<body>
  <header>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/header.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/page_lib.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/db_connect.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/create_table.php";
    create_table($conn, "image_board");
    create_table($conn, "image_board_ripple");
    ?>
  </header>
  <section>
    <div id="board_box">
      <h3>
        전시 > 현재전시
      </h3>
      <form action="image_board_list.php" method="get">
        <div class="input-group mb-3">
          <input type="text" name="keyword" class="form-control" placeholder="검색어를 입력해주세요." aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">검색</button>
          </div>
        </div>
      </form>
      <ul id="board_list">
        <?php

        $page = (isset($_GET["page"]) && is_numeric($_GET["page"]) && $_GET["page"] != "") ? $_GET["page"] : 1;
        $keyword = (isset($_GET["keyword"]) && $_GET["keyword"] != "") ? $_GET["keyword"] : "";

        $sql = "select count(*) as cnt from image_board where subject like :keyword order by num desc";
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $result = $stmt->execute();
        $row = $stmt->fetch();
        $total_record = $row['cnt'];
        $scale = 8;             // 전체 페이지 수($total_page) 계산

        // 전체 페이지 수($total_page) 계산 
        if ($total_record % $scale == 0)
          $total_page = floor($total_record / $scale);
        else
          $total_page = floor($total_record / $scale) + 1;

        // 표시할 페이지($page)에 따라 $start 계산  
        $start = ($page - 1) * $scale;

        $number = $total_record - $start;
        $sql2 = "select * from image_board where subject like :keyword order by num desc limit {$start}, {$scale}";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->setFetchMode(PDO::FETCH_ASSOC);
        $stmt2->bindValue(':keyword', '%' . $keyword . '%');
        $result = $stmt2->execute();
        $rowArray = $stmt2->fetchAll();

        foreach ($rowArray as $row) {
          $num = $row["num"];
          $id = $row["id"];
          $name = $row["name"];
          $subject = $row["subject"];
          $place = $row["place"];
          $period = $row["period"];
          $regist_day = $row["regist_day"];
          $file_name_0 = $row['file_name'];
          $file_copied_0 = $row['file_copied'];
          $file_type_0 = $row['file_type'];
          $image_width = 370;
          $image_height = 370;
        ?>
          <li>
            <span>
              <?php
              if ($userlevel == 1) {
                print "<a href='image_board_view.php?num=$num&page=$page'>";
              }
              if (strpos($file_type_0, "image") !== false)
                print "<img src='./data/$file_copied_0' width='$image_width' height='$image_height'><br>";
              else print "<img src='../img/img1.png' width='$image_width' height='$image_height '><br>" ?>
              </a><br>
              <div class="con">
                <div class="ps1"><?= $place ?></div>
                <div class="ps2"><?= $subject ?></div>
                <div class="ps3"><?= $period ?></div>
              </div>
            </span>
          </li>
        <?php
          $number--;
        }
        ?>
      </ul>

      <div class="container d-flex justify-content-center align-items-start gap-2 mb-3">
        <?php
        $page_limit = 8;
        echo pagination($total_record, 8, $page_limit, $page);
        ?>
      </div>

      <ul class="buttons">
        <li>
          <?php
          if ($userid) {
            if ($userlevel == 1) {
          ?>
              <button onclick="location.href='image_board_form.php'">글쓰기</button>
            <?php
            }
          } else {
            ?>
          <?php
          }
          ?>
        </li>
      </ul>
    </div>
  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/footer.php"; ?>
  </footer>
</body>

</html>