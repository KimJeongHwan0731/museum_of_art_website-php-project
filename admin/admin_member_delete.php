<?php
session_start();
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";

if ($userlevel != 1) {
    print("
            <script>
            alert('관리자가 아닙니다! 회원 삭제는 관리자만 가능합니다!');
            history.go(-1)
            </script>
        ");
    exit;
}

include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/db_connect.php";
$id   = $_GET["id"];

$sql = "delete from members where id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$sql = "delete from image_board where id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$sql = "delete from image_board_ripple where id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$sql = "delete from message where send_id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$sql = "delete from message where rv_id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$sql = "delete from notice where id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$sql = "delete from board where id =:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
print "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
