<form method="post">
    Ім`я<br>
    <input type="text" name="name" value="<?php echo $vars['name'];?>"><br>
    Коментарій<br>
    <textarea name="text"><?php echo $vars['text'];?></textarea><br>
    <input type="submit" value="Відправити">
</form>
<?php echo $vars['msg'];?>