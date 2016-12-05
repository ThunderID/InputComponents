<?php
	$style = null;
	if(isset($styles[$element['element-properties']['name']])){
		$style = $styles[$element['element-properties']['name']];
	}
?>

@if($element['element-type'] == 'input-string')
	@include('components.inputs.module.input-string', [
		"index" => $key, 
		"data" 	=> $element['element-properties'], 
		"style" => $style])
@elseif($element['element-type'] == 'input-number')
	@include('components.inputs.module.input-string', [
		"index" => $key, 
		"data" 	=> $element['element-properties'],
		"style" => $style])
@elseif($element['element-type'] == 'input-date')
	@include('components.inputs.module.input-string', [
		"index" => $key, 
		"data" 	=> $element['element-properties'], 
		"style" => $style])		
@else
	@include('components.inputs.module.input-string', [
		"index" => $key, 
		"data" 	=> $element['element-properties'], 
		"style" => $style])
@endif
