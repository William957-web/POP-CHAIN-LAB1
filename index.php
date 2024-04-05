<?php
class User{
	public $name;
	private $memo;
	function __construct($name){
		$this->name=$name;
	}
	function __wakeup(){
		$this->memo=new Note($this -> name."say hello", 'test_whale');
	}
	function __get($content){
		return $this->memo;
	}
}
class Note{
	public $content;
	public $whale;
	function __construct($content, $whale){
		$this->content=$content;
		$this->whale=$whale;
	}
	function __toString(){
		record($this->whale, $this->content);
		return 'Record for '.$this->whale.' is : '.$this->content;
	}
	function record($content, $whale){
		//check whether it's a attribute
		$test=$whale->$content;
		if ($test!=NULL){
			echo("It's probably an attribute");
		}
	}
}
class Whale{
	public $name;
	private $note;
	function __construct($name){
		$this->name=$name;
	}
	function take_note($note){
		$this->note=date("Y/m/d H:i:s").$note;
	}
	function __get($attribute){
		system('echo "'.$this->name.'" >> log.txt');
		return $this->$attribute;
	}
	function __toString(){
		return $this->name;
	}
}
if (isset($_POST['pop'])){
	unserialize(base64_decode($_POST['pop']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page with Input and Button</title>
<style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

.container {
  width: 100%;
  background: linear-gradient(to bottom, #ffffff, #f2f2f2);
  padding: 20px 0;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.input-group {
  display: flex;
  justify-content: center;
}

.input-field {
  padding: 12px 200px;
  border: 2px solid #ccc;
  border-radius: 25px 0 0 25px;
  outline: none;
  transition: border-color 0.3s;
  font-size: 20px;
}

.input-field:focus {
  border-color: #4CAF50;
}

.input-btn {
  padding: 12px 30px;
  background-color: #4CAF50;
  border: none;
  border-radius: 0 25px 25px 0;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 16px;
}

.input-btn:hover {
  background-color: #45a049;
}
</style>
</head>
<body>

<div class="container">
<h1>Show 🐋 your best POP CHAIN</h1>
<h3>p.s. have to be base64 encoded</h3>
  <form action="index.php" method="POST" class="input-group">
    <input type="text" class="input-field" placeholder="POP CHAIN" name="input_data">
    <button type="submit" class="input-btn">Submit</button>
  </form>
</div>

</body>
</html>
<?php
highlight_file('index.php');
?>
