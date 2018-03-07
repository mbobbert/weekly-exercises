Here is the form</br>

<form method="post" action="">
    <?php foreach($items as $i=>$text) : ?> <!--the ':' means opening brackets of the foreach loop -->
        <input type="text" name="item[<?php echo $i ?>]" value="<?php echo htmlspecialchars($text) ?>"/><br>
    <?php endforeach; ?>

    <input type="text" value="" name="item[<?php echo count('items') ?>]">
    <input type="submit" value="add">
</form>

