<?php
// session is use to store the information temporarily in server same like a cookies difference is that in cookes we set informaiton in user system while in case of sessio we store in server.

// mostly used in login and logout
// when user logout for website than session delete.
// three steps are taken when works with session

// session start
// $_session [name]=value
// session name echo


// delete session
// session_unset() used to remove all session variables
// session_destroy

session_start();
$_SESSION['myname']="jamshaid";
echo $_SESSION['myname'];  //get session value


// session_unset()
// session_destroy();
?>