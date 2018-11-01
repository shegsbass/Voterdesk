<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ( $text == "" ) {
     // This is the first request. Note how we start the response with CON
     $response  = "CON What would you want to check \n";
     $response .= "1. Polling Centers \n";
     $response .= "2. Candidate Info";
}
else if ( $text == "1" ) {
  // States in the country
  $response = "CON Select a State by Aphabet\n";
  $response .= "1. A\n";
  $response .= "2. B\n";
  $response .= "3. C and D\n";
  $response .= "4. E\n";
  $response .= "5. F,G,H,I and J\n";
  $response .= "6. K\n";
  $response .= "7. L,M and N\n";
  $response .= "8. O\n";
  $response .= "9. P,R,S,T,Y and Z\n";
  
}
 else if($text == "2") {
  // Displaying candidate information
  $response = "CON Choose candidate \n";
  $response .= "1. Fela Durotoye \n";
  $response .= "2. Donald Duke \n";
  $response .= "3. Muhammadu Buhari \n";
  $response .= "4. Kingsley Moghalu \n";
  
 }
 else if($text == "2*1"){
 // Display information of Fela Durotoye
 $response .= "END Fela is a 46 years old Public speaker and business strategist of the part ANN(alliance of new nigeria) \n -BSc. Computer Science and Economics, and MBA/MSc.Business Strategy from Obafemi Awolowo University \n Look up the Mushin Makeover Project \n \n VOTE WISELY";     
 }
 else if($text == "2*2"){
 // Display information of Donald Duke
 $response .= "END Donald is a 56 years old of the party SDP(Social Democratic Party) \n -LLB from Ahmadu Bello University, \n LLM from the University of Pennsylvania \n -Former Commissioner for Finance and Planning \n -Former Governor of Cross River \n -Initiated the Tinapa Free Zone & Resort, and the Calabar Carnival \n \n VOTE RESPONSIBLY" ;    
 }
 else if($text == "2*3"){
 // Display information of Donald Duke
 $response .= "END Buhari is a 76 years old of party APC(All Progessive Congress)\n -LLB from Ahmadu Bello University, \n LLM from the University of Pennsylvania \n -Former Commissioner for Finance and Planning \n -Former Governor of Cross River \n -Initiated the Tinapa Free Zone & Resort, and the Calabar Carnival  \n \n VOTE WISELY " ;    
 }
