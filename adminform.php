<?php

include("connections.php");

 
    $id = "";
	$firstname = "";
	$middlename = "";
	$surname = "";
	$surffix ="";
	$birthdate ="";
	$gender ="";
	$contactnumber = "";
	$course = "";
	$adress = "";
	$lastschool = "";
	$Gfirstname = "";
	$Gsurname = "";
	$Gnumber = "";

    function getPosts(){
    	$posts = array();
    	$posts[0]=$_POST['id'];
    	$posts[1]=$_POST['firstname'];
    	$posts[2]=$_POST['middlename'];
    	$posts[3]=$_POST['surname'];
    	$posts[4]=$_POST['surffix'];
    	$posts[5]=$_POST['birthdate'];
    	$posts[6]=$_POST['gender'];
    	$posts[7]=$_POST['contactnumber'];
    	$posts[8]=$_POST['course'];
    	$posts[9]=$_POST['adress'];
    	$posts[10]=$_POST['lastschool'];
    	$posts[11]=$_POST['Gfirstname'];
    	$posts[12]=$_POST['Gsurname'];
    	return $posts;
    }

    /*---------------------------------------------------*/
                     /*SEARCH BUTTON*/
    /*---------------------------------------------------*/
if(isset($_POST['search'])){

	$data = getPosts();

	$searchQuery = "SELECT * FROM tbl_enrollment WHERE id  = $data[0]";

	$search_result = mysqli_query($connections, $searchQuery);

	if($search_result){

		if(mysqli_num_rows($search_result)){

			while ( $rows = mysqli_fetch_array($search_result)) {
				$id = $row['id'];
				$firstname = $row['firstname'];
				$middlename = $row['middlename'];
				$surname = $row['surname'];
				$surffix = $row['surffix'];
				$birthdate = $row['birthdate'];
				$gender = $row['gender'];
				$contactnumber = $row['contactnumber'];
				$course = $row['course'];
				$adress = $row['adress'];
				$lastschool = $row['lastschool'];
				$Gfirstname = $row['Gfirstname'];
				$Gsurname = $row['Gsurname'];
				$Gnumber = $row['Gnumber'];
		
			}
		}else{
			echo "No data for this id";
		}
	}else{
		echo "rerror";
	}

}
    /*---------------------------------------------------*/
                        /*ADD BUTTON*/
    /*---------------------------------------------------*/
if(isset($_POST['add']))
{


if($_SERVER["REQUEST_METHOD"]=="POST"){

  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $surname =$_POST['surname'];
  $surffix =$_POST['surffix'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $contactnumber = $_POST['contactnumber'];
  $course = $_POST['course'];
  $adress = $_POST['adress'];
  $lastschool = $_POST['lastschool'];
  $Gfirstname = $_POST['Gfirstname'];
  $Gsurname = $_POST['Gsurname'];
  $Gnumber = $_POST['Gnumber'];
 }

 if($firstname && $middlename && $surname && $surffix && $birthdate && $gender && $contactnumber && $course && $adress && $lastschool && $Gfirstname && $Gsurname && $Gnumber){
$query =mysqli_query($connections, "INSERT INTO tbl_enrollment(firstname,middlename,surname,surffix,birthdate,gender,contactnumber,course,adress,lastschool,Gfirstname,Gsurname,Gnumber) VALUES ('$firstname','$middlename','$surname','$surffix','$birthdate','$gender','$contactnumber','$course','$adress','$lastschool','$Gfirstname','$Gsurname','$Gnumber')");
}

}

    /*---------------------------------------------------*/
                     /*DELETE BUTTON*/
    /*---------------------------------------------------*/
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM tbl_enrollment WHERE id = $data[0]";
    try{
        $delete_Result = mysqli_query($connections, $delete_Query);
        
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}
    /*---------------------------------------------------*/
                     /*UPDATE BUTTON*/
    /*---------------------------------------------------*/
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE tbl_enrollment SET $data[1],'$data[2]','$data[3])', '$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]) WHERE id = $data[0]";
    try{
        $update_Result = mysqli_query($connections, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connections) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}




?>