<?php


$title = $_POST['title'];
$desc = $_POST['desc'];



require_once '../../php/connect.php';

require_once 'upload.php';





// mysqli_query($connect, "INSERT * DATE_FORMAT(`date_registration`,`%d.%m.%Y`) as `date_reg` FROM `news`");

if (isset($_FILES['file'])) {
    // проверяем, можно ли загружать изображение
    $check = can_upload($_FILES['file']);

    if ($check === true) {
        // загружаем изображение на сервер
        
        $url = make_upload($_FILES['file']);
        echo "<strong>Файл успешно загружен!</strong>";
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}
function make_upload($file){	
	// формируем уникальное имя картинки: случайное число и name
	$name = mt_rand(0, 10000) . $file['name'];
	$dir = '../../img/' . $name;
	copy($file['tmp_name'], $dir);
    return $dir;
    
  }

mysqli_query($connect, "INSERT INTO `news` (`id`, `title`, `desc`, `date`, `img`) VALUES (NULL, '$title', '$desc', NULL, '$url')");
header('location: news.php');
