<?phpif (isset($_COOKIE[‘login’]))
 {
setcookie("login","",time()-3600);
header(‘Location: login.php’);
}
else {header(‘Location: login.php’);}?>