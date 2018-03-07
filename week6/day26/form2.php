<?php


/**
 *
 */

 class form
 {
     /**
      * generates a select field
      *
      * generates select field, puts options inside, chooses the right option
      * adds additional HTML code
      *
      * @param $name  - string, name attribute of the select // 'number' in this case, as we are filling in numbers
      * @param $options - array of options where keys are value attributes and
      *                   values are labels eg. [123 => 'foo, 456 => 'bar']
      * @param $selected - value within the options that should be initially selected
      * @param $html - string with HTML attributes (eg. onclick, class, id) that
      *                should be appended to the end of the opening <select> tag
      * @return string - HTML code for the select field
      */

    public static function select( $name, $options, $selected, $attributes)
    {
        $html = '<select name=" '. $name .' " ' . $attributes . ' >'; // <select name='foo'>

        foreach($options as $value => $label)
        {
            //$html .= '<option value=" '. $value.' " ' .($value == $selected ? ' selected ' : ''). ">" .$label.'</option>';
            $html .= '<option value=" '. $value.' " '; // <option value="bar"
            $html .= ($value == $selected ? ' selected ' : ''); // sselected
            $html .= ">"; // >
            $html .= $label; // Bar
            $html .= '</option>'; //</option>


        }

        $html .= '<select>'; // need to append, so use the dot!
        //$html = $html . '<select>'; // as line above
        return $html;
    }
 }
 echo form::select
 ('color',
    [
     'red' => 'Red',
    'blue' => 'Blue',
    'green' => 'Green'
    ],
    'blue', 'id="color_select"');

 $sample = [
     1 => 'One',
     2 => 'Two'
 ];


 ?>

 <?php $selected_number = 1; ?>

 <form action="">

    <select name="number">
        <option value="1" <?php if  ($selected_number == 1 ) echo 'Selected' ; ?>>One</option>
        <option value="2" <?php echo  ($selected_number == 2 ? 'Selected' : " "); ?>>Two</option>
        <option value="3" <?php echo $selected_number == 3 ? 'Selected' : " "; ?>>Three</option>
    </select>
 </form>