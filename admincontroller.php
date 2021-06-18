<?php
include 'classadmin.php';

$action = $_GET["action"]; 

$ad = new Admin();

if ($action == "create")
{
    $ad->id = $_GET["id"];
    $ad->tendn = $_GET["tendn"];
    $ad->tendd = $_GET["tendd"];
    $ad->quyen = $_GET["quyen"];
    addadmin($ad);
}
// elseif($action = "delete")
// {
//    $ad->id = $_GET["id"];
//     deleteadmin($ad->id);
// }

elseif($action == "edit")
{
  $ad->id = $_GET["id"];
  $ad->tendn = $_GET["tendn"];
  $ad->tendd = $_GET["tendd"];
  $ad->quyen = $_GET["quyen"];                 
  editadmin($ad);
}
function addadmin($ad)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "themxoasuaadmin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,'utf8');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //2.2 insert data to db
    $sql = "INSERT INTO admin(id,tendn,tendd,quyen) 
    VALUES ('$ad->id','$ad->tendn', '$ad->tendd', '$ad->quyen');";
    // echo $sql;
    // die();
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location: list-member.php");
    
    $conn->close();
  }

function deleteadmin($adid){
    //2.1 connect to db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "themxoasuaadmin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    
    //2.2 insert data to db
    $sql = "DELETE FROM admin where id = $adid";
    header("location: list-member.php");
    //3. Response result back to client
    if ($conn->query($sql) === TRUE) {
      echo "Product with id $adid has been delete from database";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //4. close connection
    
    $conn->close();
}


function editadmin($ad){
  //connect to Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "themxoasuaadmin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($conn,'utf8');
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE admin SET tendn = '$ad->tendn', tendd = '$ad->tendd', 
  quyen = '$ad->quyen', id ='$ad->id' where id = $ad->id";
  // echo $sql;
  // die();
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  header("location: list-member.php");

  $conn->close();
}

 ?>