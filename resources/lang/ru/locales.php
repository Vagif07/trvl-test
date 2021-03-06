<?php

return [

	'lang' => 'Язык: RU',

	'modules' => [
		'weather' => [
			'title' => 'Погода',
			'pressure' => 'Давление',
			'temp' => 'Температура',
			'feels_like' => 'Ощущается как',
			'min_max_temp' => 'Мин/Макс Темп',
			'wind_speed' => 'Скорость ветра',
			'speed_metric' => 'метер/сек',
			'clouds' => 'Облачность',
		],
		'time' => [
			'title' => 'Время',
			'zone' => 'Баку/Азербайджан',
		],
		'loading' => 'Собираем Информацию',
	],

	'sidebar' => [
		'dashboard' => 'Панель Пользователя',
		'main' => 'Основные',
		'company' => [
			'title' => 'Компании',
			'subheading' => 'Компаненты Компании:',
			'index' => 'Список Компаний',
			'create' => 'Создать Компанию',
		],
		'employee' => [
			'title' => 'Работники',
			'subheading' => 'Компоненты Работников:',
			'index' => 'Список Работников',
			'create' => 'Создать Работника',
		],
	],

	'table' => [
		'company' => [
			'logo' => 'Лого',
			'name' => 'Название',
			'email' => 'Э-Мейл',
			'website' => 'Веб-сайт',
		],
		'employee' => [
			'first_name' => 'Имя',
			'last_name' => 'Фамилия',
			'company' => 'Компания',
			'email' => 'Э-Мейл',
			'phone' => 'Телефон',
		],
		'view' => 'Посмотреть',
		'edit' => 'Редактировать',
		'delete' => 'Удалить',
		'loading' => 'Загрузка',
		'pagination' => [
			'prev' => 'Предыдущая',
			'next' => 'Следующая',
			'page' => 'Страница',
		],
	],

	'resources' => [
		'company' => [
			'index' => 'Компании',
			'create' => 'Создать Новую Компанию',
			'edit_title' => 'Редактировать Компанию: :name',
			'delete_title' => 'Удалить Компанию: :name',
			'show_title' => 'Компания: :name',
			'name' => 'Название Компании',
			'email' => 'Э-Мейл Компании',
			'logo' => 'Лого Компании',
			'website' => 'Веб-сайт Компании',
			'create_action' => 'Создать Компанию',
			'edit_action' => 'Обновить Информацию Компании',
			'success_create' => 'Новая компания была успешна создана.',
			'success_edit' => 'Информация о компании была успешна обновлена.',
			'success_action' => 'Посмотреть Все Компании',
		],
		'employee' => [
			'index' => 'Работники',
			'create' => 'Создать Нового Работника',
			'edit_title' => 'Редактировать Работника: :name',
			'delete_title' => 'Удалить Работника: :name',
			'show_title' => 'Работник: :name',
			'company_show_title' => 'Работает в Компании :name',
			'first_name' => 'Имя',
			'last_name' => 'Фамилия',
			'company' => 'Компания',
			'email' => 'Э-Мейл Работника',
			'phone' => 'Телефон Работника',
			'create_action' => 'Создать Работника',
			'edit_action' => 'Обновить Информацию о Работнике',
			'success_create' => 'Новый работник успешно создан.',
			'success_edit' => 'Информация о работнике была успешно обнавлена.',
			'success_action' => 'Посмотреть Всех Работников',
		],
	],

	'created_at' => 'Создан',
];