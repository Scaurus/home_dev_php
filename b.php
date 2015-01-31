<?php
$dir = './shag3/*';
$dir1='/shag3/';
foreach(glob($dir, GLOB_ONLYDIR) as $v) {
    $s = preg_replace($dir1, '', $v);
    echo $s . "\r\n";

    }
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
foreach(glob($dir, GLOB_ONLYDIR) as $v)
echo $v;
;

echo '</br>';
echo '<p>Tipe 2</p>';
$dirs = array_filter(glob($dir, GLOB_ONLYDIR), 'is_dir');
$i=0;
echo '<p>Massive:</p>';
$lenght_mass = count ($dirs);

for ($i=0; $i<$lenght_mass; $i++)
{
    $str = preg_replace ($dir1,'_', $dirs[$i]);
    print $str;

    #print $dir[$i];
}
?>

