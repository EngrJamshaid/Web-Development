<?php

class CURD
{
    private $username = "root";
    private $server_name = "localhost";
    private $password = "";
    private $database_name = "user";  //database name user and table name test

    private $conn = false;
    private $mysqli = "";
    private $result = array();


    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->server_name, $this->username, $this->password, $this->database_name);
            $this->conn = true;

            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }

        // echo "connection passeed";
    }


    // insert function start here

    public function insert($table, $parm = array())
    {
        if ($this->table_exist($table)) 
        {
            // echo "<pre>";
            // print_r($parm);
            // echo "<br>";
            $table_colums = implode(', ', array_keys($parm));
            $tbale_values = implode("', '", $parm);
            $sql = "INSERT INTO $table($table_colums) VALUES('$tbale_values')";
            if ($this->mysqli->query($sql)) 
            {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else 
            {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }else{
            return false;
        }
    }


    // insert function end here

    // update function start here

public function update($table,$parm=array(),$where=null)
{
if($this->table_exist($table))
{
// echo "<pre>";
// print_r($parm);
// $args=array();
// echo "<br>";
foreach($parm as $key=>$value)
{
    $args[]="$key ='$value'";
}

$sql="update $table set ". implode(", ",$args);
if($where!=null)
{
    $sql .= " where $where";
}
// echo $sql;
if($this->mysqli->query($sql))
{
    array_push($this->result, $this->mysqli->affected_rows);
    return true;  
}else{
    array_push($this->result, $this->mysqli->error);
    
}

}else{
return false;
}
}

    // update function end here

// delete function start here

public function delete($table,$where=null)
{
if($this->table_exist($table))
{
    $sql="delete from $table";
    if($where !=null)
    {
        $sql .=" where $where ";

    }
    if($this->mysqli->query($sql))
{
    array_push($this->result, $this->mysqli->affected_rows);
    return true;  
}else{
    array_push($this->result, $this->mysqli->error);
    return false;
    
}

}
else{
    return false;
}
}
// delete function end here

// select method start here
// we make two way to select data
public function read($sql)
{
    $query=$this->mysqli->query($sql);
    if($query)
    {
        $this->result=$query->fetch_all(MYSQLI_ASSOC);
        return true;
    }else{
        array_push($this->result,$this->mysqli->error);
        return false;
    }
}


// SECOND WAY
public function select($table,$rows="*",$join=null,$where=null,$order=null,$limit=null)
{
    if($this->table_exist($table))
    {
$sql="select $rows from $table";
if($join!=null)
{
    $sql .=" join $join";
}
if($where!=null)
{
    $sql .=" where $where";
}
if($order!=null)
{
    $sql .=" order by $order";
}
if($limit!=null)
{
    // pagination works start here
    if(isset($_GET['page']))
    {
       $page=$_GET['page'];
    }else{
        $page=1;
    }
    $start=($page-1)*$limit;

    $sql .=" limit $start,$limit";
}
$query=$this->mysqli->query($sql);
if($query)
{
    $this->result=$query->fetch_all(MYSQLI_ASSOC);
    return true;
}else{
    array_push($this->result,$this->mysqli->error);
    return false;
}
// echo $sql;

    }else{
        // table not exist
        return false;
    }

}
// select method end here
// pagination
public function pagination($table,$join=null,$where=null,$limit=null)
{
if($this->table_exist($table))
{
if($limit!=null)
{
    $sql="select count(*) from $table";
    if($join!=null)
    {
        $sql .=" join $join";
    }
    if($where!=null)
    {
        $sql .=" where $where";
    }
$query=$this->mysqli->query($sql);
$total_records=$query->fetch_array();
$total_records=$total_records[0];

$total_pages=ceil($total_records/$limit);

$url=basename($_SERVER['PHP_SELF']);
// file ka name get kra ga current page ka
if(isset($_GET['page']))
    {
       $page=$_GET['page'];
    }else{
        $page=1;
    }

    $output="<ul class='pagination'>";
    if($total_records>$limit)
    {
// if($page>1)
// {
//     $output .="<li><a $cls href='$url?page=$i'>$i</a>Previous</li>";  
// }

        for($i=1;$i<=$total_pages;$i++)
        {
            if($i==$page)
            {
$cls="class='active'";
            }else{
$cls ="";
            }
            $output .="<li><a $cls href='$url?page=$i'>$i</a></li>";
        }
    }
    $output .="</ul>";
    echo $output;
// print_r($total_records);
}else{
    return false;
}


}else{
    return false;
    // table exist
}
}
// pagination end


    // error display funciton start
    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    // error display funcitonend


    //   check table exist or not

    private function table_exist($table)
    {
        $sql = "SHOW TABLES FROM $this->database_name LIKE '$table'";
        $table_indb = $this->mysqli->query($sql);
        if ($table_indb->num_rows == 1) {
            return true;
        } else {
            array_push($this->result, $table . "does not exist in database");
            return false;
        }
    }




    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }
}
