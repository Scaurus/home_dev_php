<?php
$fileCode = file_get_contents('./translate_numbers1.py');
echo $fileCode;
echo 'HELOOL';
?>


<?php
$path ='.shag3/' ;
$dirs = array_filter(glob('./shag3/'), 'is_dir');
print_r( $dirs);

?>