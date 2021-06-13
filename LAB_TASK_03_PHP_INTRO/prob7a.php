
<?php
for($i=0;$i<=2;$i++){
    for($j=0;$j<=2;$j++){

        if(($i==2 || $j==0) || ($i==1 && $j==1))
        {
            echo " * ";
        }
       else{
            echo "<br> ";}
        }
    }
?>