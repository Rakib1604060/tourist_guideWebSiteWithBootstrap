<?php

require 'DBconfig.php';


 if($conn->connect_error) {
    echo "Error";
 } 
 
 $RoomType =  $_POST['Room_Fair'];
 $BedType = $_POST['Bed'];
 
 $District = $_POST['District'];
 $Division = $_POST['Division'];
 $MaximumBudget = $_POST['Maximum_Budget'];
 $MinimumBudget = $_POST['Minimum_Budget'];
 

 
 $Sql_Query = "SELECT Hotel_name,Local_address,District,Division,image_path FROM `Hotel_Details` as hd, `Hotel_Pictures` as hs  
 WHERE `District` ='$District' AND `Division`= '$Division' AND (hd.`Hotel_ID`)IN(SELECT Hotel_ID FROM `$RoomType` 
 WHERE`$BedType`>='$MinimumBudget' AND `$BedType`<='$MaximumBudget') AND hs.`Hotel_ID` = hd.`Hotel_ID`"; 
 
 $result = mysqli_query($conn,$Sql_Query);
 $count=1;
 if($result->num_rows>0){
     
     $data = array();
        while($row = $result->fetch_assoc()){
            
           if(($count%3)==1){
             echo " <div class='card-deck'>";
       
           }
             
            echo " <div class='card'>";
            echo "<img class='card-img-top' src='".$row['image_path']."' alt='Card image cap'>";
             echo "<div class='card-body'>";
            echo" <h5 class='card-title'><a href='#'>".$row['Hotel_name']."<a/></h5>";
            echo"  <p class='card-text'>Address:".$row['Local_address']."</p>";
            echo"</div></div>";
            
            if(($count%3)==0){
             echo " </div>";
       
           }
           $count++;
           
        }
        --$count;
        
        if(($count%3)!=0){
            echo"</div>";
        }
        
    

 }else {
    echo "0 results";
}

  mysqli_close($conn);
?>