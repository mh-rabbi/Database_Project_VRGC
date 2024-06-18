<?php
        if(isset($_SESSION['username']))
        {
          echo "      
          <div class='headerdiv'>
            <a href='admin.php' style='font-size: 15px;'>".$_SESSION['username']."</a>
            <form action='logout.php'>
              <button type='submit' style='font-size: 15px; cursor: pointer;'>Logout</button>
            </form>
            </div>
          ";
        }
      ?>