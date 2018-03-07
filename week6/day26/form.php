<?php


/**
 *
 */

 class form
 {
    public static function select( $name, $options, $selected, $html)
    {

    }
 }

 ?>

 <?php $selected_number = 1; ?>

 <form action="">

    <select name=" id=">
        <option value="1" <?php if  ($selected_number == 1 ) echo 'Selected' ; ?>>One</option>
        <option value="2" <?php echo  ($selected_number == 2 ? 'Selected' : " "); ?>>Two</option>
        <option value="3" <?php echo $selected_number == 3 ? 'Selected' : " "; ?>>Three</option>
    </select>
 </form>