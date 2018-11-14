 

<?php

// Reads the variables sent via POST from our gateway

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

$database ="votersdesk";
$pass = "";
$username = "root";
$host = "localhost";

$con = new mysqli($host,$username,$pass,$database);
if($con->connect_error){
    die("connection failed " . $con->connect_error);
}else{

}
$query = "Select * from message";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){

  while($row = mysqli_fetch_assoc($result)){
      $message = $row['message'];
  }
}

if(isset($_POST['message'])){
    $msg = $_POST['message'] ;
    $query2 = "UPDATE message set message='$msg' where id=0";

    //submit the query to dy
    $result = mysqli_query($con,$query2);
    if($result){
        echo "Success";
    }
}


//inserting 

// $query1 = "INSERT INTO message (message) VALUES ('$msg')";

//updating

echo $message;


if ( $text == "" ) {
// Show all LGA in Akwa Ibom

$response = "CON Select your LGA \n";

$response .= "1. Abak \n";

$response .= "2. Eastern Obolo \n";

$response .= "3. Eket \n";

$response .= "4. Esit Eket \n";

$response .= "5. Essien Udim\n";

$response .= "6. Etin Ekpo\n";

$response .= "7. Etinan\n";

$response .= "8. Ibeno\n";

$response .= "9. Ibesikpo Asutan\n";

$response .= "10. Ibiomo Ibom\n";

$response .= "11. Ika\n";

$response .= "12. Ikono\n";

$response .= "13. Ikot Abasi\n";

$response .= "14. Ikot Ekpene\n";

$response .= "15. Ini\n";

$response .= "16. Itu\n";

$response .= "17. Mbo\n";

$response .= "18. Mkpat Enin\n";

$response .= "19. Nsit Atai\n";

$response .= "20. Nsit Ibom\n";

$response .= "21. Nsit Ubium\n";

$response .= "22. Obot Akara\n";

$response .= "23. Okobo\n";

$response .= "24. Onna\n";

$response .= "25. Oron\n";

$response .= "26. Oruk Anam\n";

$response .= "27. Udung Uko\n";

$response .= "28. Ukanafun\n";

$response .= "29. Uruan\n";

$response .= "30. Urue-Offeong\n";

$response .= "31. Uyo\n";

}

