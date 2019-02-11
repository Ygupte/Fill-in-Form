<html>
<head>

<link rel="stylesheet" type="text/css" href="city.css">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lobster" rel="stylesheet">
<title>City Form</title>
<script>
function check()

{
var ans = true;
var firstname =document.getElementById('firstname').value;
var lastname =document.getElementById('lastname').value;
var age =document.getElementById('age').value;
var places = document.getElementById('places').value;
if(firstname=="" || firstname==null){
alert("Please enter first name");
ans =  false;
}

if(lastname=="" || lastname==null){
alert("Please enter last name");
ans =  false;
}

if(age=="" || age==null){
alert("Please enter age ");
ans =  false;
}


if(age<=0 || age>=100)
{
alert("Please enter correct age ");
ans =  false;
}

if(isNaN(age))
{
	alert("Please enter correct age ");
	ans =  false;
}

if(places=="" || places==null){
alert("Please enter address ");
ans =  false;
}

return ans;
}

</script>
</head>
<body>

<form method = "post" target = _top onsubmit="return check()" action = "conn.php">
<!--<form action="https://www.barcelonayellow.com/bcn-photos/204-top-10-attractions-barcelona" target="_blank">-->

<fieldset>
<legend class = 'lobsterFormat'>Details</legend>
<div class = "userDetails">
First name:
<input type = "text" id = 'firstname' name = 'firstname'><br>
<br>

Last name:
<input type = "text" id = "lastname" name = "lastname"><br>
<br>

Age:      
<input type = "text" id = 'age' name = 'age'><br>
<br>
Address:      
<textarea rows = '5' cols = '40'id = 'places' name = 'places'></textarea><br>
</br>
</fieldset>
<br>
</div>

<div>
<div class = 'lobsterFormat'>Have you visted Barcelona before?<br></div>
<div class = 'ip'>
<input type = 'radio' name = 'visited' > Yes
<input type = 'radio' name = 'visited' > No<br>  
<br>
</div>


<div class = 'lobsterFormat'>Select the place where you want to stay<br></div>
<div class="ip">
<select name = "places_visited">
<option>Sagrada Familia</option>
<option>Park Guell</option>
<option>Casa mila </option>
<option>Casa Batllo</option>
</select>
<br><br>
</div>
<div class = 'lobsterFormat'>List the places you would like to visit in Barcelona:<br></div>
<input type = 'radio'  > Sagrada Familia<br>
<input type = 'radio'  > Park Guell<br>
<input type = 'radio'  > Casa mila<br>
<input type = 'radio'  > Casa Batllo<br>
<br>

</div>
<div class='lobsterFormat'>
<input type="submit" name="Submit" value='submit'>


</div>
</form>
</body>
</html>