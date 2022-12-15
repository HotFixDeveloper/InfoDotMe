<?php

      $ClientUA = $_SERVER['HTTP_USER_AGENT'];
      $ClientIP = $_SERVER['REMOTE_ADDR'];


      echo "
      <div class="user-agent">
            User Agent - {$ClientUA}
      </div>
      ";

      echo "
      <div class="ip"> 
            IP-адрес - {$ClientIP}
      </div>
      ";

?>
