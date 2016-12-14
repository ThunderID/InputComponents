# Table Component

## Struktur

	'component_data' => [
		'header' => [],
		'data' => []
	],
	'component_style' => [
		'class' => list of component class (class for css, js, or binding) in string. (ie: 'form-control text-red' ), 
		'noDataMsg' => string of message if no data can be displayed (ie: no data available),
		'paging'    =>  [
			'total_data' => number of total data from database. This is required ,
			'take'       => number of data taken per page. This is required,
			'class'      => pagging class (class for css, js, or binding) in string. (ie: 'form-control text-red') 
		]
	],
	'component_debug'=> true or false
