<?php

include "connection.php";

$query="select *from test";
$result=mysqli_query($conn,$query) or die("query failed");
if(mysqli_num_rows($result)>0)
{
  $output='
  <table border="1" width="100%" cellspacing="0" cellpadding="10px">
<tr>
<th>id</th>
<th>first_name</th>
<th>last_name</th>

</tr>



  ';


  while($row=mysqli_fetch_assoc($result))
  {
    $output .="
    <tr>
<td>
  {$row["id"]}
</td>
<td>
  {$row["f_name"]}
</td>
<td>
  {$row["l_name"]}
</td>
</tr>
    
    ";
  }

  $output .="</table>";
mysqli_close($conn);
echo $output;

}else{
echo "<h1>no record found</h1>";
}
?>