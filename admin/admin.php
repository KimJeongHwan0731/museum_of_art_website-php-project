<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/css/common.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/board/css/board.css' ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/css/slide.css?er=1' ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/css/header.css' ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/admin/css/admin.css' ?>">
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/project/board/js/board.js?v=<?= date('Ymdhis') ?>"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/js/slide.js' ?>" defer></script>

</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/header.php"; ?>
    </header>
    <section class="section">
        <div id="admin_box">
            <h3 id="member_title">
                관리자 모드 > 회원 관리
            </h3>
            <ul id="member_list">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">아이디</span>
                    <span class="col3">이름</span>
                    <span class="col4">레벨</span>
                    <span class="col5">포인트</span>
                    <span class="col6">가입일</span>
                    <span class="col7">수정</span>
                    <span class="col8">삭제</span>
                </li>
                <?php
                include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/db_connect.php";
                $sql = "select * from members order by num desc";
                $stmt = $conn->prepare($sql);
                $result = $stmt->execute();
                $rowArray = $stmt->fetchAll();
                $total_record = count($rowArray);

                $number = $total_record;

                foreach ($rowArray as $row) {
                    $num         = $row["num"];
                    $id          = $row["id"];
                    $name        = $row["name"];
                    $level       = $row["level"];
                    $point       = $row["point"];
                    $regist_day  = $row["regist_day"];
                ?>

                    <li>
                        <form method="post" action="admin_member_update.php?num=<?= $num ?>">
                            <span class="col1"><?= $number ?></span>
                            <span class="col2"><?= $id ?></a></span>
                            <span class="col3"><?= $name ?></span>
                            <span class="col4"><input type="text" name="level" value="<?= $level ?>"></span>
                            <span class="col5"><input type="text" name="point" value="<?= $point ?>"></span>
                            <span class="col6"><?= $regist_day ?></span>
                            <span class="col7"><button type="submit">수정</button></span>
                            <span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?id=<?= $id ?>'">삭제</button></span>
                        </form>
                    </li>

                <?php
                    $number--;
                }
                ?>
            </ul>
            <h3 id="member_title">
                관리자 모드 > 게시판 관리
            </h3>
            <ul id="board_list">
                <li class="title">
                    <span class="col1">선택</span>
                    <span class="col2">번호</span>
                    <span class="col3">이름</span>
                    <span class="col4">제목</span>
                    <span class="col5">첨부파일명</span>
                    <span class="col6">작성일</span>
                </li>
                <form method="post" action="admin_board_delete.php">
                    <?php
                    $sql2 = "select * from board order by num desc";
                    $stmt2 = $conn->prepare($sql2);
                    $result2 = $stmt2->execute();
                    $rowArray2 = $stmt2->fetchAll();
                    $total_record2 = count($rowArray2);

                    $number = $total_record2;

                    foreach ($rowArray2 as $row) {
                        $num         = $row["num"];
                        $name        = $row["name"];
                        $subject     = $row["subject"];
                        $file_name   = $row["file_name"];
                        $regist_day  = $row["regist_day"];
                        $regist_day  = substr($regist_day, 0, 10)
                    ?>
                        <li>
                            <span class="col1"><input type="checkbox" name="item[]" value="<?= $num ?>"></span>
                            <span class="col2"><?= $number ?></span>
                            <span class="col3"><?= $name ?></span>
                            <span class="col4"><?= $subject ?></span>
                            <span class="col5"><?= $file_name ?></span>
                            <span class="col6"><?= $regist_day ?></span>
                        </li>
                    <?php
                        $number--;
                    }
                    ?>
                    <button type="submit">선택된 글 삭제</button>
                </form>
            </ul>
        </div> <!-- admin_box -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/footer.php"; ?>
    </footer>
</body>

</html>