<?php
	// init component
	// dd($data);
?>

<table class="table table-bordered table-hovered">
	<thead>
		<tr>
			@foreach($data['header'] as $header)
				<th>{{ $header }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		@forelse ($data['value'] as $value)
			<tr>
				@foreach($value as $v)
					<td>{{ $v }}</td>
				@endforeach
			</tr>
		@empty
			<tr>
				<td colspan="{{ count($data['header']) }}" style="text-align: center;">
					{{ isset($msg) ? $msg : 'No Data' }}
				</td>
			</tr>
		@endforelse
	</tbody>
</table>