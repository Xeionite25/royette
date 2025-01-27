<!DOCTYPE html> 
<html>   
<body> 
    <table width="400px" border="1px" cellspacing="0px"> 
        <?php  
        $count = 0; 
        for($col = 0; $col < 8; $col++) { 
            echo "<tr>"; 
            $count = $col; 
  
            for($row = 0; $row < 8; $row++) { 
                if($count%2 == 0) { 
                    echo "<td height=40px width=20px bgcolor=black></td>"; 
                    $count++; 
                } 
                else { 
                    echo "<td height=40px width=20px bgcolor=white></td>"; 
                    $count++; 
                } 
            } 
            echo "</tr>"; echo "tite na malake";
         
        } 
        ?> 
    </table> 

</body> 
</html> 