<?php

return [

	'lang' => 'Language: EN',

	'modules' => [
		'weather' => [
			'title' => 'Weather',
			'pressure' => 'Pressure',
			'temp' => 'Temperature',
			'feels_like' => 'Feels like',
			'min_max_temp' => 'Max/Min Temp',
			'wind_speed' => 'Wind speed',
			'speed_metric' => 'meter/sec',
			'clouds' => 'Clouds',
		],
		'time' => [
			'title' => 'Time',
			'zone' => 'Baku/Azerbaijan',
		],
		'loading' => 'Fethching Data',
	],

	'sidebar' => [
		'dashboard' => 'Dashboard',
		'main' => 'Main',
		'company' => [
			'title' => 'Companies',
			'subheading' => 'Company Components:',
			'index' => 'Companies List',
			'create' => 'Create Company',
		],
		'employee' => [
			'title' => 'Employees',
			'subheading' => 'Employee Components:',
			'index' => 'Employees List',
			'create' => 'Create Employee',
		],
	],

	'table' => [
		'company' => [
			'logo' => 'Logo',
			'name' => 'Name',
			'email' => 'Email',
			'website' => 'Website',
		],
		'employee' => [
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'company' => 'Company',
			'email' => 'Email',
			'phone' => 'Phone',
		],
		'view' => 'View',
		'edit' => 'Edit',
		'delete' => 'Delete',
		'loading' => 'Loading',
		'pagination' => [
			'prev' => 'Previous',
			'next' => 'Next',
			'page' => 'Page',
		],
	],

	'resources' => [
		'company' => [
			'index' => 'Companies',
			'create' => 'Create New Company',
			'edit_title' => 'Edit Company: :name',
			'delete_title' => 'Delete Company: :name',
			'show_title' => 'Company: :name',
			'name' => 'Company Name',
			'email' => 'Company Email',
			'logo' => 'Company Logo',
			'website' => 'Company Website (URL)',
			'create_action' => 'Create Company',
			'edit_action' => 'Update Company Information',
			'success_create' => 'New Company created successfully.',
			'success_edit' => 'Company information has been updated successfully.',
			'success_action' => 'Browse companies',
		],
		'employee' => [
			'index' => 'Employees',
			'create' => 'Create New Employee',
			'edit_title' => 'Edit Employee: :name',
			'delete_title' => 'Delete Employee: :name',
			'show_title' => 'Employee: :name',
			'company_show_title' => 'Works for :name Company',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'company' => 'Company',
			'email' => 'Employee\'s Email',
			'phone' => 'Employee\'s Phone',
			'create_action' => 'Create Employee',
			'edit_action' => 'Update Employee Information',
			'success_create' => 'New Employee created successfully.',
			'success_edit' => 'Employee information has been updated successfully.',
			'success_action' => 'Browse employees',
		],
	],

	'created_at' => 'Created At',
];