else if($text == "2*4"){
 // Display information of Kingsley Moghalu
 $response .= "END Kingsley is a 55 years old of YPP(Young People's Party)\n Professor of Practice in International Business and Public Policy at Tufts University\n
-Attended UNN and LSE (PhD)\n
-President of the Institute of Governance and Economic Transformation\n
-Former United Nations official\n
-Former CBN deputy governor  \n \n CHOOSE WISELY";     
 }
 else if($text == "1*1") {
  // Show all states in A
  $response = "CON Choose a state\n";
  $response .= "1. Abia \n";
  $response .= "2. Adamawa\n";
  $response .= "3. Akwa Ibom\n";
  $response .= "4. Anambra\n";
 }
    
 else if ( $text == "1*2" ) {
  // Show all states in B
  $response = "CON Choose a state\n";
  $response .= "1. Bauchi \n";
  $response .= "2. Bayelsa \n";
  $response .= "3. Benue \n";
  $response .= "4. Borno \n";
 }

 else if ( $text == "1*3" ) {
    // Show all states in C and D
    $response = "CON Choose a state \n";
    $response .= "1. Cross River\n";
    $response .= "2. Delta\n";
 }

  else if ( $text == "1*4" ) {
    // Show all states in E
    $response = "CON Choose a state\n";
    $response .= "1. Ebonyi\n";
    $response .= "2. Edo\n";
    $response .= "3. Ekiti\n";
    $response .= "4. Enugu\n";
 }

 else if ( $text == "1*5" ) {
    // Show all states in G,I and J
    $response .= "CON Choose a state\n";
    $response .= "1. FCT\n";
    $response .= "2. Gombe\n";
    $response .= "3. Imo\n";
    $response .= "4. Jigawa\n";
 }

 else if ( $text == "1*6" ) {
    // Show all states in k
    $response .= "CON Choose a state\n";
    $response .= "1. Kaduna\n";
    $response .= "2. Kano\n";
    $response .= "3. Katsina\n";
    $response .= "4. Kebbi\n";
    $response .= "5. Kogi\n";
    $response .= "6. Kwara\n";
 }

 else if ( $text == "1*7" ) {
    // Show all states in L and N
    $response = "CON Choose a state\n";
    $response .= "1. Lagos\n";
    $response .= "2. Nasarawa\n";
    $response .= "3. Niger\n";
 }

 else if ( $text == "1*8" ) {
    // Show all states in O
    $response = "CON Choose a state\n";
    $response .= "1. Ogun\n";
    $response .= "2. Ondo\n";
    $response .= "3. Osun\n";
    $response .= "4. Oyo\n";
 }

 else if ( $text == "1*9" ) {
    // Show all states in P,R,S,T,Y and Z
    $response = "CON Choose a state\n";
    $response .= "1. Plateau\n";
    $response .= "2. Rivers\n";
    $response .= "3. Sokoto\n";
    $response .= "4. Taraba\n";
    $response .= "4. Yobe\n";
    $response .= "4. Zamfara\n";
 }
   
 else if ( $text == "1*1*1" ) {
    // Show all LGA in Abia
    $response = "CON Select your LGA\n";
    $response .= "1. Aba North\n";
    $response .= "2. Aba South\n";
    $response .= "3. Arochukwu\n";
    $response .= "4. Bende\n";
    $response .= "5. Ikwuano\n";
    $response .= "6. Isiala-Ngwa North\n";
    $response .= "7. Isiala-Ngwa South\n";
    $response .= "8. Isukwuato\n";
    $response .= "9. Obi-Ngwa\n";
    $response .= "10. Ohafia\n";
    $response .= "11. Osisioma-Ngwa\n";
    $response .= "12. Ugwunagbo\n";
    $response .= "13. Ukwa west\n";
    $response .= "14. Ukwa east\n";
    $response .= "15. Umu Nneochi\n";
    $response .= "16. Umuahia South\n";
    $response .= "17. Umuahia North\n";
 }
   
 elseif ($text == "1*1*1*1") {
   // To show all wards aba north
    $response = "CON select WARD in aba North \n ";
    $response .= "1. EZIAMA\n";
    $response .= "2. INDUSTRIAL AREA\n";
    $response .= "3. UMUOGOR\n";
    $response .= "4. OSUSU 1\n";
    $response .= "5. OSUSU 2\n";
    $response .= "6. ST. EUGENES BY OKIGWE RD\n";
    $response .= "7. URATTA\n";
    $response .= "8. OLD ABA GRA\n";
    $response .= "9. UMUOLA\n";
    $response .= "10. ARIARIA\n";
    $response .= "11. OGBOR\n";
 }

elseif ($text == "1*1*1*1*1") {
   $response = "CON select the last 3 codes of your PU \n";
   $response .= "1. 001 \n";
   $response .= "2. 002 \n";
   $response .= "3. 003 \n";
   $response .= "4. 004 \n";
   $response .= "5. 006 \n";
   $response .= "6. 006 \n";
   $response .= "7. 007 \n";
   $response .= "8. 008 \n";
   $response .= "9. 009 \n";
   $response .= "10. 010 \n";
   $response .= "11. 011 \n";
 }

// this for the amuzu
 elseif ($text == "1*1*1*1*1*1"){
  $response .= "END Your voting point is Omugo Hall";
}

