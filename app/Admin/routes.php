<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Big Up';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Админка для лучшего сайта Big Up';
	return AdminSection::view($content, 'Информация');
}]);
