@foreach($components as $component)
	@foreach($component['elements'] as $key => $element)
		@if($element['element-class'] == 'input')
			@include('components.inputs.inputComponent')
		@elseif($element['element-class'] == 'table')
			@include('components.tables.tableComponent')
		@endif
	@endforeach
@endforeach