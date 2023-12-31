<?php
function can_upload($file)
{
	// если имя пустое, значит файл не выбран
	if ($file['name'] == '')
		header('location: news.php');

	/* если размер файла 0, значит его не пропустили настройки 
	   сервера из-за того, что он слишком большой */
	if ($file['size'] == 0)
		return 'Файл слишком большой.';

	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

	// если расширение не входит в список допустимых - return
	if (!in_array($mime, $types))
		return 'Недопустимый тип файла.';

	return true;
}