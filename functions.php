<?php
function validate_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)|| $email=="") 
    {
      return 0;
    } 
    else 
    {
      return 1;
    }
}

function validate_mobile($mobile)
{
    if(preg_match("/[0-9]{10}/",$mobile) || $mobile=="")
    {
        return 1;
    }
    else 
    {
        return 0;
    }
}

function validate_age($age)
{
    if($age<1 || $age=="")
    {
        return 0;
    }
    else 
    {
        return 1;
    }
}

function validate_user($username,$name)
{
    if($username=="" || $name=="")
    {
        return 0;
    }
    else 
    {
        return 1;
    }
}

function validate_password($pass,$con_pass)
{
    if($pass!=$con_pass || $pass=="" || $con_pass=="")
    {
        return 0;
    }
    else 
    {
        return 1;
    }
}

function validate_address($address)
{
    if($address=="")
    {
        return 0;
    }
    else 
    {
        return 1;
    }
}


?>