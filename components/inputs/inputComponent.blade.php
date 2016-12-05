<?php
	$style = null;
	if(isset($styles[$element['element-properties']['name']])){
		$style = $styles[$element['element-properties']['name']];
	}
?>

@if($element['element-type'] == 'string')
	@include('components.inputs.module.input-string', [
		"index" => $key, 
		"data" 	=> $element['element-properties'], 
		"style" => $style])
@elseif($element['element-type'] == 'email')
	@include('components.inputs.module.input-email', [
		"index" => $key, 
		"data" 	=> $element['element-properties'],
		"style" => $style])		
@else
	@include('components.inputs.module.input-string', [
		"index" => $key, 
		"data" 	=> $element['element-properties'], 
		"style" => $style])
@endif
