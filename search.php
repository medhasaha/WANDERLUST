<?php
include 'connect.php';
if (isset($_GET['term'])){
    $return_arr = array();
    $searchTerm = $_GET['term'];
     $query = mysqli_query($conn,"SELECT * FROM city_id WHERE city_name LIKE '%".$searchTerm."%' ORDER BY city_name ASC");

     
        while($row=mysqli_fetch_array($query)){
        
            $return_arr[] =  $row['city_name'];
        }
    
    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}
?>