<?php
/**
 * @file
 *   This file is the template to show list containing JSON data.
 *
 * @param array JSON_data
 */

?>
<div class="islandora_json_to_list_viewer">
<?php
  /**
   * recursive function that prints an
   * array object to an unordered list
   *
   * @param mixed $JSON_array
   *   An array to render in a list
   */
  function print_JSON_in_list($JSON_array) {
    print('<UL>');
    foreach ($JSON_array as $type => $value) :
      print ('<LI>');
      if (is_object($value)) :
        print_JSON_in_list($value);
      else:
        print ($type . ':  ' . $value);
      endif;
      print ('</LI>');
    endforeach;
    print('</UL>');
  }

  print_JSON_in_list($JSON_datastream);
?>
</div>
