<?php
    include_once "header.php";
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"]))
    {
        $login_user = &$_SESSION["login_user"];
        $nm = &$login_user["nm"];
    }
    include 'db/db_board.php';
    include_once "db/db_user.php";
    $user_no = $_GET["user_no"];
    $food_no = $_GET["food_no"];
    $param = [
        "user_no" => $user_no,
        "food_no" => $food_no
    ];
    $result = sel_profile($param);
    $ctnt = $result["ctnt"];
    $list = sel_detail_profile($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/profile.css">
 </head>
<body>
<div class="container">
    <main>
        <div class="header">

                <div class="box1">
                    <img src="/project/img/profile/<?=$result["user_no"]?>/<?=$result["profile_img"]?>">
                </div>
                <div class="box2"><?=$nm?></div>
                <?php if(empty($ctnt)) { ?>
                    <div class="box3"><input name="myself" placeholder="자기소개 내용이 없습니다." readonly></div>
            <?php } else { ?>
                <div class="box3"><input name="myself" placeholder="<?=$ctnt?>" readonly></div>
                <?php } ?>
        </div>
        <div class="main">
      
           <?php
                foreach($list as $writer){
            ?>
            <ul>
               <li><a href="detail.php?food_no=<?=$item['food_no']?>"><img src="/project/img/board/<?=$writer['food_img']?>"></li>
               <div class="title">
                    <li class="profile"><img src="/project/img/profile/<?=$writer["user_no"]?>/<?=$writer['profile_img']?>"></li>
                    <li><?=$writer['food_title']?><br><?=$writer['nm']?></a></li>
               </div>   
           </ul>
            <?php    
                }
            ?>

        </div>
    </main>
    </div>
        <?php
        include_once "footer.php";
        ?>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                document.getElementById('preview').src = "";
            }
            }
    </script>
</body>
</html>