<?php
/**
Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 */

function addComment(){
    $txt = $_POST['comment'];
    return "<p>" . $txt . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <?php echo addComment(); ?> <!--Не могу понять почему комментарии не сохраняются,
                                     каждый следующий удаляет предыдущий -->
        <form method="post">
            <textarea name="comment" placeholder="please put your comment here"
                      autofocus cols="100" rows="10"></textarea>
            <input type="submit" name="submit" value="Отправить комментарий"/>
        </form>
    </body>
</html>