else if ($text == "1") {
    //Selection of wards under Abak LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Abak Urban 1\n";
    $response .= "2. Abak Urban 11\n";
    $response .= "3. Abak Urban 111\n";
    $response .= "4. Abak Urban 1v\n";
    $response .= "5. Afaha Obong 1\n";
    $response .= "6. Afaha Obong 11\n";
    $response .= "7. Midim 1\n";
    $response .= "8. Midim 11\n";
    $response .= "9. Otoro 1\n";
    $response .= "10. Otoro 11\n";
    $response .= "11. Otoro 111\n";
}
   // polling units for wards under abak.
   elseif (text == "1*1"){
       //pulling units under Abak Urban I ward
       $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*1*1"){
       // displays the polling unit for Abak Urban I
       $response .= "END Your pulling unit is E-LIBRARY \n";

       $response .= "END ************************** \n";
       
       $response .= $message;
       
       $response .= "END **************************\n";
   }
   elseif(text == "1*1*2"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*3"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*4"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*5"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*6"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*7"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*8"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*9"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*10"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*11"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*12"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*13"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*14"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*1*15"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
   elseif (text == "1*2"){
    //pulling units under Abak Urban II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*2*1"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*2*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*2*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
   elseif (text == "1*3"){
    //pulling units under Abak Urban III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*3*1"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*3*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*3*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
   elseif (text == "1*4"){
    //pulling units under Abak Urban IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*4*1"){
    // displays the polling unit
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*4*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*4*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
   elseif (text == "1*5"){
    //pulling units under Afaha Obong I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*5*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*5*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*5*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
   elseif (text == "1*6"){
    //pulling units under Afaha Obong II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*6*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*6*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*6*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
   elseif (text == "1*7"){
    //pulling units under Midim I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*7*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*7*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*7*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}

   elseif (text == "1*8"){
    //pulling units under Midim II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*8*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*8*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*8*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
   elseif (text == "1*9"){
    //pulling units under Otoro I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*9*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*9*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*9*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";}
   
   elseif (text == "1*10"){
    //pulling units under Otoro II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*10*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*10*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*10*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";}
   elseif (text == "1*11"){
    //pulling units under Otoro III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif(text == "1*11*1"){
    // displays the polling unit for Abak Urban I
    $response .= "END Your pulling unit is E-LIBRARY \n";

    $response .= "END ************************** \n";
    
    $response .= $message;
    
    $response .= "END **************************\n";
}
elseif(text == "1*11*2"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*3"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*4"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*5"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*6"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*7"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*8"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*9"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*10"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*11"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*12"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*13"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*14"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";
}
elseif(text == "1*11*15"){
 // displays the polling unit
 $response .= "END Your pulling unit is E-LIBRARY \n";

 $response .= "END ************************** \n";
 
 $response .= $message;
 
 $response .= "END **************************\n";}

else if ($text == "2") {
    //Selection of wards under Eastern Obolo LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Eastern Obolo 1\n";
    $response .= "2. Eastern Obolo 11\n";
    $response .= "3. Eastern Obolo 111\n";
    $response .= "4. Eastern Obolo 1V\n";
    $response .= "5. Eastern Obolo V\n";
    $response .= "6. Eastern Obolo V1\n";
    $response .= "7. Eastern Obolo V11\n";
    $response .= "8. Eastern Obolo V111\n";
    $response .= "9. Eastern Obolo IX\n";
    $response .= "10. Eastern Obolo X\n";
}
    // polling units for wards under abak.
    elseif (text == "2*1"){
        //pulling units under Eastern Obolo I ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
        $response .= "1. 001\n";
        $response .= "2. 002\n";
        $response .= "3. 003\n";
        $response .= "4. 004\n";
        $response .= "5. 005\n";
        $response .= "6. 006\n";
        $response .= "7. 007\n";
        $response .= "8. 008\n";
        $response .= "9. 009\n";
        $response .= "10. 010\n";
        $response .= "11. 011\n";
        $response .= "12. 012\n";
        $response .= "13. 013\n";
        $response .= "14. 014\n";
        $response .= "15. 015\n"; 
    }
    elseif(text == "2*1*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*1*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*2"){
        //pulling units under Eastern Obolo II ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
        $response .= "1. 001\n";
        $response .= "2. 002\n";
        $response .= "3. 003\n";
        $response .= "4. 004\n";
        $response .= "5. 005\n";
        $response .= "6. 006\n";
        $response .= "7. 007\n";
        $response .= "8. 008\n";
        $response .= "9. 009\n";
        $response .= "10. 010\n";
        $response .= "11. 011\n";
        $response .= "12. 012\n";
        $response .= "13. 013\n";
        $response .= "14. 014\n";
        $response .= "15. 015\n"; 
    }
    elseif(text == "2*2*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*2*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*2*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*3"){
        //pulling units under Eastern Obolo III ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*3*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*3*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*3*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*4"){
        //pulling units under Eastern Obolo IV ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*4*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*4*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*4*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*5"){
        //pulling units under Eastern Obolo V ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*5*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*5*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*5*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*6"){
        //pulling units under Eastern Obolo VI ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*6*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*6*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*6*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*7"){
        //pulling units under Eastern Obolo VII ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*7*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*7*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*7*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*8"){
        //pulling units under Eastern Obolo VIII ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*8*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*8*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*8*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*9"){
        //pulling units under Eastern Obolo IX ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }
    elseif(text == "2*9*1"){
        // displays the polling unit for Abak Urban I
        $response .= "END Your pulling unit is E-LIBRARY \n";
    
        $response .= "END ************************** \n";
        
        $response .= $message;
        
        $response .= "END **************************\n";
    }
    elseif(text == "2*9*2"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*9*3"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*9*4"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*9*5"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*9*6"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*9*7"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*8"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*9"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*10"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*11"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*12"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*13"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*14"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif(text == "2*1*15"){
     // displays the polling unit
     $response .= "END Your pulling unit is E-LIBRARY \n";
    
     $response .= "END ************************** \n";
     
     $response .= $message;
     
     $response .= "END **************************\n";
    }
    elseif (text == "2*10"){
        //pulling units under Eastern Obolo X ward
        $response .= "CON select the last 3 codes of your PU CODE \n";
        $response .= "1. 001\n";
        $response .= "2. 002\n";
        $response .= "3. 003\n";
        $response .= "4. 004\n";
        $response .= "5. 005\n";
        $response .= "6. 006\n";
        $response .= "7. 007\n";
        $response .= "8. 008\n";
        $response .= "9. 009\n";
        $response .= "10. 010\n";
        $response .= "11. 011\n";
        $response .= "12. 012\n";
        $response .= "13. 013\n";
        $response .= "14. 014\n";
        $response .= "15. 015\n"; 
    }    

else if ($text == "3") {
    //Selection of wards under Eket LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Urban 1\n";
    $response .= "2. Urban 11\n";
    $response .= "3. Urban 111\n";
    $response .= "4. Urban 1v\n";
    $response .= "5. Central 1\n";
    $response .= "6. Central 11\n";
    $response .= "7. Central 111\n";
    $response .= "8. Central 1v\n";
    $response .= "9. Central v\n";
    $response .= "10. Okon 1\n";
    $response .= "11. Okon 11\n";
}
// polling unit for wards in Eket LGA
   elseif (text == "3*1"){
    //pulling units under Urban I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*2"){
    //pulling units under Urban II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*3"){
    //pulling units under Urban III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*4"){
    //pulling units under Urban IX ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*5"){
    //pulling units under Central I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*6"){
    //pulling units under Central II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*7"){
    //pulling units under Central III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*8"){
    //pulling units under Central IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*9"){
    //pulling units under Central V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*10"){
    //pulling units under Okon I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "3*11"){
    //pulling units under Okon II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   } 
else if ($text == "4") {
    //Selection of wards under Esit Eket (UQUO) LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ekpene Obo\n";
    $response .= "2. Edor\n";
    $response .= "3. Ebe Ekpi\n";
    $response .= "4. Ikpa\n";
    $response .= "5. Uquo\n";
    $response .= "6. Ebighi Okpono\n";
    $response .= "7. Etebi Edung Assan\n";
    $response .= "8. Etebi Akwata\n";
    $response .= "9. Akpautong\n";
    $response .= "10. Ntak Inyang\n";
}
   elseif (text == "4*1"){
    //pulling units under Ekpene Obo ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*2"){
    //pulling units under Edor ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*3"){
    //pulling units under Ebe Ekpi ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*4"){
    //pulling units under Ikpa ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*5"){
    //pulling units under Uquo ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*6"){
    //pulling units under Ebighi Okpono ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*7"){
    //pulling units under Etebi Edung Assan ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*8"){
    //pulling units under Etibi Akwata ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*9"){
    //pulling units under Akpautong ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "4*10"){
    //pulling units under Ntak Inyang ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   } 

else if ($text == "5") {
    //Selection of wards under Essien Udim LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Adiasim\n";
    $response .= "2. Afaha\n";
    $response .= "3. Ekpeyong 1\n";
    $response .= "4. Ekpeyong 11\n";
    $response .= "5. Ikpe Annang\n";
    $response .= "6. Odoro Ikot 1\n";
    $response .= "7. Odoro Ikot 11\n";
    $response .= "8. Okon\n";
    $response .= "9. Ukana East\n";
    $response .= "10. Ukana West 1\n";
    $response .= "10. Ukana West 11\n";
}
   elseif (text == "5*1"){
    //pulling units under Adiasim ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*2"){
    //pulling units under Afaha ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*3"){
    //pulling units under Ekpeyong I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*4"){
    //pulling units under Ekpeyong II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*5"){
    //pulling units under Ikpe Annang ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*6"){
    //pulling units under Odoro Ikot I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*7"){
    //pulling units under Odoro Ikot II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

   elseif (text == "5*8"){
    //pulling units under Ukana East I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*9"){
    //pulling units under Ukana West I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "5*10"){
    //pulling units under Ukana West II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
else if ($text == "6") {
    //Selection of wards under Etim Ekpo LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Etim Ekpo 1\n";
    $response .= "2. Etim Ekpo 11\n";
    $response .= "3. Etim Ekpo 111\n";
    $response .= "4. Etim Ekpo 1v\n";
    $response .= "5. Etim Ekpo v\n";
    $response .= "6. Etim Ekpo v1\n";
    $response .= "7. Etim Ekpo v11\n";
    $response .= "8. Etim Ekpo v111\n";
    $response .= "9. Etim Ekpo Ix\n";
    $response .= "10. Etim Ekpo x\n";
}
   elseif (text == "6*1"){
    //pulling units under Etim Ekpo I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*2"){
    //pulling units under Etim Ekpo II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*3"){
    //pulling units under Etim Ekpo III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*4"){
    //pulling units under Etim Ekpo IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*5"){
    //pulling units under Etim Ekpo V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*6"){
    //pulling units under Etim Ekpo VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*7"){
    //pulling units under Etim Ekpo VII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "6*8"){
    //pulling units under Etim Ekpo VIII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "6*9"){
    //pulling units under Etim Ekpo IX ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "6*10"){
    //pulling units under Etim Ekpo X ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "7") {
    //Selection of wards under Etinan LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Etinan Urban 1\n";
    $response .= "2. Etinan Urban 11\n";
    $response .= "3. Etinan Urban 111\n";
    $response .= "4. Etinan Urban 1v\n";
    $response .= "5. Etinan Urban v\n";
    $response .= "6. Southern Iman 1\n";
    $response .= "7. Southern Iman 11\n";
    $response .= "8. Southern Iman 111\n";
    $response .= "9. Southern Iman 1v\n";
    $response .= "10. Northern Iman 1\n";
    $response .= "11. Northern Iman 11\n";
}
elseif (text == "7*1"){
    //pulling units under Etinam Urban I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*2"){
    //pulling units under Etinam Urban II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*3"){
    //pulling units under Etinam Urban III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*4"){
    //pulling units under Etinam Urban IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*5"){
    //pulling units under Etinam Urban V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*6"){
    //pulling units under Southern Iman I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*7"){
    //pulling units under Southern Iman II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "7*8"){
    //pulling units under Southern Iman III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "7*9"){
    //pulling units under Southern Iman IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*10"){
    //pulling units under Nothern Iman I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "7*11") {
       // pulling units under Nothern Iman Ward
       $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
    }


else if ($text == "8") {
    //Selection of wards under Ibeno LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ibeno 1\n";
    $response .= "2. Ibeno 11\n";
    $response .= "3. Ibeno 111\n";
    $response .= "4. Ibeno 1v\n";
    $response .= "5. Ibeno v\n";
    $response .= "6. Ibeno v1\n";
    $response .= "7. Ibeno v11\n";
    $response .= "8. Ibeno v111\n";
    $response .= "9. Ibeno Ix\n";
    $response .= "10. Ibeno x\n";
}
   elseif (text == "8*1"){
    //pulling units under Ibeno I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*2"){
    //pulling units under Ibeno II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*3"){
    //pulling units under Ibeno III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*4"){
    //pulling units under Ibeno IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*5"){
    //pulling units under Ibeno V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*6"){
    //pulling units under Ibeno VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*7"){
    //pulling units under Ibeno VII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "8*8"){
    //pulling units under Ibeno VIII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "8*9"){
    //pulling units under Ibeno IX ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "8*10"){
    //pulling units under Ibeno X ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }


else if ($text == "9") {
    //Selection of wards under Ibesikpo Asutan LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ibesikpo 1\n";
    $response .= "2. Ibesikpo 11\n";
    $response .= "3. Ibesikpo 111\n";
    $response .= "4. Ibesikpo 1v\n";
    $response .= "5. Ibesikpo v\n";
    $response .= "6. Asutan 1\n";
    $response .= "7. Asutan 11\n";
    $response .= "8. Asutan 111\n";
    $response .= "9. Asutan 1v\n";
    $response .= "10. Asutan v\n";
}
   elseif (text == "9*1"){
    //pulling units under Ibesikpo I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*2"){
    //pulling units under Ibesikpo II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*3"){
    //pulling units under Ibesikpo III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*4"){
    //pulling units under Ibesikpo IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*5"){
    //pulling units under Ibesikpo V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*6"){
    //pulling units under Asutan I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*7"){
    //pulling units under Asutan II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "9*8"){
    //pulling units under Asutan III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "9*9"){
    //pulling units under Asutan IV  ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "9*10"){
    //pulling units under Asutan V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }


else if ($text == "10") {
    //Selection of wards under Ibiono Ibom LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ibiono Eastern 1\n";
    $response .= "2. Ibiono Eastern 11\n";
    $response .= "3. Ibiono Western 1\n";
    $response .= "4. Ibiono Western 11\n";
    $response .= "5. Ibiono Southern 1\n";
    $response .= "6. Ibiono Southern 11\n";
    $response .= "7. Ibiono Northern 1\n";
    $response .= "8. Ibiono Northern 11\n";
    $response .= "9. Ibiono Central 1\n";
    $response .= "10. Ibiono Central 11\n";
    $response .= "11. Ikpanya\n";
}
   elseif (text == "10*1"){
    //pulling units under Ibiono Eastern I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*2"){
    //pulling units under Ibiono Eastern II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*3"){
    //pulling units under Ibiono Western I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*4"){
    //pulling units under Ibiono Western II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*5"){
    //pulling units under Ibiono Southern I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*6"){
    //pulling units under Ibiono Southern II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*7"){
    //pulling units under Ibiono Northern I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "10*8"){
    //pulling units under Ibiono Northern II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "10*9"){
    //pulling units under Ibiono Central I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*10"){
    //pulling units under Ibiono Central II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "10*11"){
    //pulling units under Ikpanya ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }


else if ($text == "11") {
    //Selection of wards under Ika LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Urban 1\n";
    $response .= "2. Urban 11\n";
    $response .= "3. Achan Ika\n";
    $response .= "4. Achan 11\n";
    $response .= "5. Achan 111\n";
    $response .= "6. Ito 1\n";
    $response .= "7. Ito 11\n";
    $response .= "8. Ito 111\n";
    $response .= "9. Odoro 1\n";
    $response .= "10. Odoro 11\n";
}

   elseif (text == "11*1"){
    //pulling units under UrbanI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*2"){
    //pulling units under Urban II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*3"){
    //pulling units under Achan I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*4"){
    //pulling units under Achan II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*5"){
    //pulling units under Achan III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*6"){
    //pulling units under Ito I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*7"){
    //pulling units under Ito II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "11*8"){
    //pulling units under Ito III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "11*9"){
    //pulling units under Odoro I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "11*10"){
    //pulling units under Odoro II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "12") {
    //Selection of wards under Ikono LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ikono Middle 1\n";
    $response .= "2. Ikono Middle 11\n";
    $response .= "3. Ikono Middle 111\n";
    $response .= "4. Ikono Middle 1v\n";
    $response .= "5. Ikono South\n";
    $response .= "6. Nkwot 1\n";
    $response .= "7. Nkwot 11\n";
    $response .= "8. Ndiya/Ikot Idana\n";
    $response .= "9. Ediene 1\n";
    $response .= "10. Ediene 11\n";
    $response .= "11. ITak\n";
}

   elseif (text == "12*1"){
    //pulling units under Ikono Middle I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*2"){
    //pulling units under Ikono Middle II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*3"){
    //pulling units under Ikono Middle III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*4"){
    //pulling units under Ikono Middle IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*5"){
    //pulling units under Ikono South ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*6"){
    //pulling units under Nkwot I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*7"){
    //pulling units under Nkwot II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "12*8"){
    //pulling units under Ndiya/Ikot Idana ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "12*9"){
    //pulling units under Ediene I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*10"){
    //pulling units under Ediene II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "12*11"){
    //pulling units under Itak ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "13") {
    //Selection of wards under Ikot Abasi LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ikpa Ibekwe 1\n";
    $response .= "2. Ikpa Ibekwe 11\n";
    $response .= "3. Ukpum Ete 1\n";
    $response .= "4. Ukpum Ete 11\n";
    $response .= "5. Ukpum Okon\n";
    $response .= "6. Edemaya 1\n";
    $response .= "7. Edemaya 11\n";
    $response .= "8. Edemaya 111\n";
    $response .= "9. Ikpa Nung Asang 1\n";
    $response .= "10. Ikpa Nung Asang 11\n";
}
elseif (text == "13*1"){
    //pulling units under Ikpe Ibekwe I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*2"){
    //pulling units under Ikpe Ibekwe II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*3"){
    //pulling units under Ukpum Ete I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*4"){
    //pulling units under Ukpum Ete II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*5"){
    //pulling units under Ukpum Okon ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*6"){
    //pulling units under Edemaya I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*7"){
    //pulling units under Edemaya II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "13*8"){
    //pulling units under Edemaya III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "13*9"){
    //pulling units under Ikpa Nung Asang I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "13*10"){
    //pulling units under Ikpa Nung Asang II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   

else if ($text == "14") {
    //Selection of wards under Ikot Ekpene LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ikot Ekpene 1\n";
    $response .= "2. Ikot Ekpene 11\n";
    $response .= "3. Ikot Ekpene 111\n";
    $response .= "4. Ikot Ekpene 1v\n";
    $response .= "5. Ikot Ekpene v\n";
    $response .= "6. Ikot Ekpene v1\n";
    $response .= "7. Ikot Ekpene v11\n";
    $response .= "8. Ikot Ekpene v111\n";
    $response .= "9. Ikot Ekpene 1x\n";
    $response .= "10. Ikot Ekpene x\n";
    $response .= "10. Ikot Ekpene x1\n";
}
   elseif (text == "14*1"){
    //pulling units under Ikot Ekpene I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*2"){
    //pulling units under Ikot Ekpene II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*3"){
    //pulling units under Ikot Ekpene III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*4"){
    //pulling units under Ikot Ekpene IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*5"){
    //pulling units under Ikot Ekpene V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*6"){
    //pulling units under Ikot Ekpene VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*7"){
    //pulling units under Ikot Ekpene VII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*8"){
    //pulling units under Ikot Ekpene VIII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*9"){
    //pulling units under Ikot Ekpene IX ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*10"){
    //pulling units under Ikot Ekpene X ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "14*11"){
    //pulling units under Ikot Ekpene XI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "15") {
    //Selection of wards under Ini LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ikpe 1\n";
    $response .= "2. Ikpe 11\n";
    $response .= "3. Itu Mbonuso\n";
    $response .= "4. Nkari\n";
    $response .= "5. Iwerre\n";
    $response .= "6. Ikono North 1\n";
    $response .= "7. Ikono North 11\n";
    $response .= "8. Ikono North 111\n";
    $response .= "9. Odoro Ukwok\n";
    $response .= "10. Usuk Ukwok\n";
}
   elseif (text == "15*1"){
    //pulling units under Ikpe I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*2"){
    //pulling units under Ikpe II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*3"){
    //pulling units under Itu Mbonuso ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*4"){
    //pulling units under Nkari ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*5"){
    //pulling units under Iwerre ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*6"){
    //pulling units under Ikono North I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*7"){
    //pulling units under Ikono North II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*8"){
    //pulling units under Ikot North III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*9"){
    //pulling units under Odoro Ukwok ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "15*10"){
    //pulling units under Usuk Ukwok ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   
else if ($text == "16") {
    //Selection of wards under Itu LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Oku Iboku\n";
    $response .= "2. Mbiase/Ayadehe\n";
    $response .= "3. East Itam 1\n";
    $response .= "4. East Itam 11\n";
    $response .= "5. East Itam 111\n";
    $response .= "6. East Itam 1v\n";
    $response .= "7. East Itam v\n";
    $response .= "8. West Itam 1\n";
    $response .= "9. West Itam 11\n";
    $response .= "10. West Itam 111\n";
}
   elseif (text == "16*1"){
    //pulling units under Oku Iboku ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*2"){
    //pulling units under Mbiase/Ayadehe ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*3"){
    //pulling units under East Itam I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*4"){
    //pulling units under East Itam II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*5"){
    //pulling units under East Itam III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*6"){
    //pulling units under East Itam IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*7"){
    //pulling units under East Itam V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "16*8"){
    //pulling units under West Itam I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "16*9"){
    //pulling units under East Itam II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "16*10"){
    //pulling units under East Itam III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "17") {
    //Selection of wards under Mbo LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Enwang 1\n";
    $response .= "2. Enwang 11\n";
    $response .= "3. Ebughu 1\n";
    $response .= "4. Ebughu 11\n";
    $response .= "5. Udesi\n";
    $response .= "6. Efiat 1\n";
    $response .= "7. Efiat 11\n";
    $response .= "8. Ibaka\n";
    $response .= "9. Uda 1\n";
    $response .= "10. Uda 11\n";
}
   elseif (text == "17*1"){
    //pulling units under Enwang I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "17*2"){
    //pulling units under Enwang II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "17*3"){
    //pulling units under Ebughu I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "17*4"){
    //pulling units under Ebughu II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "17*5"){
    //pulling units under Udesi ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "17*6"){
    //pulling units under Efiat I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n"; 
   }
   elseif (text == "17*7"){
    //pulling units under Efiat II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "17*8"){
    //pulling units under Ibaka ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "17*9"){
    //pulling units under Uda I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "17*10"){
    //pulling units under Uda II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "18") {
    //Selection of wards under Mkpat Enin LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ukpum Minya 1\n";
    $response .= "2. Ukpum Minya 11\n";
    $response .= "3. Ukpum Minya 111\n";
    $response .= "4. Ukpum Minya 1v\n";
    $response .= "5. Ikpa Ibom 1\n";
    $response .= "6. Ikpa Ibom 11\n";
    $response .= "7. Ikpa Ibom 111\n";
    $response .= "8. Ikpa Ibom 1v\n";
    $response .= "9. Ibiaku 1\n";
    $response .= "10. Ibiaku 11\n";
    $response .= "11. Ibiaku 111\n";
    $response .= "12. Ikpa Ikono 1\n";
    $response .= "13. Ikpa Ikono 11\n";
    $response .= "14. Ikpa Ikono 111\n";
}

  elseif (text == "18*1"){
    //pulling units under Ukpum Minya I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*2"){
    //pulling units under Ukpum Minya II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*3"){
    //pulling units under Ukpum Minya III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*4"){
    //pulling units under Ukpum Minya IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*5"){
    //pulling units under Ikpa Ibom I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*6"){
    //pulling units under Ikpa Ibom II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*7"){
    //pulling units under Ikpa Ibom III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "18*8"){
    //pulling units under Ikpa Ibom IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "18*9"){
    //pulling units under Ibiaku I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*10"){
    //pulling units under Ibiaku II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*11"){
    //pulling units under ibiaku III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*12"){
    //pulling units under ikpa ikono I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*13"){
    //pulling units under ikpa ikono II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "18*14"){
    //pulling units under ikpa Ikono III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "19") {
    //Selection of wards under Nsit Atai LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Eastern Nsit 1\n";
    $response .= "2. Eastern Nsit 11\n";
    $response .= "3. Eastern Nsit 111\n";
    $response .= "4. Eastern Nsit 1v\n";
    $response .= "5. Eastern Nsit v\n";
    $response .= "6. Eastern Nsit v1\n";
    $response .= "7. Eastern Nsit v11\n";
    $response .= "8. Eastern Nsit v111\n";
    $response .= "9. Eastern Nsit 1x\n";
    $response .= "10. Eastern Nsit x\n";
}

   elseif (text == "19*1"){
    //pulling units under Eastern Nsit I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*2"){
    //pulling units under Eastern Nsit II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*3"){
    //pulling units under Eastern Nsit III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*4"){
    //pulling units under Eastern Nsit IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*5"){
    //pulling units under Eastern Nsit V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*6"){
    //pulling units under Eastern Nsit VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*7"){
    //pulling units under Eastern Nsit VII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "19*8"){
    //pulling units under Eastern Nsit VIII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "19*9"){
    //pulling units under Eastern Nsit IX ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "19*10"){
    //pulling units under Eastern Nsit X ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "20") {
    //Selection of wards under Nsit Ibom LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Asang 1\n";
    $response .= "2. Asang 11\n";
    $response .= "3. Asang 111\n";
    $response .= "4. Asang 1v\n";
    $response .= "5. Asang v\n";
    $response .= "6. Mbaiso 1\n";
    $response .= "7. Mbaiso 11\n";
    $response .= "8. Mbaiso 111\n";
    $response .= "9. Mbaiso 1v\n";
    $response .= "10. Mbaiso v\n";
}
elseif (text == "20*1"){
    //pulling units under Asang I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*2"){
    //pulling units under Asang II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*3"){
    //pulling units under Asang III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*4"){
    //pulling units under Asang IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*5"){
    //pulling units under Asang V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*6"){
    //pulling units under Mbaiso I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*7"){
    //pulling units under Mbaiso II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "20*8"){
    //pulling units under Mbaiso III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "20*9"){
    //pulling units under Mbaiso IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "20*10"){
    //pulling units under Mbaiso V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "21") {
    //Selection of wards under Nsit Ubium LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ibiakpan/Obotim 1\n";
    $response .= "2. Ibiakpan/Obotim 11\n";
    $response .= "3. Itreto\n";
    $response .= "4. Ndiya\n";
    $response .= "5. Ubium North 1\n";
    $response .= "6. Ubium North 11\n";
    $response .= "7. Ubium North 111\n";
    $response .= "8. Ubium South 1\n";
    $response .= "9. Ubium South 11\n";
    $response .= "10. Ubium South 111\n";
}
   elseif (text == "21*1"){
    //pulling units under Ibiakpan I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*2"){
    //pulling units under Ibiakpan II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*3"){
    //pulling units under Itreto ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*4"){
    //pulling units under Ndiya ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*5"){
    //pulling units under Ubium North I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*6"){
    //pulling units under Ubium North II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*7"){
    //pulling units under Ubium North III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "21*8"){
    //pulling units under Ubium South I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "21*9"){
    //pulling units under Ubium South II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*10"){
    //pulling units under Ubium South III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "22") {
    //Selection of wards under Obot Akara LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ikot Abia 1\n";
    $response .= "2. Ikot Abia 11\n";
    $response .= "3. Ikot Abia 111\n";
    $response .= "4. Obot Akara 1\n";
    $response .= "5. Obot Akara 11\n";
    $response .= "6. Obot Akara 111\n";
    $response .= "7. Nto Edino 1\n";
    $response .= "8. Nto Edino 11\n";
    $response .= "9. Nto Edino 111\n";
    $response .= "10. Nto Edino 1v\n";
}
   elseif (text == "21*1"){
    //pulling units under Ikot Abia I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*2"){
    //pulling units under Ikot Abia II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*3"){
    //pulling units under Ikot Abia III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*4"){
    //pulling units under Obot Akara I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*5"){
    //pulling units under Obot Akara II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*6"){
    //pulling units under Obot Akara III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*7"){
    //pulling units under Nto Edino I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "21*8"){
    //pulling units under Nto Edino II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "21*9"){
    //pulling units under Nto Edino III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "21*10"){
    //pulling units under Nto Edino IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "23") {
    //Selection of wards under Okobo LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Okopedi 1\n";
    $response .= "2. Okopedi 11\n";
    $response .= "3. Nung Ata/Ube 1\n";
    $response .= "4. Nung Ata/Ube 11\n";
    $response .= "5. Akai/Mbukpo/Udung\n";
    $response .= "6. Eweme 1\n";
    $response .= "7. Eweme 11\n";
    $response .= "8. Offi 1\n";
    $response .= "9. Offi 11\n";
    $response .= "10. Ekeya\n";
}
   elseif (text == "23*1"){
    //pulling units under Okopedi I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*2"){
    //pulling units under Okopedi II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*3"){
    //pulling units under Nung Ata/Ube I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*4"){
    //pulling units under Nung Ata/Ube II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*5"){
    //pulling units under Akai/Mbukpo?Udung ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*6"){
    //pulling units under Eweme ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*7"){
    //pulling units under Eweme II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "23*8"){
    //pulling units under Offi I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "23*9"){
    //pulling units under Offi II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "23*10"){
    //pulling units under Ekeya ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "24") {
    //Selection of wards under Onna LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Awa 1\n";
    $response .= "2. Awa 11\n";
    $response .= "3. Awa 111\n";
    $response .= "4. Awa 1v\n";
    $response .= "5. Nung Idem 1\n";
    $response .= "6. Nung Idem 11\n";
    $response .= "7. Oniong East 1\n";
    $response .= "8. Oniong East 11\n";
    $response .= "9. Oniong East 111\n";
    $response .= "10. Oniong West 1\n";
    $response .= "11. Oniong West 11\n";
    $response .= "12. Oniong West 111\n";
}
   elseif (text == "24*1"){
    //pulling units under Awa I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*2"){
    //pulling units under Awa II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*3"){
    //pulling units under Awa III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*4"){
    //pulling units under Awa IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*5"){
    //pulling units under Nung Idem I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*6"){
    //pulling units under Nung Idem II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*7"){
    //pulling units under Oniong East I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "24*8"){
    //pulling units under Oniong East II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "24*9"){
    //pulling units under Oniong East III ward
    
   }
   elseif (text == "24*10"){
    //pulling units under Oniong West I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*11"){
    //pulling units under Oniong West II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "24*12"){
    //pulling units under Oniong West III ward 
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "25") {
    //Selection of wards under Oron LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Oron Urban 1\n";
    $response .= "2. Oron Urban 11\n";
    $response .= "3. Oron Urban 111\n";
    $response .= "4. Oron Urban 1v\n";
    $response .= "5. Oron Urban v\n";
    $response .= "6. Oron Urban v1\n";
    $response .= "7. Oron Urban v11\n";
    $response .= "8. Oron Urban v111\n";
    $response .= "9. Oron Urban 1x\n";
    $response .= "10. Oron Urban x\n";
}

   elseif (text == "25*1"){
    //pulling units under Orobo Urban I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "25*2"){
    //pulling units under Orobo Urban II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "25*3"){
    //pulling units under Orobo Urban III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "25*4"){
    //pulling units under Orobo Urban IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "25*5"){
    //pulling units under Orobo Urban V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
    $response .= "1. 001\n";
    $response .= "2. 002\n";
    $response .= "3. 003\n";
    $response .= "4. 004\n";
    $response .= "5. 005\n";
    $response .= "6. 006\n";
    $response .= "7. 007\n";
    $response .= "8. 008\n";
    $response .= "9. 009\n";
    $response .= "10. 010\n";
    $response .= "11. 011\n";
    $response .= "12. 012\n";
    $response .= "13. 013\n";
    $response .= "14. 014\n";
    $response .= "15. 015\n";
   }
   elseif (text == "25*6"){
    //pulling units under Orobo Urban VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "25*7"){
    //pulling units under Orobo Urban VII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "25*8"){
    //pulling units under Orobo Urban VIII ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "25*9"){
    //pulling units under Orobo Urban IX ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "25*10"){
    //pulling units under Orobo Urban X ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   
else if ($text == "26") {
    //Selection of wards under Oruk Anam LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ikot Ibritam 1\n";
    $response .= "2. Ikot Ibritam 11\n";
    $response .= "3. Ndot/Ikot Okoro 1\n";
    $response .= "4. Ndot/Ikot Okoro 11\n";
    $response .= "5. Ndot/Ikot Okoro 111\n";
    $response .= "6. Ibesit\n";
    $response .= "7. Ekparakwa\n";
    $response .= "8. Abak Midim 1\n";
    $response .= "9. Abak Midim 11\n";
    $response .= "10. Abak Midim 111\n";
    $response .= "11. Abak Midim 1v\n";
    $response .= "12. Ibesit/Nung Ikot 1\n";
    $response .= "13. Ibesit/Nung Ikot 11\n";
}
   elseif (text == "26*1"){
    //pulling units under Ikot Ibritam I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*2"){
    //pulling units under Ikot Ibritam II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*3"){
    //pulling units under Ikot Okoro I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*4"){
    //pulling units under Ikot Okoro II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*5"){
    //pulling units under Ikot Okoro III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*6"){
    //pulling units under Ibesit ward
    
   }
   elseif (text == "26*7"){
    //pulling units under Ekperakwa ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "26*8"){
    //pulling units under Abak Midim I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "26*9"){
    //pulling units under Abak Midim II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*10"){
    //pulling units under Abak Midim III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*11"){
    //pulling units under Abak Midim IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*12"){
    //pulling units under Nung Ikot I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "26*13"){
    //pulling units under Nung Ikot II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }


else if ($text == "27") {
    //Selection of wards under Udung Uko LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Udung Uko 1\n";
    $response .= "2. Udung Uko 11\n";
    $response .= "3. Udung Uko 111\n";
    $response .= "4. Udung Uko 1v\n";
    $response .= "5. Udung Uko v\n";
    $response .= "6. Udung Uko v1\n";
    $response .= "7. Udung Uko v11\n";
    $response .= "8. Udung Uko v111\n";
    $response .= "9. Udung Uko 1x\n";
    $response .= "10. Udung Uko x\n";
}

   elseif (text == "27*1"){
    //pulling units under Udung Uko I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*2"){
    //pulling units under Udung Uko II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*3"){
    //pulling units under Udung Uko III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*4"){
    //pulling units under Udung Uko IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*5"){
    //pulling units under Udung Uko V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*6"){
    //pulling units under Udung Uko VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*7"){
    //pulling units under Udung Uko ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "27*8"){
    //pulling units under Abak Midim I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "27*9"){
    //pulling units under Abak Midim II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "27*10"){
    //pulling units under Abak Midim III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "28") {
    //Selection of wards under Ukanafun LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Ukanafun Urban\n";
    $response .= "2. Southern Ukanafun 1\n";
    $response .= "3. Southern Ukanafun 11\n";
    $response .= "4. Northern Ukanafun 1\n";
    $response .= "5. Northern Ukanafun 11\n";
    $response .= "6. Northern Afaha 1\n";
    $response .= "7. Northern Afaha 11\n";
    $response .= "8. Southern Afaha, Adat Ifang 1\n";
    $response .= "9. Southern Afaha, Adat Ifang 11\n";
    $response .= "10. Southern Afaha, Adat Ifang 111\n";
    $response .= "11. Southern Afaha, Adat Ifang 1v\n";
}
   elseif (text == "28*1"){
    //pulling units under Ukanafun Urban ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*2"){
    //pulling units under Southern Ukanafun I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*3"){
    //pulling units under Southern Ukanafun II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*4"){
    //pulling units under Northern Ukanafun I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*5"){
    //pulling units under Northern Ukanafun II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*6"){
    //pulling units under Northern Afaha I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
    $response .= "1. 001\n";
    $response .= "2. 002\n";
    $response .= "3. 003\n";
    $response .= "4. 004\n";
    $response .= "5. 005\n";
    $response .= "6. 006\n";
    $response .= "7. 007\n";
    $response .= "8. 008\n";
    $response .= "9. 009\n";
    $response .= "10. 010\n";
    $response .= "11. 011\n";
    $response .= "12. 012\n";
    $response .= "13. 013\n";
    $response .= "14. 014\n";
    $response .= "15. 015\n"; 
   }
   elseif (text == "28*7"){
    //pulling units under Northern Afaha II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "28*8"){
    //pulling units under Southern Afaha, Adat Ifang I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "28*9"){
    //pulling units under Southern Afaha, Adat Ifang II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*10"){
    //pulling units under Southern Afaha, Adat Ifang III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "28*11"){
    //pulling units under Southern Afaha, Adat Ifang IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "29") {
    //Selection of wards under Uruan LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Central Uruan 1\n";
    $response .= "2. Central Uruan 11\n";
    $response .= "3. Central Uruan 111\n";
    $response .= "4. Northern Uruan 1\n";
    $response .= "5. Northern Uruan 11\n";
    $response .= "6. Southern Uruan 1\n";
    $response .= "7. Southern Uruan 11\n";
    $response .= "8. Southern Uruan 111\n";
    $response .= "9. Southern Uruan 1v\n";
    $response .= "10. Southern Uruan v\n";
    $response .= "11. Southern Uruan v1\n";
}
   elseif (text == "29*1"){
    //pulling units under Central Uruan I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*2"){
    //pulling units under Central Uruan II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*3"){
    //pulling units under Central Uruan III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*4"){
    //pulling units under Northern Uruan I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*5"){
    //pulling units under Northern Uruan II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*6"){
    //pulling units under Southern Uruan I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*7"){
    //pulling units under Southern Uruan II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "29*8"){
    //pulling units under Southern Uruan III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "29*9"){
    //pulling units under Southern Uruan IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*10"){
    //pulling units under Southern Uruan V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "29*11"){
    //pulling units under Southern Uruan VI ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "30") {
    //Selection of wards under Urue Offong/Oruko LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Urue Offong 1\n";
    $response .= "2. Urue Offong 11\n";
    $response .= "3. Urue Offong 111\n";
    $response .= "4. Urue Offong 1v\n";
    $response .= "5. Urue Offong v\n";
    $response .= "6. Oruko 1\n";
    $response .= "7. Oruko 11\n";
    $response .= "8. Oruko 111\n";
    $response .= "9. Oruko 1v\n";
    $response .= "10. Oruko v\n";
}
   elseif (text == "30*1"){
    //pulling units under Urue Offong I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*2"){
    //pulling units under Urue Offong II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*3"){
    //pulling units under Urue Offong III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*4"){
    //pulling units under Urue Offong IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*5"){
    //pulling units under Urue Offong V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*6"){
    //pulling units under Oruko I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*7"){
    //pulling units under Oruko II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "30*8"){
    //pulling units under Oruko III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "30*9"){
    //pulling units under Oruko IV ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "30*10"){
    //pulling units under Oruko V ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

else if ($text == "31") {
    //Selection of wards under Uyo LGA
    $response .= "CON Select your Ward in your LGA\n";
    $response .= "1. Uyo Urban 1\n";
    $response .= "2. Uyo Urban 11\n";
    $response .= "3. Uyo Urban 111\n";
    $response .= "4. Etoi 1\n";
    $response .= "5. Etoi 11\n";
    $response .= "6. Offot 1\n";
    $response .= "7. Offot 11\n";
    $response .= "8. Ikono 1\n";
    $response .= "9. Ikono 11\n";
    $response .= "10. Oku 1\n";
    $response .= "11. Oku 11\n";
}

elseif (text == "31*1"){
    //pulling units under Uyo Urban I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*2"){
    //pulling units under Uyo Urban II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*3"){
    //pulling units under Uyo Urban III ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*4"){
    //pulling units under Etoi I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*5"){
    //pulling units under Etoi II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*6"){
    //pulling units under Offot I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*7"){
    //pulling units under Offot II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "31*8"){
    //pulling units under Ikono I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }elseif (text == "31*9"){
    //pulling units under Ikono II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*10"){
    //pulling units under Oku I ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }
   elseif (text == "31*11"){
    //pulling units under Oku II ward
    $response .= "CON select the last 3 codes of your PU CODE \n";
       $response .= "1. 001\n";
       $response .= "2. 002\n";
       $response .= "3. 003\n";
       $response .= "4. 004\n";
       $response .= "5. 005\n";
       $response .= "6. 006\n";
       $response .= "7. 007\n";
       $response .= "8. 008\n";
       $response .= "9. 009\n";
       $response .= "10. 010\n";
       $response .= "11. 011\n";
       $response .= "12. 012\n";
       $response .= "13. 013\n";
       $response .= "14. 014\n";
       $response .= "15. 015\n";
   }

//End of Wards in all LGA in Akwa Ibom State


// Print the response onto the page so that our gateway can read it

header('Content-type: text/plain');

echo $response;

// DONE!
?>
