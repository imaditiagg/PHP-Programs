<?php
class person
{
 public $name;
public $age;
public function set_name($n)
{
	$this->name=$n;
}

public function set_age($a)
{
	$this->age=$a;
	
}

public function get_name()
{
	return $this->name;
}

public function get_age()
{
	return $this->age;
}

}

?>