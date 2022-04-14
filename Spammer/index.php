<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php


if(isset($_POST['send'])){
    for ($i=0;$i<$_POST['n'];$i++){
        require_once 'mail.php';
        
         //Recipients
         $mail->setFrom('For Target Email', 'Senter message');
         $mail->addAddress($_POST['Target']);
                                         //Set email format to HTML
         $mail->Subject = $_POST['Subject'];
         $mail->Body    = $_POST['body'];
         $mail->send();
        
        }
}
?>
<div class="center" style="margin-left: 25px;">
  <form method="POST">
    
  Enter how many time you want to send the message  <input type="text" required placeholder="Number" name="n" class="form-control w-25"><br><br>
 Enter the Target <input type="email" placeholder="Email" name="Target" class="form-control w-25"><br><br>
 Enter the Subject of message <input type="text" name="Subject" placeholder="Subject" class="form-control w-25"><br><br>
 Enter the Message <input type="text" name="body" placeholder="Message" class="form-control w-25"><br><br>
  <button class="btn btn-outline-primary" onclick="MyFunc()" type="submit" name="send">Go Sent it</button> <br><br>
<div id="de" style="color:skyblue;" ></div>
  </form></div>
  <script>
     let ded=document.getElementById('de');
    
  function MyFunc(){
    ded.innerHTML="The message has been sent";
  } </script>
</body>
</html>