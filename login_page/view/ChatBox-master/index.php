<?php 
include_once 'C:\xampp\htdocs\login_page\controller\msgC.php';
include_once 'C:\xampp\htdocs\login_page\model\msg.php';
$conn = new mysqli("localhost", "root", "", "databasephp") ;
session_start();
$msgC = new msgC();
 $id_r= $_SESSION['auth'] ;
 $id_s=$_GET["ID"]; 
 
if ( isset($_POST["msg"]) )
 {
    if( !empty($_POST["msg"])  ) {
       
       
        $msg = new msg( $id_r ,$id_s,date('d-m-y h:i:s'), $_POST["msg"]);
        $msgC->ajoutermsg($msg) ;
        
        
}
 }

 $sql_s="select * from user where id='$id_s' " ;  
 $result_s = $conn->query($sql_s) or die($conn->error);
 while ($row_s = $result_s->fetch_assoc()) 
{
 $img_s=$row_s['IMG'] ;
}
 $sql_r="select *  from  user where id='$id_r' " ;  
 $result_r = $conn->query($sql_r) or die($conn->error);
 while ($row_r = $result_r->fetch_assoc()) 
{
 $img_r=$row_r['IMG'] ;
}

 $sql = "select * from msg m where (m.id_s='$id_s' or m.id_s='$id_r') and (m.id_r='$id_r' or m.id_r='$id_s')   ";
$result = $conn->query($sql) or die($conn->error);

?>


<!DOCTYPE html>

<html lang='en' class=''>

<head>

    <meta charset='UTF-8'>

    <title>ChatBox | Filter Coding </title>

    <meta name="robots" content="noindex">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="azee.css"></link>

</head>

<body>

    <section class="msger">

        <header class="msger-header">

            <div class="msger-header-title">

                <i class="fas fa-comment-alt"></i> ChatBox
            </div>

            <div class="msger-header-options">

                <span><i class="fas fa-cog"></i></span>

            </div>

        </header>

     
   
           <form action="" method="get" >
  
  <?php
    echo '   <main class="msger-chat">' ;

  while ($row = $result->fetch_assoc()) 

  {
  if($row["id_r"]==$id_r)
  {
      echo '
      
      <div class="msg left-msg">


      <div class="msg-img" style="background-image: url('.$img_s.')"></div>
    
      <div class="msg-bubble">

          <div class="msg-text">

        '.$row["message"].'

          </div>

      </div>

      </div> 

  </div>
      

  ' ;
  }
  else {
  echo '
  <div class="msg right-msg">

  <div class="msg-img" style="background-image: url('.$img_r.')"></div>
      <div class="msg-bubble">


    
          <div class="msg-text">

          '.  $row["message"].'

           </div>

         </div>
         </div>
  </div>

 



           '; 
  }
        } 
       echo' </main>' ; 
        ?>
          
 </form>
       

        <form class="msger-inputarea" action="" method="POST">

             <input name="msg" type="text" class="msger-input" >

         <button herf="#" name="send" type="submit" class="msger-send-btn">Send</button>

        </form>

    </section>

    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

    <script src="script.js"></script>

</body>

</html>