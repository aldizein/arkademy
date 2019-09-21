<?php
function is_password_valid($password__)
{

if(preg_match("/^(?=.*[A-Z])(?=.*\W)(?=.*\d)(?=.*[a-z])[A-Z0-9a-z\S]{10,}$/", $password__)) 
{
  		
return true;
	
} 
else 
{
  		
return false;
	
}

}


function is_username_valid($username__)

{
	
if(preg_match("/^[a-z]{5,9}$/", $username__)) 
{
  		
return true;
	
} 
else 
{
  		
return false;
	
}

}

var_dump(is_username_valid('alzein17'));
var_dump(is_username_valid('username'));
var_dump(is_password_valid('password'));
var_dump(is_password_valid('Profil-550'));




?>