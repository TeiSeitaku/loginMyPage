<?php
mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$result = $pdo ->query("select image from img_upload;");

foreach($result as $row){
    $uploaded_img = $row['image'];}
$image_path="./image/".$uploaded_img;

?>

<!DOTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>画像アップロード</title>
        </head>
        <body>
            <img src="<?php echo $image_path;?>">
        </body>
    </html>