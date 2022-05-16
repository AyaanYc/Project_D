<?php
    include_once "db/db_board.php";

    session_start();
    $nm = "";

    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
    $list = qna_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QnA</title>
</head>
<body>
<?=isset($_SESSION["login_user"]) ? "<div>". $nm . "님 환영합니다.</div>" : "" ?>
    <div class="continer">
        <main>
        <h2>게시판</h2>
        <div>자주하는 질문</div>
        <div>어떻게 사용하나요? 몰라요 ^^</div>
        </main>
        <h2>QnA</h2>
        <table>
            <tr>
                <th>NO</th>
                <th>질문</th>
                <th>작성일</th>
                <th>작성자</th>
            </tr>
            <tr>
            <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="qna_write.php"><button>질문하기</button></a>
                    <a href="logout.php"><button>로그아웃</button></a>
                    <a href="del.php"><button>삭제</button></a>
                    <a href="mod.php"><button>수정</button></a>
                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>                
                <tbody>                    
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["qust_no"]?></td>
                            <td><?=$item["qust_title"]?></td>
                            <td><?=$item["created_at"]?> </td>
                            <td><?=$item["nm"]?></td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>