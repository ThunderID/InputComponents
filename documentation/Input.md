# Input Component

## Struktur
	[
		'component_id' => '',
		'component_data' => [
			'header' => [],
			'data' => []
		],
		'component_style' => [
			NAME OF ELEMENT => [array styling(based on element contract)]
		],
		'component_debug'=> true or false
	]

Keterangan :

1. 'component_id' adalah id dari component ini. parameter ini wajib untuk di-isikan.
2. header berisi nama field data yang akan ditampilkan
3. data berisi kumpulan data yang akan ditampilkan
4. component_style berisi opsi yang dapat dikonfigurasi untuk tampilan UI (baca dokumentasi [element]())
5. bila tidak ada data untuk nilai variabel, gunakan null (kecuali jika required, harus tetap di-isikan)
6. set 'component_debug'ke true untuk testing dan developing phase. mode ini akan melakukan validasi parameter dan menampilkan pesan error. Bila sudah dalam statu stable, matikan fitur ini untuk mematikan fitur pengecekan
7. gunakan numbering untuk penomoron otomatis row table, matikan dengan memberikan null value atau tidak perlu mendaftarkan parameter ini pada 'component_style'

## Penggunaan

	 @include('components.input.component', [parameter array])

## Contoh Penggunaan:

	 @include('components.input.component', [
	 	'component_id' => 'input_transaksi'
		'component_data' => [
			'header' => ['nama_element_1','nama_element_2'],
			'data' => EXPECTED DATA,
		'component_style'=> [
			NAME OF ELEMENT => [ ARRAY OF STYLING OPTION ]
		],
		'component_debug'=> true
	])

Keterangan :

Format EXPECTED DATA adalah sebagai berikut :

	[
		NAMA FIELD => [
			'element-class'      => nama element class yang digunakan,
			'element-type'       => nama tipe element yang digunakan',
			'element-properties' =>  [
				'value'      => nilai data,
				'validation' => array validasi
			]
		]
	]
	
Format NAME OF ELEMENT adalah sebagai berikut
	
	[
		NAMA FIELD => [
			OPSI => nilai
		]
	]

*lihat dokumentasi [element]()

#### Contoh

	@include('components.input.component', [
	    'component_id' => 'input_transaksi',
	    'component_data' => $data,
	    'component_style' => [
				    'title' => [
					'label' => 'tulisan baru'
				    ]
				 ],
	    'component_debug'=> true
	])

## Binding
