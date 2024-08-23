<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعادة تعين كلمة السر</title>
</head>
<body>
<form method="post">
    <div>البريد الكتروني</div>    
    <input type="email" name="email" required/>
    <button type="submit" name="resetpassword">ارسال رابط اعادة تعيين كلمة المرور اللى الى بريد الكتروني</button>
</form>
<?php
if(isset($_post['resetpassword'])){  
    $username="root";
    $pass="";
    $database=new pDo("mysql:host=localhost; dbname=blog;",$username,$password);
    

    $checkemail = $database->prepare("select EMAIL FROM users WHERE EMAIL =:email");
    $checkemail->bindparam("email",$_post['email']);
    $checkemail->execute();
    if($checkemail->rowcount() >0){

    }else{ 
        echo'هذا بريد الكتروني غير مسجل لدينا';
    }
}
?>
</body>
</html>