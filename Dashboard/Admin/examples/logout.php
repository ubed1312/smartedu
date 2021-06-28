<?php      

 session_start(); 
   unset($_SESSION); 
   session_destroy();
   echo "
        <script type='text/javascript'>
          window.location.href = 'admin.php';
        </script>
      ";
    
    
  ?>