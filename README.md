# Thunder Component
### v 0.1
Thunder web component using laravel blade. Dynamic API driven ui component. 

###How to use
Download this package. Copy components folder to your view directory. Done! You can use this following code. 

	@inlude(components.thunderComponent, [Parameter Array])

Don't forget to include js file and css inside Assets folder into your project.

##For Backend

HTML component will be injected via element. 

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

	<div class="form-group">
		<label for="input_1">input_1</label>
		<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_1" name="input_1" value="" placeholder="">
	</div>
	<div class="form-group">
		<label for="input_2">input_2</label>
		<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_2" name="input_2" value="" placeholder="">
	</div>		
	
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

	<div class="form-group">
		<label for="input_2">input_2</label>
		<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_1" name="input_2" value="" placeholder="">
	</div>
	<div class="form-group">
		<label for="input_1">input_1</label>
		<input type="text" class="form-control thunder_input_string" id="thunder_input_string_input_2" name="input_1" value="" placeholder="">
	</div>		

Element will be rendered based on element index (watch the element id and you will notice the difference). Use your wise to order your element index.

###Component 
Element must be use with component as wrapper. Component is used to group elements. It can also store component information. Component rendering order will follow it's index.

Example:

	  0 => [
	    "info" => [
	      "id" => "58422691e32d30000735f491"
	      "pagination" => [] 
	    ]
	    "elements" => [
	      	0 => [
			"element-class" => "input"
			"element-type" => "string"
			"element-properties" => []
	     	 ]
	     	 1 => [
			"element-class" => "input"
			"element-type" => "string"
			"element-properties" => []
	     	 ]
	    ]
	  ]
	  1 => array:2 [
	    "info" => []
	    "elements" => []
	  ]

In this example we will have 2 component. Which inside of component will have component information (id, pagination data, etc) and lists of elements. As result, component will be rendered as this following order: component with index 0 rendered first and the component with index 1 as second 

###Contracts 
[Inputs](https://github.com/ThunderID/ThunderComponents/blob/master/Contracts/Backend/Inputs.mdown)

[Tables](https://github.com/ThunderID/ThunderComponents/blob/master/Contracts/Backend/tables.mdown)

##For UI
Include thunderComponent to your page and pass your component data from API. Also, you can override your styling settings / behavior using styles parameter. See Styles documentation for available styling/behavior options.

Example

	@include('components.thunderComponent', [
	    'components' => Data Source (from API), 
	    'styles'     => [
				Element name => [ Array of styling Element parameter (See element documentation below) ]                                 
			    ]
	])


###Contracts (Style) 
[Inputs](https://github.com/ThunderID/ThunderComponents/blob/master/Contracts/UI/inputs.mdown)

[Tables](https://github.com/ThunderID/ThunderComponents/blob/master/Contracts/UI/tables.mdown)
