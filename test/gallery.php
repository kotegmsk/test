<form enctype="multipart/form-data" method="post">
    <p><input type="file" name="image">
        <input type="submit" value="Отправить"></p>
    <input type="button" value="Back" class="btn btn-danger" onclick="parent.location='./index.php'">
</form>
<?php
$dir = __DIR__ . '\img';

$scan = scandir($dir);
foreach ($scan as $a) {
    if ((strpos($a, 'jpg') > 0)||(strpos($a, 'gif') > 0)){
        echo
            '<img src="./img/' . $a . '"   width="189"   ><br>';
    }
}
if ($_FILES) {
    $newName = basename($_FILES['image']['name']);
    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['image']['tmp_name'], $dir . DIRECTORY_SEPARATOR . $newName);
        header("Location: gallery.php");
    }
};
?>
