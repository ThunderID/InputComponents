# Thunder Component
### v 0.1
Thunder web component using laravel blade

##For Backend

Component will be injected via element. 

###Element 
To build UI element, pass structured array matching to this documentation. This array structure will be valid to all element class.

	'element-class'      => [string] class of element.
	'element-type'       => [string] element type. Check Input Element Contacts bellow for available options
	'element-properties' => [array] set of element properties.

To build multiple elements, all you do is stack up your element. NOTICE: your element will be ordered based on your array index.

 	0 => [
		'element-class'      => 'input',
		'element-type'       => 'string',
		'element-properties' =>  [
					'name'       => 'input_1',
					'value'      => null,
					'validation' => []
				     ]
		],
 	1 => [
		'element-class'      => 'input',
		'element-type'       => 'string',
		'element-properties' =>  [
					'name'       => 'input_2',
					'value'      => null,
					'validation' => []
				     ]
		]
		
The above code will generate this HTML

	<form>
		<div class="form-group">
			<label for="input_1">input_1</label>
			<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_1" name="input_1" value="" placeholder="">
		</div>
		<div class="form-group">
			<label for="input_2">input_2</label>
			<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_2" name="input_2" value="" placeholder="">
		</div>		
	</form>
	
Now, let see if we change the element index.

 	0 => [
		'element-class'      => 'input',
		'element-type'       => 'string',
		'element-properties' =>  [
					'name'       => 'input_2',
					'value'      => null,
					'validation' => []
				     ]
		],
 	1 => [
		'element-class'      => 'input',
		'element-type'       => 'string',
		'element-properties' =>  [
					'name'       => 'input_1',
					'value'      => null,
					'validation' => []
				     ]
		]
		
As expected, The above code will generate to this HTML

	<form>
		<div class="form-group">
			<label for="input_2">input_2</label>
			<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_1" name="input_2" value="" placeholder="">
		</div>
		<div class="form-group">
			<label for="input_1">input_1</label>
			<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_2" name="input_1" value="" placeholder="">
		</div>		
	</form>	

Element will be rendered based on element index (watch the element id and you will notice the difference). Use your wise to order your element index.

###Contracts 
[Inputs](https://github.com/ThunderID/ThunderComponents/blob/master/Contracts/Backend/Inputs.mdown)

##For UI

###Contracts 
[Inputs](https://github.com/ThunderID/ThunderComponents/blob/master/Contracts/UI/inputs.mdown)
