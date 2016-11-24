# InputComponents
Web component using RIOT JS 

##contracts For Backend
####Inputs

1. input-string
desc : input with string type 
data : string value
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]

2. input-datetime
desc : input for datetime
data : date(YMD HIS) in specified format (GMT)
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]
	type : date, time, datetime
	GMT : integer number(-7,0,7), assign with null will dissable GMT conversion.

3. input-dateTimeRange
desc : input for date time using date time range
data : date(HIS) in specified format (GMT)
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]
	Range : ['start' => date time start, 'end' => date time end]	
	type : date, time, datetime
	GMT : integer number(-7,0,7), assign with null will dissable GMT conversion.

4. input-email
desc : input with email type 
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]

5. input-password
desc : input with password type 
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]

6. input-number
desc : input with number type 
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]

7. input-text
desc : input with textarea 
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]	

8. input-multiSelect
desc : input with multiple value
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]
	list : data for select
	style : check or dropdown	

9. input-singleSelect
desc : input with only single account can be selected
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]
	list : data for select	
	style : radio or dropdown

10. input-phone
desc : input with phone format
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]t [boolean value]	
	required : input required or no
	prefix : prefix (ie +62)

11. input-money
desc : input with idr money format
Format UI : _
Format backend : _
Param : 
	name : input name [string value]
	value : input value [string value]t [boolean value]	
	validation : array of validation. ie : ['required' => true, 'min' => 1, 'max' => 10]
	currency : currency format


Contoh penggunaan input : 
{input-string => ['name' => 'nama', 'value' => 'budi', 'validation' => ['required' => true, 'min' => 2, 'max' => 10]]}
