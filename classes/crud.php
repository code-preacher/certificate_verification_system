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
			return "No found records";
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
			return false;
		}
	}

	public function displayAllWithOrderAndId2($table,$orderValue,$orderType,$id)
	{
		$query = "SELECT * FROM {$table} WHERE faculty_id={$id} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
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
			return "No found records";
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


		public function displaySchoolName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM school where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	public function displayFacultyName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM faculty where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	public function displayFaculty($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM faculty where id='$id' ";
		$result = $this->con->query($query);
		$data=array();
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$row[]=$data;
			return $row;
		}else{
			return "No found records";
		}
	}

	public function displayDepartmentName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM department where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	public function displayCourseName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM course where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	public function displayInstitutionImage($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT img FROM school where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['img'];
		}else{
			return "No found records";
		}
	}

	public function displayStudentName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM student where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	
	public function displayStudentName2($value)
	{
		$matno = $this->cleanse($value);
		$query = "SELECT name FROM student where matno='$matno' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
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


	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}


	public function displayOneStudent($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where matno='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
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



	public function verifyResult($id)
	{

		$id = strtoupper($this->cleanse($id));
		$query="SELECT matno from result where matno='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			header("Location:success.php?id=$id");
		}else{
			header("Location:verify.php?msg=Result not found or Invalid matric number try again!!! &type=error");
		}
	}

//Counting Specific
	
	
// Inserting

		public function insertInstitution($post,$files)
	{
		$name=$this->cleanse(strtoupper($_POST['name']));

		$img1=$_FILES['img1']['name'];
		$temp=$_FILES['img1']['tmp_name'];
		$folder="images/" ;  
		$pos1=strpos($img1,'.');
		$len1=strlen($img1);
		$ext1=substr($img1, $pos1, $len1); 
		$imgv1=str_replace($img1,'.',uniqid().$ext1 ); 
		$imgf1='institution-'.$imgv1;

		move_uploaded_file($temp,$folder.$imgf1)  ;
		$query="INSERT into school(name,img) values('$name','$imgf1')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-school.php?msg=School was created successfully&type=success");
		}else{
			header("Location:view-school.php?msg=Error adding data try again!&type=error");
		}
	}
	

	public function insertFaculty($post)
	{
		$name=$this->cleanse(strtoupper($_POST['name']));
		$query="INSERT into faculty(name) values('$name')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-fal.php?msg=Faculty  was created successfully&type=success");
		}else{
			header("Location:view-fal.php?msg=Error adding data try again!&type=error");
		}
	}

	public function insertDepartment($post)
	{
		$faculty_id=$this->cleanse($_POST['faculty_id']);
		$department=$this->cleanse(strtoupper($_POST['department']));
		$query="INSERT into department(faculty_id,name) values('$faculty_id','$department')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-dep.php?msg=Department  was created successfully&type=success");
		}else{
			header("Location:view-dep.php?msg=Error adding data try again!&type=error");
		}
	}

	public function insertResult($post)
	{
		$matno=$this->cleanse($_POST['matno']);
		$grade=$this->cleanse($_POST['grade']);
		$query="INSERT into result(matno,grade) values('$matno','$grade')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-result.php?msg=Result was created successfully&type=success");
		}else{
			header("Location:view-result.php?msg=Error adding data try again!&type=error");
		}
	}

	public function insertCourse($post)
	{
		$faculty_id=$this->cleanse($_POST['faculty_id']);
		$department_id=$this->cleanse(strtoupper($_POST['department_id']));
		$name=$this->cleanse(strtoupper($_POST['name']));
		$query="INSERT into course(faculty_id,department_id,name) values('$faculty_id','$department_id','$name')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-course.php?msg=Course  was created successfully&type=success");
		}else{
			header("Location:view-course.php?msg=Error adding data try again!&type=error");
		}
	}


	public function insertStudent($post)
	{
		$name=$this->cleanse($_POST['name']);
		$matno=$this->cleanse(strtoupper($_POST['matno']));
		$password=$this->cleanse($_POST['password']);
		$school_id=$this->cleanse($_POST['school_id']);
		$faculty_id=$this->cleanse($_POST['faculty_id']);
		$department_id=$this->cleanse($_POST['department_id']);
		$course_id=$this->cleanse($_POST['course_id']);
		$query="INSERT into student(name,matno,password,school_id,faculty_id,department_id,course_id) values('$name','$matno','$password','$school_id','$faculty_id','$department_id','$course_id')";
		$query2="INSERT into login(name,email,password,role) values('$name','$matno','$password',3)";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-student.php?msg=Student was created successfully&type=success");
			$this->con->query($query2);
		}else{
			header("Location:view-student.php?msg=Error adding data try again!&type=error");
		}
	}


//Inserting with Files

	public function insertDataWithFiles($post,$files)
	{
		$value1 = $this->cleanse($_POST['value1']);
		$value2 = $this->cleanse($_POST['value2']);

		$img1=$_FILES['img1']['name'];
		$temp=$_FILES['img1']['tmp_name'];
		$folder="images/" ;  
		$pos1=strpos($img1,'.');
		$len1=strlen($img1);
		$ext1=substr($img1, $pos1, $len1); 
		$imgv1=str_replace($img1,'.',uniqid().$ext1 ); 
		$imgf1='mymodel-'.$imgv1;

		move_uploaded_file($temp,$folder.$imgf1)  ;

		$query="INSERT INTO table(col1,col2) VALUES('$value1','$value2')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:url?msg=Data was successfully inserted&type=success");
		}else{
			header("Location:url?msg=Error adding data try again!&type=error");
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


	
	public function updateAdmin($post)
	{
		$name=$this->cleanse($_POST['name']);
		$email=$this->cleanse($_POST['email']);
		$password=$this->cleanse($_POST['password']);
		$query="UPDATE login SET name='$name',email='$email',password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}


	public function updateStudent($post)
	{
		$email=$this->cleanse($_POST['email']);
		$password=$this->cleanse($_POST['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$query2="UPDATE student SET password='$password' WHERE matno='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
			$this->con->query($query2);
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
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


}

?>

