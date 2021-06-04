
<?php 
session_start();

        $avatar_user=$_SESSION["useravatar"];
        $posted_by= $_SESSION["username"] ;
    include_once("conn.php");
       
   if($_SERVER['REQUEST_METHOD']=='POST'){

          $message= filter_var($_POST['message'],FILTER_SANITIZE_STRING);
          $sender=$_POST['sender'];
          $to=$_POST['to'];
          $date=date("Y-m-d h:i:sa");
   


        
            
        

     $sql  = "INSERT INTO `messages` ( `msg_from`, `msg_to`, `msg`, `msg_date`) VALUES ( '$sender', '$to', '$message', '$date')";
           if ($conn->query($sql) === TRUE) {
           header('location:other_profile.php?user='.$to);
           }
  
   
   }
  


             

?>