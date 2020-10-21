<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		class Fruit{
			public $name;
			function __construct($name){
				$this->name=$name;
			}
			public function set_name($var){
				$this->name=$var;
			}
			public function get_name()
			{
				return $this->name;
			}
		}
		class Straw extends Fruit{
			public function message()
			{
				echo "hi";
			}
		}
		$my_fruit=new Straw("Apple");
		// $my_fruit->set_name("Apple");
		$my_fruit->message();
		echo $my_fruit->get_name();

	?>
</body>
</html>