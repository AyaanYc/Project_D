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

    function qna()
    {
        $sql=
        "SELECT A.qust_no, A.qust_title, A.user_no, A.created_at, A.qust_ctnt, B.nm
        FROM q_board A
        INNER JOIN t_user B
        WHERE A.user_no = B.user_no
        ORDER BY qust_no DESC
        ";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function qna_list()
    {
        $sql=
        "SELECT A.qust_no, A.qust_title, A.user_no, A.created_at, A.qust_ctnt, B.nm
        FROM q_board A
        INNER JOIN t_user B
        ON A.user_no = B.user_no
        ORDER BY qust_no DESC
        ";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function qna_board(&$param) {
        $user_no = $param["user_no"];
        $qust_title = $param["qust_title"];
        $qust_ctnt = $param["qust_ctnt"];

        $sql = 
        "   INSERT INTO q_board
            (qust_title, qust_ctnt, user_no)
            VALUES
            ('$qust_title', '$qust_ctnt', '$user_no')
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    