<?php

 class Registration {
    protected $id;
    protected $complete_name;
    protected $email;
    protected $picture;
    protected $password;

 public function __construct(
    $complete_name,
    $email,
    $password,
    $picture,
 )

{
  $this->complete_name = $complete_name;
  $this->email = $email;
  $this->password =$password;
  $this->picture = $picture;

}
//
public function getcomplete_name()
	{
		return $this->complete_name;
	}
    public function getemail()
	{
		return $this->email;
	}
    public function getpassword()
	{
		return $this->password;
	}
    public function getpicture()
	{
		return $this->picture;
	}

public function save()
{

}
//
public function getAll()
    {

    }

 }

?>