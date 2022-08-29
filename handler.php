<?

$action = $_GET["form"];
$myText = "::" . $_POST["creater"] ."::" . $_POST ["tag"] ."::". $_POST ["price"] ."::". $_POST ["sum"] ."::" ; 

if($action = "save") {
  file_put_contents("myTXT.txt", $myText);
}
?>