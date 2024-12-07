<?php
include "connection.php";  //include the connection.php for adding the database connection

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <style>
.pagination{
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;

}ul li{
    list-style-type: none;
    display: block;
    background-color: white;
    padding: 12px;
    margin: 12px 20px;
    cursor: pointer;
}

.active{
    color: yellow;
    background-color: white;
}

ul li a{
  font-size: 18px; 
}
    </style>
</head>
<body>
    <h1>Read Data</h1>
<div class="box">
    <a href="insert.php">Insert Data</a>
    <br><br>
</div>

<?php
// this below code for pagination dont use this code
// $limit=2;
// $page=$_GET['page'];
// $offset=($page-1)*$limit;

// if(isset($_GET['page']))
// {
//     $page=$_GET['page'];
// }else{
//     $page=1;
// }


// $query="SELECT *FROM curd_table ORDER BY id DESC LIMIT {$offset},{$limit}";

// pagination end
$query="SELECT *FROM curd_table";

$execute_query=mysqli_query($conn,$query)or die('Query failed');
if(mysqli_num_rows($execute_query)>0)
{



?>
    <table border="1" cellpadding="10px" cellspacing='0px'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
<?php
while( $row=mysqli_fetch_assoc($execute_query))
{


?>
        <tbody>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['age'];?></td>
                
                <td>
                    <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                    
                </td>
            </tr>
        </tbody>
        <?php }?>  
        <!-- //while statment end here -->
    </table>


    <?php
} //if statment end here


// pagination work start

// $sql1="select *from curd_table";
// $result1=mysqli_query($conn,$sql1)or die("query failed");

// if(mysqli_num_rows($result1)>0)
// {
//     $total_records=mysqli_num_rows($result1);
    
//     $total_pages=ceil($total_records/$limit);
//     echo '<ul class="pagination admin-pagination">';
//     for($i=1;$i<=$total_pages;$i++)

//     {

//         if($i==$page)
//         {
//             $active="active";
//         }else{
//             $active="";
//         }

// echo '  <li class=" '.$active.'" > <a href="index.php?page='.$i.'">'.$i.'</a> </li>';
//     }

//     echo '</ul>';
// }


// pagination works end here
    ?>







</body>
</html>