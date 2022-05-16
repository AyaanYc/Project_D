<?php
    include_once "db/db_user.php";
    include_once "db/db_board.php";
    session_start();

    define("PROFILE_PATH", "img/profile/");

    $login_user = &$_SESSION["login_user"];

    $user_nm = $_POST["user_nm"];
    $myself = $_POST["myself"];

    var_dump($_FILES);
    $img_name = $_FILES["img"]["name"];
    $last_index = mb_strrpos($img_name, ".");
    $ext = mb_substr($img_name, $last_index);

    $target_filenm = img_id() . $ext;
    $target_full_path = PROFILE_PATH . $login_user["user_no"];
    if(!is_dir($target_full_path)) {
        mkdir($target_full_path, 0777, true);
    }
    $tmp_img = $_FILES['img']['tmp_name'];
    $imageUpload = move_uploaded_file($tmp_img, $target_full_path . "/" .$target_filenm);
    if($imageUpload) { //업로드 성공!
        
        //이전에 등록된 프사가 있으면 삭제!      
        if($login_user["profile_img"]) {
            $saved_img = $target_full_path . "/" . $login_user["profile_img"];
            if(file_exists($saved_img)) {
                unlink($saved_img);
            }
        }

        //DB에 저장!
        $param = [
            "profile_img" => $target_filenm,
            "user_no" => $login_user["user_no"]
        ];

        $result = upd_profile_img($param);
        $login_user["profile_img"] = $target_filenm;
        // $_SESSION["login_user"] = $login_user;
        Header("Location: profile.php");
    } else { //업로드 실패!
        echo "업로드 실패";
    }
?>