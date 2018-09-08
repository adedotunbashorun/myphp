<?php
function populateSelect($table,$name,$class="textfield", $first="- Select -", $selected="")
{
	global $con;
	$sql = "SELECT * FROM $table";
	$query = mysqli_query($con, $sql);
	$box = "<select name = '".$name. "' onchange='this.className=this.options[this.selectedIndex].className'
    class='".$class."'>";
	/*if(isset($_POST["$name"]))
	{
		$selected = $_POST["$name"];
	}else{
		$selected = "";
	}*/
	$box .= "<option value='0' class='".$class."'>$first</option>";
	while (($row = mysqli_fetch_row($query)))
	{
		$box .= "<option class='".$class."' value = '{$row[0]}'";
		if ($selected == $row[0])
			$box .= " selected = 'selected'";
		$box .= ">{$row[1]}</option>";
	}
	$box .= "</select><br />";
	return $box;
}
function populateSelectAr($array,$name,$class="textfield", $first="- Select -", $selected="",$br="")
{
	
	$box = "<select name = '".$name. "' class='".$class."'>";
	/*if(isset($_POST["$name"]))
	{
		$selected = $_POST["$name"];
	}else{
		$selected = "";
	}*/
	$box .= "<option value='0'>$first</option>";
	foreach ($array as $key => $field)
	{
		$box .= "<option value = '{$key}'";
		if ($selected == $key)
			$box .= " selected = 'selected'";
		$box .= ">{$field}</option>";
	}
	$box .= "</select>$br";
	return $box;
}
function populateSelectempf($table,$field1,$field2,$name,$class="textfield", $seconclass="", $first="- Select -", $selected="")
{
	global $con;
	$sql = "SELECT * FROM $table";
	$query = mysqli_query($con, $sql);
	$box = "<select onchange='if (this.value) window.location.href=this.value' name ='".$name. "' onchange='this.className=this.options[this.selectedIndex].className'
    class='$class $seconclass'>";
	/*if(isset($_POST["$name"]))
	{
		$selected = $_POST["$name"];
	}else{
		$selected = "";
	}*/
	$box .= "<option class='seldefault $seconclass' value=''>$first</option>";
	while (($row = mysqli_fetch_row($query)))
	{
		$box .= "<option class='seloption $seconclass' value = 'http://localhost/hostel/reg.php?id={$row[0]}'";
		if ($selected == $row[0])
			$box .= " selected = 'selected'";
		$box .= ">{$row[1]}</option>";
	}
	$box .= "</select><!--br /-->";
	return $box;
}
function populateSelectemp($table,$name,$class="textfield", $seconclass="", $first="- Select -", $selected="")
{
	global $con;
	$sql = "SELECT * FROM $table";
	$query = mysqli_query($con, $sql);
	$box = "<select onchange='if (this.value) window.location.href=this.value' name ='".$name. "' onchange='this.className=this.options[this.selectedIndex].className'
    class='$class $seconclass'>";
	/*if(isset($_POST["$name"]))
	{
		$selected = $_POST["$name"];
	}else{
		$selected = "";
	}*/
	$box .= "<option class='seldefault $seconclass' value=''>$first</option>";
	while (($row = mysqli_fetch_row($query)))
	{
		$box .= "<option class='seloption $seconclass' value = 'http://localhost/offcampus/reserve.php?id={$row[0]}'";
		if ($selected == "http://localhost/offcampus/reserve.php?id={$row[0]}")
			$box .= " selected = 'selected'";
		$box .= ">{$row[1]}</option>";
	}
	$box .= "</select><!--br /-->";
	return $box;
}
function originalpopulateSelectemp($table,$name,$class="textfield", $seconclass="", $first="- Select -", $selected="")
{
	global $con;
	$sql = "SELECT * FROM $table";
	$query = mysqli_query($con, $sql);
	$box = "<select onchange='if (this.value) window.location.href=this.value' name ='".$name. "' onchange='this.className=this.options[this.selectedIndex].className'
    class='$class $seconclass'>";
	/*if(isset($_POST["$name"]))
	{
		$selected = $_POST["$name"];
	}else{
		$selected = "";
	}*/
	$box .= "<option class='seldefault $seconclass' value=''>$first</option>";
	while (($row = mysqli_fetch_row($query)))
	{
		$box .= "<option class='seloption $seconclass' value = 'http://localhost/siwes/logbook.php?id={$row[0]}'";
		if ($selected == $row[0])
			$box .= " selected = 'selected'";
		$box .= ">{$row[1]}</option>";
	}
	$box .= "</select><!--br /-->";
	return $box;
}
function populateSelectF($table,$name,$class="textfield", $first="- Select -", $selected="")
{
	global $con;
	$sql = "SELECT * FROM $table";
	$query = mysqli_query($con, $sql);
	$box = "<select name = '".$name. "' onchange='this.className=this.options[this.selectedIndex].className' class='".$class."'>";
	$box .= "<option  class='".$class."' value = ''>$first</option>";
	while (($row = mysqli_fetch_row($query)))
	{
		$box .= "<option class='options' value = '{$row[0]}'";
		if ($selected == $row[0])
			$box .= " selected = 'selected'";
		$box .= ">{$row[1]}</option>";
	}
	$box .= "</select><br />";
	return $box;
}

function createFormOption($table,$name="radio",$option="radio", $class='radio', $selected)
{
	global $con;
	$sql = "SELECT * FROM $table";
	$query = mysqli_query($con, $sql);
	$box = "";
	/*if(isset($_POST["$name"]))
	{
		$selected = $_POST["$name"];
	}else{
		$selected = array();
	}*/
	
	
	while (($row = mysqli_fetch_row($query)))
	{
		/***** Checked ***/
		$id = $row[0];

		if(in_array($id, $selected))
		{
			   $check="checked='checked'";
		}else{
		   $check = '';
		}
		/***** End of Checked ***/
		$box .= "<label class='optionizer'><input class='$class' type='$option' name='".$name."[]' value='".$row[0]."' " . $check;
		$box .= " /> ".$row[1]."</label>";
		
	}
	
	return $box;
}

?>