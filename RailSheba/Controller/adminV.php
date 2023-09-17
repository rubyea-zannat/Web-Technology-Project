<?php
   
    if(isset($_POST['sub_t'])){
        
        $from = $_POST['vari'];;
       
       if(empty($from))
       {
         echo "<script>alert('Please fillup all the forms')</script>";
   			 echo "<script>window.open('../View/AdminVari.php', '_self')</script>";
         
       }
       else{
        if($from=="12345"){
            echo "<script>window.open('../view/AdminHome.php', '_self')</script>";
        }
        else{
            echo "<script>alert('Please try again')</script>";
   			 echo "<script>window.open('../View/AdminVari.php', '_self')</script>";
        }
       }

    }


?>