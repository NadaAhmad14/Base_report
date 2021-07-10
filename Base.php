<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
</head>
<body>

<?php

$connection = new mysqli("localhost" , "root" ,"", "connection" );
        
if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database connection successfully . ";

//close

    if(isset($_POST['backward'])) {
        $backward = $_POST['backward'];
        $query = "INSERT INTO directiones VALUES('$backward')";
        $query_run = mysqli_query($connection, $query);
            if($query_run) {
                echo 'You Are Moving Backward';
            } else {
                echo 'Failed Inserting Value';
            }
    } else if(isset($_POST['left'])) {
        $left = $_POST['left'];
        $query = "INSERT INTO directiones VALUES('$left')";
        $query_run = mysqli_query($connection, $query);
            if($query_run) {
                echo 'You Are Moving To Left';
            } else {
                echo 'Failed Inserting Value';
            }
    } else if(isset($_POST['stop'])) {
        $stop = $_POST["stop"];
        $query = "INSERT INTO directiones VALUES('$stop')";
        $query_run = mysqli_query($connection, $query);
            if($query_run) {
                echo 'You Are Stopped Now';
            } 
			else {
                echo 'Failed Inserting Value';
            }
    } else if(isset($_POST['right'])) {
        $right = $_POST["right"];
        $query = "INSERT INTO directiones VALUES('$right')";
        $query_run = mysqli_query($connection, $query);
            if($query_run) 
			{
                echo 'You Are Moving To Right';
            } 
			else {
                echo 'Failed Inserting Value';
            }
    } else if(isset($_POST['forward'])) {
        $forward = $_POST['forward'];
        $query = "INSERT INTO directiones VALUES('$forward')";
        $query_run = mysqli_query($connection, $query);
            if($query_run) {
                $id = $connection->insert_id;
                echo 'You Are Moving Forward' ;
            } 
			else
			{
                echo 'Failed Inserting Value';
            }
    }
    

?>
</body>
</html
