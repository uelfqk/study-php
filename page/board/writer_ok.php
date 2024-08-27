<?php

    include $_SERVER['DOCUMENT_ROOT'] . "/db.php";

    $username = $_POST['name'];
    $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('y-m-d');

    if($username && $userPassword && $title && $content) {
        $Sql = query("insert into board(name, pw, title, content, date) 
                           values('".$username."','".$userPassword."','".$title."','".$content."','".$date."')");
        echo "
            <script>
                alert('글쓰기 완료되었습니다.');
                location.href='/';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('글쓰기에 실패했습니다.');
                history.back();
            </script>
        ";
    }
?>