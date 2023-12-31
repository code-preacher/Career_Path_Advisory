<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllSpecific($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


		public function displayAllSpecificWithOrder($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}

	

	public function displayOneSpecific($table,$item,$value)
	{
		$item = $this->cleanse($item);
		$value = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where $item='$value' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



	
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}




	//Display Specific
	public function displayName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}



	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}

		public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}


	

	public function state_one($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT id,name FROM state where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	

//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM {$table}");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}



		public function countAllWithTwo($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM {$table} where $item='$value' ");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}


	
// Inserting


	
	public function addUser($value)
	{

		$name = $this->cleanse($post['name']);
		$email = $this->cleanse($post['email']);
		$phone = $this->cleanse($post['phone']);
		$address = $this->cleanse($post['address']);
		$password = $this->cleanse($post['password']);
		$gender = $this->cleanse($post['gender']);

		$query="INSERT INTO user(name,email,phone,address,password,gender) VALUES('$name','$email','$phone','$address','$password','$gender')";
		$query2="INSERT INTO login(name,email,password,role) VALUES('$name','$email','$password','3')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:login.php?msg=Account was created successfully, Please login &type=success");
			$this->con->query($query2);
		}else{
			header("Location:login.php?msg=Error adding data try again!&type=error");
		}
	}


		public function addCareer($value)
	{

		$f1 = $this->cleanse($post['f1']);
		$f2 = $this->cleanse($post['f2']);
		$f3 = $this->cleanse($post['f3']);
		$f4 = $this->cleanse($post['f4']);
		$f5 = $this->cleanse($post['f5']);
		$f6 = $this->cleanse($post['f6']);
		$f7 = $this->cleanse($post['f7']);
		$f8 = $this->cleanse($post['f8']);
		$f9 = $this->cleanse($post['f9']);
		$f10 = $this->cleanse($post['f10']);
		$f11 = $this->cleanse($post['f11']);
		$f12 = $this->cleanse($post['f12']);
		$f13 = $this->cleanse($post['f13']);
		$f14 = $this->cleanse($post['f14']);
		$f15 = $this->cleanse($post['f15']);
		$result = strtoupper($this->cleanse($post['result']));
		$advice = strtoupper($this->cleanse($post['advice']));

		$query="INSERT INTO career(f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,f13,f14,f15,result,advice) VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$f13','$f14','$f15','$result','$advice')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-career.php?msg=Career Question was created successfully&type=success");
		}else{
			header("Location:view-career.php?msg=Error adding data try again!&type=error");
		}
	}



	public function addReport($email,$career_id)
	{
		
		$career_id = $this->cleanse($career_id);
		$user= $this->displayOne('user',$this->cleanse($email));
		$user_id =$user['id'];

		$query="INSERT INTO report(user_id,career_id) VALUES ('$user_id','$career_id')";
		$sql = $this->con->query($query);
	}


	public function addComplain($post)
	{
		
		$name = $this->cleanse($post['name']);
		$chat = $this->cleanse($post['chat']);

		$query="INSERT INTO complain(name,chat) VALUES ('$name','$chat')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:add-c.php?msg=Message was sent&type=success");
		}else{
			header("Location:add-c.php?msg=Error sending data!&type=error");
		}
	}




		public function compareCareer($post)
	{
		$f1 = $this->cleanse($post['f1']);
		$f2 = $this->cleanse($post['f2']);
		$f3 = $this->cleanse($post['f3']);
		$f4 = $this->cleanse($post['f4']);
		$f5 = $this->cleanse($post['f5']);
		$f6 = $this->cleanse($post['f6']);
		$f7 = $this->cleanse($post['f7']);
		$f8 = $this->cleanse($post['f8']);
		$f9 = $this->cleanse($post['f9']);
		$f10 = $this->cleanse($post['f10']);
		$f11 = $this->cleanse($post['f11']);
		$f12 = $this->cleanse($post['f12']);
		$f13 = $this->cleanse($post['f13']);
		$f14 = $this->cleanse($post['f14']);
		$f15 = $this->cleanse($post['f15']);
		$query = "SELECT * from career where f1='$f1' and f2='$f2' and f3='$f3' and f4='$f4' and f5='$f5' and f6='$f6' and f7='$f7' and f8='$f8' and f9='$f9' and f10='$f10' and f11='$f11' and f12='$f12' and f13='$f13' and f14='$f14' and f15='$f15'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET email='$email',password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}




	public function displayProfile($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}



//Empty Table
	public function emptyTable($table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "TRUNCATE {$table}";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM {$table} WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}
	

	public function deleteTwoTable($email,$table,$table2,$url) 
	{ 
		$email = $this->cleanse($email);
		$query = "DELETE FROM {$table} WHERE email= '$email'";
		$query2 = "DELETE FROM {$table2} WHERE email= '$email'";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Data&type=error");
		}
	}


//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}




	

	public function greeting()
	{
      //Here we define out main variables 
		$welcome_string="Welcome!"; 
		$numeric_date=date("G"); 

 //Start conditionals based on military time 
		if($numeric_date>=0&&$numeric_date<=11) 
			$welcome_string="Good Morning!,"; 
		else if($numeric_date>=12&&$numeric_date<=17) 
			$welcome_string="Good Afternoon!,"; 
		else if($numeric_date>=18&&$numeric_date<=23) 
			$welcome_string="Good Evening!,"; 

		return $welcome_string;

	}



}

?>

