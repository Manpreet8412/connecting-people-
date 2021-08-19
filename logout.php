<?php
session_start();

//$_SESSION['email'] = $email;
//$_SESSION['pass'] = $pass;


//$email  = $_SESSION['email'];
//$pwd  = $_SESSION['pass'];
session_destroy();// kill session
//session_unregister('email');//killing the session  $_SESSION['email'] $_SESSION['email']
session_unset(); //killing the session variable..

$exit="ok";
if($exit=="ok")
{
?>
<script>
location.href="index.php"
</script>
<?php
}
?>