else if ($text == "1*1*1*1*1*2"){
  $response .= "END Your voting point is Community School Umuogwu";
}
elseif ($text == "1*1*1*1*1*3"){
  $response .= "END Your voting point is Community School Umuebee";
}
elseif ($text == "1*5*3*1*1*4"){
  $response .= "END Your voting point is Nriukwu Civil Hall";
}
elseif ($text == "1*5*3*1*1*5"){
  $response .= "END Your voting point is Central School Amator";
}
elseif ($text == "1*5*3*1*1*6"){
  $response .= "END Your voting point is Central School Amator";
}
elseif ($text == "1*5*3*1*1*7"){
  $response .= "END Your voting point is Town School Amuzu";
}
elseif ($text == "1*5*3*1*1*8"){
  $response .= "END Your voting point is Central town Amuzu";
}
elseif ($text == "1*5*3*1*1*9"){
  $response .= "END Your voting point is Central School Nriukwu";
}
elseif ($text == "1*5*3*1*1*10"){
  $response .= "END Your voting point is Umuodaa Village Hall";
}
elseif ($text == "1*5*3*1*1*11"){
  $response .= "END Your voting point is Amaiyi Nriukwu (St John)";
}

 elseif($text == "1*1*1*2"){
    // To show all wards aba south
    $response = "CON select WARD in aba south \n";
    $response .= "1. ABA RIVER\n";
    $response .= "2. ABA TOWNHALL\n";
    $response .= "3. ASA\n";
    $response .= "4. ENYIMBA\n";
    $response .= "5. EZIUKWU\n";
    $response .= "6. GLUOCESTER\n";
    $response .= "7. MOSQUE\n";
    $response .= "8. NGWA\n";
    $response .= "9. OHAZU 1\n";
    $response .= "10. OHAZU 2\n";
 }
    

 elseif($text == "1*1*1*3"){
     //wards in arochokwu
    $response = "CON select WARD in arochukwu\n";
    $respond .= "1. Ikwun Ihechiowa\n";
    $respond .= "2. Isu\n";
    $respond .= "3. Ohaeke\n";
    $respond .= "4. Ohafor I\n";
    $respond .= "5. Ohafor 2\n";
    $respond .= "6. Ovukwu\n";
    $respond .= "7. Ututu\n";
    $respond .= "8. Arochukwu I\n";
    $respond .= "9. Arochukwu 2\n";
    $respond .= "10. Arochukwu 3\n";
    $respond .= "11. Eleoha Ihechiowa\n";
 }

 elseif($text == "1*1*1*4"){
    // wards in bende
    $response = "CON select WARD in Bende\n ";
    $response .= "1. bende\n"; 
    $response .= "2. igbere ‘a’\n"; 
    $response .= "3. igbere ‘b’\n";
    $response .= "4. item a \n"; 
    $response .= "5. item b\n";
    $response .= "6. item c\n" ;
    $response .= "7. itumbauzo\n" ;
    $response .= "8. ozuitem\n" ;
    $response .= "9. ugwueke/ezeukwu\n"; 
    $response .= "10. umu – imenyi\n"; 
    $response .= "11. umuhu / ezechi\n" ;
    $response .= "12. uzuakoli\n"; 
    $response .= "13. amankalu/akoliufu\n";
 }

 elseif($text == "1*1*1*5"){
    // wards in ikwuano
    $response = "CON select WARD in ikwuano\n ";
    $response .= "1. ariam\n"; 
    $response .= "2. ibere 1\n"; 
    $response .= "3. ibere 2\n";
    $response .= "4. oboro 1\n"; 
    $response .= "5. oboro 2\n";
    $response .= "6. obor 3\n" ;
    $response .= "7. oloko 1\n"; 
    $response .= "8. oloko 2\n"; 
    $response .= "9. usaka \n" ;
 }

 elseif($text == "1*1*1*6"){
    // wards in isiala ngwa north
    $response = "CON select WARD in isiala ngwa north\n ";
    $response .= "1. amasa nsulu\n"; 
    $response .= "2. amasaa ntigha\n"; 
    $response .= "3. ihie \n";
    $response .= "4. isiala nsulu  \n" ;
    $response .= "5. mbawsi\n";
    $response .= "6. ukwu 1\n"; 
    $response .= "7. ukwu 2\n"; 
    $response .= "8. umunna nsulu\n"; 
    $response .= "9. umuoha\n"; 
    
 }

 elseif($text == "1*1*1*7"){
    // wards in isiala ngwa south
    $response = "CON select WARD in isiala ngwa south\n";
    $response .= "1. akunekpu eziama na obuba\n"; 
    $response .= "2. amaise anaba\n"; 
    $response .= "3. ehina guru osokwa\n";
    $response .= "4. mbutu ngwa\n"; 
    $response .= "5. mbutu ukwu\n";
    $response .= "6. ngwaobi\n"; 
    $response .= "7. okporo ahaba\n"; 
    $response .= "8. omoba\n"; 
    $response .= "9. ovuokwu\n"; 
 }

 elseif($text == "1*1*1*8"){
    // wards in isuikwato
    $response = "CON select WARD in isuikwato\n ";
    $response .= "1. achara\n"; 
    $response .= "2. ezere\n"; 
    $response .= "3. ikeagha 1\n";
    $response .= "4. ikeagha 2\n"; 
    $response .= "5. imenyi\n";
    $response .= "6. amawu\n" ;
    $response .= "7. isu amawu\n" ;
    $response .= "8. ogunduasa\n"; 
    $response .= "9. absu\n"; 
    $response .= "10. umunnekwu\n"; 
 }

 elseif($text == "1*1*1*9"){
    // wards in obingwa
    $response = "CON select WARD in Obingwa\n ";
    $response .= "1. abayi\n"; 
    $response .= "2. abayi 2\n" ;
    $response .= "3. ahiaba\n";
    $response .= "4. akumaimo\n" ;
    $response .= "5. alaukwu ohanze\n";
    $response .= "6. ibeme\n"; 
    $response .= "7. amairi\n"; 
    $response .= "8. itungwa\n" ;
    $response .= "9. umuanunu\n"; 
    $response .= "10. amairinabua\n"; 
    $response .= "11. amairi\n"; 
 }
 elseif($text == "1*1*1*10"){
    $response = "CON select WARD in OHAFIA\n ";
    $response .= "1. agboji abiriba\n"; 
    $response .= "2. amaeke abiriba\n"; 
    $response .= "3. amaogudu abiriba\n";
    $response .= "4. ania ohoafia\n" ;
    $response .= "5. ebem ohoafia\n";
    $response .= "6. isiama ohoafia\n"; 
    $response .= "7. ndi agbo nkoporo\n"; 
    $response .= "8. elu nkporo\n"; 
    $response .= "9. etiti nkporo\n"; 
    $response .= "10. ohafor ohoafia\n"; 
    $response .= "11. okanu ohoafia\n"; 
 }

 elseif($text == "1*1*1*11"){
    $response = "CON select WARD in OSISIOMA\n ";
    $response .= "1. asaa\n"; 
    $response .= "2. amaitolu mbutu umuojima\n" ;
    $response .= "3. amasator\n";
    $response .= "4. amator\n" ;
    $response .= "5. amavo\n";
    $response .= "6. aro-ngwa\n"; 
    $response .= "7. okpor-umuobo\n"; 
    $response .= "8. oso-okwa\n"; 
    $response .= "9. umunneise\n"; 
    $response .= "10. urtta\n"; 
 }

 elseif($text == "1*1*1*12"){
    $response = "CON select WARD in Ugwunagbo\n ";
    $response .= "1. \n"; 
    $response .= "2. \n"; 
    $response .= "3. \n";
    $response .= "4. \n" ;
    $response .= "5. \n";
    $response .= "6. \n"; 
    $response .= "7. \n"; 
    $response .= "8. \n"; 
    $response .= "9. \n"; 
    $response .= "10.\n" ;
    $response .= "11.\n"; 
    $response .= "12.\n"; 
    $response .= "13.\n";
 }

 elseif($text == "1*1*1*13"){
    $response = "CON select WARD in ukwa west\n ";
    $response .= "1. asa north\n"; 
    $response .= "2. asa south\n"; 
    $response .= "3. ipu south\n";
    $response .= "4. ipu east\n" ;
    $response .= "5. ipu west\n";
    $response .= "6. obokwe\n"; 
    $response .= "7. obuzor\n"; 
    $response .= "8. ogwe\n"; 
    $response .= "9. ozaa west\n"; 
    $response .= "10. ozaa ukwu\n"; 
 }

 elseif($text == "1*1*1*14"){
    $response = "CON select WARD in ukwa east\n ";
    $response .= "1. akwete\n"; 
    $response .= "2. asa south\n"; 
    $response .= "3. ipu south\n";
    $response .= "4. ipu east\n"; 
    $response .= "5. ipu west\n";
    $response .= "6. obokwe\n"; 
    $response .= "7. obuzor\n"; 
    $response .= "8. ogwe\n" ;
    $response .= "9. ozaa west\n"; 
    $response .= "10. ozaa ukwu\n"; 
 }

 elseif($text == "1*1*1*15"){
    $response = "CON select WARD in umu nneochi \n";
    $response .= "1. Nneochi amuda\n"; 
    $response .= "2. Nneochi eziama-agbo\n"; 
    $response .= "3. Nneochi eziama-ugwu\n";
    $response .= "4. Nneochi ezingodo\n"; 
    $response .= "5. Nneochi Mbala\n";
    $response .= "6. Nneochi umuelem\n"; 
    $response .= "7. Nneochi obiagu\n"; 
    $response .= "8. Nneochi akawa\n"; 
    $response .= "9. Nneochi umuchieze 1\n"; 
    $response .= "10. Nneochi umuchieze 2\n"; 
    $response .= "12. Nneochi umuchieze 3\n"; 
    $response .= "12. Nneochi umuaku\n"; 
 }

 elseif($text == "1*1*1*16"){
    $response = "CON select WARD in UMUAHIA SOUTH \n";
    $response .= "1. ahiakwu 1\n"; 
    $response .= "2. ahiakwu 2\n"; 
    $response .= "3. amakama\n";
    $response .= "4. ezeleke\n"; 
    $response .= "5. Nsirimo\n";
    $response .= "6. ohiaocha\n"; 
    $response .= "7. old umuahia\n" ;
    $response .= "8. omaegwu\n" ;
    $response .= "9. ubakala\n" ;
    
 }

 elseif($text == "1*1*1*17"){
   // wards in umuahia north
    $response = "CON select WARD in UMUAHIA NORTH \n";
    $response .= "1. afugiri\n"; 
    $response .= "2. ibeku east 1\n"; 
    $response .= "3. ibeku east 2\n";
    $response .= "4. ibeku west\n"; 
    $response .= "5. isingwu\n";
    $response .= "6. ndume\n"; 
    $response .= "7. nkwoachara\n"; 
    $response .= "8. nkwoegwu\n"; 
    $response .= "9. umuahia urban 1\n"; 
    $response .= "10. umuahia urban 2\n"; 
    $response .= "11. umuahia urban 2\n"; 
    $response .= "12. umuahia umuhu\n";
 }


 else if ( $text == "1*1*2" ) {
    // Show all LGA in Adamawa
    $response .= "CON Select your LGA";
    $response .= "1. Demsa";
    $response .= "2. Fufore";
    $response .= "3. Ganya";
    $response .= "4. Girei";
    $response .= "5. Gombi";
    $response .= "6. Guyuke";
    $response .= "7. Blewa";
    $response .= "8. Michika";
    $response .= "9. Mubi North";
    $response .= "10. Mubi South";
    $response .= "11. Numan";
    $response .= "12. Shelleng";
    $response .= "13. Song";
    $response .= "14. Toungo";
    $response .= "15. Yola North";
    $response .= "16. Yola South";
    $response .= "17. Ganye";
    $response .= "18. Gire - 1";
    $response .= "19. Jada";
    $response .= "20. Hong";
    $response .= "21. Madagali";
    $response .= "22. Lamurde";
    $response .= "23. Maiha";
    $response .= "24. Mayo-Belwa";
 }

