<?php
    include_once "db.php";

    function ins_recipe(&$param)
    {
        $title = $param["title"];
        $video = $param["video"];
        $ctnt = $param["ctnt"];
        $category = $param["category"];
        $user_no = $param["user_no"];
        $food_img = $param["food_img"];

        $sql =
        "   INSERT INTO f_board
            (food_title, food_url, food_ctnt, ctgr_no, user_no, food_img)
            VALUES
            ('$title', '$video', '$ctnt', '$category', '$user_no', '$food_img')
        ";

        $conn = get_conn();     
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function img_id() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0x0fff) | 0x4000
            , mt_rand(0, 0x3fff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff) 
        ); 
    }



    