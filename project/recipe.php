<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <link rel="stylesheet" href="css/recipe.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <?php include_once "header.php"; ?>
        <div class="container">
            <aside>
                <div class="cate">
                    <h1>CATEGORY</h1>
                </div>
                <div class="tab_menu">
                    <ul class="list">
                        <li><a href="allfood.php">전체</a></li>
                        <li><a href="k_food.php">한식</a></li>
                        <li><a href="a_food.php">양식</a></li>
                        <li><a href="j_food.php">일식</a></li>
                        <li><a href="c_food.php">중식</a></li>
                    </ul>
                </div>
                <div class="write"><a href="write.php">글쓰기</a></div>
            </aside>
        </div>
</body>
</html>