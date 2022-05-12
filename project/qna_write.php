<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문</title>
    <link rel="stylesheet" href="/project/css/qna_write.css">
</head>
<body>
    <div class="continer">
    <h1>하고 싶은 질문을 하세요~</h1>
    <a href="qna.php"><button>이전으로</button></a>
    <form action="qna_write_proc.php" method="post">
    <div><input type="text" name="qust_title" placeholder="제목"></div>
    <div><textarea name="qust_ctnt" placeholder="1000자 이내로 작성해 주세요 ^^"></textarea></div>
    <div>
        <input type="submit" value="등록">
        <input type="reset" value="초기화">
        <br>
    </div>
    </form>
    </div>
</body>
</html>