<?php

$name=$_POST["username"];
$gender=$_POST["gender"];
$bday=$_POST["birth"];
$ID=$_POST["ID"];
$school=$_POST["school"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$supervise=$_POST["username1"];
$supervisephone=$_POST["phone1"];
$eat=$_POST["eat"];


echo "您的姓名".$name."<br/>";
echo "您的性別".$gender."<br/>";
echo "您的生日".$bday."<br/>";
echo "您的身分證字號".$ID."<br/>";
echo "您的就讀學校/年級".$school."<br/>";
echo "您的手機號碼".$phone."<br/>";
echo "您的信箱".$mail."<br/>";
echo "您的監護人姓名".$supervise."<br/>";
echo "您的監護人手機號碼".$supervisephone."<br/>";

$eatsum = count($eat);
for($i=0;$i<$eatsum;$i++){
	echo "特殊飲食習慣:".$eat[$i]."<br/>";
}

$comment=$_POST["comment"];
echo "建議或想說的話:".nl2br($comment);


?>

