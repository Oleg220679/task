<?php

        print "<table border=1>";
       
        print "<tr>";

        print "<td></td>";
        for($b = 1; $b <= 10; $b++) {
        print "<td><b>". $b ."</b></td>";
        }
        print "</tr>";
        
        
        for($c = 1; $c <= 10; $c++) {print "<tr>";
        print "<td><b>". $c ."</b></td>";
        for($b = 1; $b <= 10; $b++) {
        print "<td>" . $b*$c ."</td>";
        }
        print "</tr>";
        } 
  
        print "</table>";
   ?>