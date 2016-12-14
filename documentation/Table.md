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

Keterangan :

1. header berisi nama field data yang akan ditampilkan
2. data berisi kumpulan data yang akan ditampilkan
3. component_style berisi opsi yang dapat dikonfigurasi untuk tampilan UI
4. bila tidak ada data untuk nilai variabel, gunakan null (kecuali jika required, harus tetap di-isikan)
5. set 'component_debug'ke true untuk testing dan developing phase. mode ini akan melakukan validasi parameter dan menampilkan pesan error. Bila sudah dalam statu stable, matikan fitur ini untuk mematikan fitur pengecekan

## Penggunaan

	 @include('components.table.component', [parameter array])

## Contoh Penggunaan:

	 @include('components.table.component', [
		'component_data' => EXPECTED DATA,
		'component_style'=> [
			'class' => 'table-hover', 
			'noDataMsg' => 'No data',
			'paging'    =>  [
				'total_data' => 1,
				'take'       => 15,
				'class'      => 'page-blue' 
			]
		],
		'component_debug'=> true
	])

KETERANGAN :

Format EXPECTED DATA adalah sebagai berikut :

		[
			INDEX =>  [
				NAMA FIELD => value,
				NAMA FIELD => value,
				dst....
			]
		]
