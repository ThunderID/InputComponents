# Table Component

## Struktur

	'component_id' => '',
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

1. 'component_id' adalah id dari component ini. parameter ini wajib untuk di-isikan.
2. header berisi nama field data yang akan ditampilkan
3. data berisi kumpulan data yang akan ditampilkan
4. component_style berisi opsi yang dapat dikonfigurasi untuk tampilan UI
5. bila tidak ada data untuk nilai variabel, gunakan null (kecuali jika required, harus tetap di-isikan)
6. set 'component_debug'ke true untuk testing dan developing phase. mode ini akan melakukan validasi parameter dan menampilkan pesan error. Bila sudah dalam statu stable, matikan fitur ini untuk mematikan fitur pengecekan

## Penggunaan

	 @include('components.table.component', [parameter array])

## Contoh Penggunaan:

	 @include('components.table.component', [
	 	'component_id' => 'tabel_transaksi'
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

Keterangan :

Format EXPECTED DATA adalah sebagai berikut :

		[
			INDEX =>  [
				NAMA FIELD => value,
				NAMA FIELD => value,
				dst....
			]
		]

## Binding
Ada 2 macam binding yang dapat dilakukan

1. Component binding
Object yang di-binding adalah object component dalam wujud tabel.  Binding dapat dilakukan dengan menggunakan id dari object, yakni nilai dari parameter 'component_id'

Contoh :

	'component_id' => 'tabel_transaksi'

Gunakan 'tabel_transaksi' untuk penggunaan binding untuk keperluan set css maupun js.

2. Data list binding
Element <tr></tr> dalam row tabel dapat di binding dengan menggunakan id dari element <tr> tersebut.

Contoh:

	<tr id="tabel_transaksi_(ID DATA)" >
		<td>
			....
		</td>
		....
	</tr>
	
Keterangan :	
Row tabel dari data dapat dibinding dengan menggunakan selector tabel_transaksi_(ID DATA).

tabel_transaksi => adalah id dari component

ID Data => adalah id dari data yang menempati row ini
