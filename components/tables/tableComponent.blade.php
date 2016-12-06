<?php
	$style = null;
	if(isset($styles[$element['element-properties']['name']])){
		$style = $styles[$element['element-properties']['name']];
	}
?>

@if($element['element-type'] == 'default')
	@include('components.tables.module.table-default', [
		"index" => $key, 
		"data" 	=> $element['element-properties'], 
		"style" => $style])
@endif