<?php
include_once "db/db_board.php";

session_start();

$food_no = $_GET['food_no'];

$param = [
    "food_no" => $food_no
];

$item = sel_board($param);

$youtube_url = $item["food_url"];
    $last_index = mb_strrpos($youtube_url, "/");
    $url = mb_substr($youtube_url, $last_index);

if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
}
$com = comment($param);

$detail_user_no = sel_detail_profile($param);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $item['food_title'] ?></title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/detail.css">
</head>

<body>
    <?php include_once "header.php"; ?> 
    <main>
        <a href="all_food.php"><button>목록</button></a>
        <?php
        if (isset($_SESSION['login_user']) && $login_user['user_no'] === $item['user_no']) { ?>
            <a href="mod.php?food_no=<?= $food_no ?>"><button>수정</button></a>
            <button onclick="isDel();">삭제</button>
        <?php } ?>

        </div>
        <div class="main1">
            <div class="box1">
                <img src="/project/img/profile/<?= $detail_user_no['user_no']?>/<?=$item['profile_img']?>">
            </div>
            <div class="box2">
                <?= $item['nm'] ?>
            </div>
            <div class="box3">
                <?= $item['created_at'] ?></div>
        </div>
        <div class="box4">
            <img class='food_img' src="/project/img/board/<?= $item['food_img'] ?>">
        </div>
        <div class="box5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $url ?>" allowfullscreen></iframe>
        </div>
        <div class="box6">
            <?= $item["food_ctnt"] ?>
        </div>
        <div class="com1">댓글</div>
                <?php
                    foreach($com as $row) {?>
                        <div class="comm">
                            <div><?=$row["reply_ctnt"]?></div>
                            <div id="comment">
                                <div><?=$row["nm"]?></div>
                                <div><?=$row["created_at"]?></div>
                            </div>
                        </div>
                    <?php }  ?>  
                </div>
                
                    <form action="com_proc.php" method="post">
                        <div class="c cn">
                            <div class="nm"><div class="i_nm"><?=$nm?></div>
                            <div><input type="hidden" name="food_no" value=<?=$food_no?>></div>
                            <div><textarea id="ctnt" name="reply_ctnt" placeholder="내용"></textarea></div></div>
                            <div><input id="sub" type="submit" value="댓글등록"></div>
                        </div>
                    </form>
        <script>
            function isDel() {
                console.log('isDel 실행 됨!!');
                if (confirm('삭제하시겠습니까?')) {
                    location.href = "del.php?i_board=<?= $food_no ?>";
                }
            }
        </script>
    </main>
</body>

</html>