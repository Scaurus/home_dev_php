<?php
$arr = scandir('./video/');
$count = count($arr);
if(!empty($count)) {
    $status = false;
    $UrlVideo = '';
    for($i = 0; $i < $count; $i++) {
        if(substr($arr[$i], -4) == '.mp4') {
            $status = true;
            $UrlVideo=$arr[$i];
            $trimmedUrlVideo = trim($UrlVideo);
        }
    }
}
if($status) : ?>
    <?
    return''.$trimmedUrlVideo.'';
    ?>

<?php else : ?>
    Файлов с расширением mp4 не найдено
<?php endif; ?>
d

<?php
$entries = scandir(".");
$filelist = array();
foreach($entries as $entry) {
    if (strpos($entry, "te") === 0) {
        $filelist[] = $entry;
    }
}
?>