<?php 
        if(isset($errorMsg)){ 

            echo '<p>'.$errorMsg.'</p>';

        }elseif(isset($successMsg)){ 
            
            echo '<p>'.$successMsg.'</p>';
        }
   ?>