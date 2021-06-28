<?php      

 session_start(); 
   unset($_SESSION); 
   session_destroy();
   echo "
        <script type='text/javascript'>
          window.location.href = '../../../Login_v16/index.php';
        </script>
      ";
    
    
  ?>