/*  elseif ($text == "1*1*2*1") {
    $response = "END "
 }

 elseif($text == "1*1*2*2"){
     $response = "END "
 }

 elseif($text == "1*1*2*3"){
    $response = "END "
 }

 elseif($text == "1*1*2*4"){
    $response = "END "
 }

 elseif($text == "1*1*2*5"){
    $response = "END "
 }

 elseif($text == "1*1*2*6"){
    $response = "END "
 }

 elseif($text == "1*1*2*7"){
    $response = "END "
 }

 elseif($text == "1*1*2*8"){
    $response = "END "
 }

 elseif($text == "1*1*2*9"){
    $response = "END "
 }
 elseif($text == "1*1*2*10"){
    $response = "END "
 }

 elseif($text == "1*1*2*11"){
    $response = "END "
 }

 elseif($text == "1*1*2*12"){
    $response = "END "
 }

 elseif($text == "1*1*2*13"){
    $response = "END "
 }

  elseif($text == "1*1*2*14"){
    $response = "END "
  }

  elseif($text == "1*1*2*15"){
    $response = "END "
  }

  elseif($text == "1*1*2*16"){
    $response = "END "
  }

  elseif($text == "1*1*2*17"){
    $response = "END "
  }

  elseif($text == "1*1*2*18"){
    $response = "END "
  }
  elseif($text == "1*1*2*19"){
    $response = "END "
  }

  elseif($text == "1*1*2*20"){
    $response = "END "
  }

  elseif($text == "1*1*2*21"){
    $response = "END "
  }

  elseif($text == "1*1*2*22"){
    $response = "END "
  }

  elseif($text == "1*1*2*23"){
    $response = "END "
  }

  elseif($text == "1*1*2*24"){
    $response = "END "
  } */

   else if ( $text == "1*1*3" ) {
    // Show all LGA in Akwa Ibom
    $response .= "CON Select your LGA";
    $response .= "1. Abak";
    $response .= "2. Eastern Obolo";
    $response .= "3. Eket";
    $response .= "4. Esit Eket";
    $response .= "5. Essien Udim";
    $response .= "6. Etin Ekpo";
    $response .= "7. Etinan";
    $response .= "8. Ibeno";
    $response .= "9. Ibesikpo Asutan";
    $response .= "10. Ibiomo Ibom";
    $response .= "11. Ika";
    $response .= "12. Ikono";
    $response .= "13. Ikot Abasi";
    $response .= "14. Ikot Ekpene";
    $response .= "15. Ini";
    $response .= "16. Itu";
    $response .= "17. Mbo";
    $response .= "18. Mkpat Enin";
    $response .= "19. Nsit Atai";
    $response .= "20. Nsit Ibom";
    $response .= "21. Nsit Ubium";
    $response .= "22. Obot Akara";
    $response .= "23. Okobo";
    $response .= "24. Onna";
    $response .= "25. Oron";
    $response .= "26. Oruk Anam";
    $response .= "27. Udung Uko";
    $response .= "28. Ukanafun";
    $response .= "29. Uruan";
    $response .= "30. Urue-Offeong";
    $response .= "31. Uyo";
    $response .= "32. Esit Eket (UQUO)";
   }
   /* elseif ($text == "1*1*3*1") {
    $response = "END "
   }

   elseif($text == "1*1*3*2"){
     $response = "END "
   }

   elseif($text == "1*1*3*3"){
    $response = "END "
  }

  elseif($text == "1*1*3*4"){
    $response = "END "
  }

  elseif($text == "1*1*3*5"){
    $response = "END "
  }

  elseif($text == "1*1*3*6"){
    $response = "END "
  }

  elseif($text == "1*1*3*7"){
    $response = "END "
  }

  elseif($text == "1*1*3*8"){
    $response = "END "
  }

  elseif($text == "1*1*3*9"){
    $response = "END "
  }
  elseif($text == "1*1*3*10"){
    $response = "END "
  }

  elseif($text == "1*1*3*11"){
    $response = "END "
  }

  elseif($text == "1*1*3*12"){
    $response = "END "
  }

  elseif($text == "1*1*3*13"){
    $response = "END "
  }

  elseif($text == "1*1*3*14"){
    $response = "END "
  }

  elseif($text == "1*1*3*15"){
    $response = "END "
  }

  elseif($text == "1*1*3*16"){
    $response = "END "
  }

  elseif($text == "1*1*3*17"){
    $response = "END "
  }

  elseif($text == "1*1*3*18"){
    $response = "END "
  }
  elseif($text == "1*1*3*19"){
    $response = "END "
  }

  elseif($text == "1*1*3*20"){
    $response = "END "
  }

  elseif($text == "1*1*3*21"){
    $response = "END "
  }

  elseif($text == "1*1*3*22"){
    $response = "END "
  }

  elseif($text == "1*1*3*23"){
    $response = "END "
  }

  elseif($text == "1*1*3*24"){
    $response = "END "
  }

  elseif($text == "1*1*3*25"){
    $response = "END "
  }

  elseif($text == "1*1*3*26"){
    $response = "END "
  }

  elseif($text == "1*1*3*27"){
    $response = "END "
  }

  elseif($text == "1*1*3*28"){
    $response = "END "
  }

  elseif($text == "1*1*3*29"){
    $response = "END "
  }
  elseif($text == "1*1*3*30"){
    $response = "END "
  }

  elseif($text == "1*1*3*31"){
    $response = "END "
  }

  elseif($text == "1*1*3*32"){
    $response = "END "
  } */


   else if ( $text == "1*1*4" ) {
    // Show all LGA in Anambra
    $response .= "CON Select your LGA";
    $response .= "1. Aguata";
    $response .= "2. Anambra East";
    $response .= "3. Anambra West";
    $response .= "4. Anaocha
