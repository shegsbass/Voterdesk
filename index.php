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
 $response .= "END Fela is a 46 years old Public speaker and business strategist of the part ANN(alliance of new nigeria) \n -BSc. Computer Science and Economics, and MBA/MSc.Business Strategy from Obafemi Awolowo University \n Look up the Mushin Makeover Project";     
 }
 else if($text == "2*2"){
 // Display information of Donald Duke
 $response .= "END Donald is a 56 years old of the party SDP(Social Democratic Party) \n -LLB from Ahmadu Bello University, \n LLM from the University of Pennsylvania \n -Former Commissioner for Finance and Planning \n -Former Governor of Cross River \n -Initiated the Tinapa Free Zone & Resort, and the Calabar Carnival" ;    
 }
 else if($text == "2*3"){
 // Display information of Donald Duke
 $response .= "END Buhari is a 76 years old of party APC(All Progessive Congress)\n -LLB from Ahmadu Bello University, \n LLM from the University of Pennsylvania \n -Former Commissioner for Finance and Planning \n -Former Governor of Cross River \n -Initiated the Tinapa Free Zone & Resort, and the Calabar Carnival" ;    
 }
else if($text == "2*4"){
 // Display information of Kingsley Moghalu
 $response .= "END Kingsley is a 55 years old of YPP(Young People's Party)\n Professor of Practice in International Business and Public Policy at Tufts University\n
-Attended UNN and LSE (PhD)\n
-President of the Institute of Governance and Economic Transformation\n
-Former United Nations official\n
-Former CBN deputy governor";     
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
    $response .= "4. Anaocha";
    $response .= "5. Akwa North";
    $response .= "6. Akwa South";
    $response .= "7. Ayemelum";
    $response .= "8. Dunukofia";
    $response .= "9. Ekwusigo";
    $response .= "10. Idemili North";
    $response .= "11. Idemili South";
    $response .= "12. Ihiala";
    $response .= "13. Njikoka";
    $response .= "14. Nnewi North";
    $response .= "15. Nnewi South";
    $response .= "16. Ogbaru";
    $response .= "17. Onitsha North";
    $response .= "18. Onitsha South";
    $response .= "19. Orumba North";
    $response .= "20. Orumba South";
    $response .= "21. Oyi";
    $response .= "22. Ayamelum";
   }

   /* elseif ($text == "1*1*4*1") {
    $response = "END "
   }

   elseif($text == "1*1*4*2"){
     $response = "END "
   }

   elseif($text == "1*1*4*3"){
    $response = "END "
  }

  elseif($text == "1*1*4*4"){
    $response = "END "
  }

  elseif($text == "1*1*4*5"){
    $response = "END "
  }

  elseif($text == "1*1*4*6"){
    $response = "END "
  }

  elseif($text == "1*1*4*7"){
    $response = "END "
  }

  elseif($text == "1*1*4*8"){
    $response = "END "
  }

  elseif($text == "1*1*4*9"){
    $response = "END "
  }
  elseif($text == "1*1*4*10"){
    $response = "END "
  }

  elseif($text == "1*1*4*11"){
    $response = "END "
  }

  elseif($text == "1*1*4*12"){
    $response = "END "
  }

  elseif($text == "1*1*4*13"){
    $response = "END "
  }

  elseif($text == "1*1*4*14"){
    $response = "END "
  }

  elseif($text == "1*1*4*15"){
    $response = "END "
  }

  elseif($text == "1*1*4*16"){
    $response = "END "
  }

  elseif($text == "1*1*4*17"){
    $response = "END "
  }

  elseif($text == "1*1*4*18"){
    $response = "END "
  }
  elseif($text == "1*1*4*19"){
    $response = "END "
  }

  elseif($text == "1*1*4*20"){
    $response = "END "
  }

  elseif($text == "1*1*4*21"){
    $response = "END "
  }

  elseif($text == "1*1*4*22"){
    $response = "END "
  } */

   /* else if ( $text == "1*2*1" ) {
    // Show all LGA in Bauchi
    $response .= "CON Select your LGA";
    $response .= "1. Alkaleri";
    $response .= "2. Bauchi";
    $response .= "3. Bogoro";
    $response .= "4. Damban";
    $response .= "5. Darazo";
    $response .= "6. Dass";
    $response .= "7. Gamawa";
    $response .= "8. Ganjuwa";
    $response .= "9. Giade";
    $response .= "10. Itas/Gadau";
    $response .= "11. Jama're";
    $response .= "12. Katagum";
    $response .= "13. Kirfi";
    $response .= "14. Misau";
    $response .= "15. Ningi";
    $response .= "16. Shira";
    $response .= "17. Tafawa Balewa";
    $response .= "18. Toro";
    $response .= "19. Warji";
    $response .= "20. Zaki";
    $response .= "21. Jama'are";
    $response .= "22. Dambam";
   }
   elseif ($text == "1*2*1*1") {
    $response = "END "
   }

   elseif($text == "1*2*1*2"){
     $response = "END "
   }

   elseif($text == "1*2*1*3"){
    $response = "END "
  }

  elseif($text == "1*2*1*4"){
    $response = "END "
  }

  elseif($text == "1*2*1*5"){
    $response = "END "
  }

  elseif($text == "1*2*1*6"){
    $response = "END "
  }

  elseif($text == "1*2*1*7"){
    $response = "END "
  }

  elseif($text == "1*2*1*8"){
    $response = "END "
  }

  elseif($text == "1*2*1*9"){
    $response = "END "
  }
  elseif($text == "1*2*1*10"){
    $response = "END "
  }

  elseif($text == "1*2*1*11"){
    $response = "END "
  }

  elseif($text == "1*2*1*12"){
    $response = "END "
  }

  elseif($text == "1*2*1*13"){
    $response = "END "
  }

  elseif($text == "1*2*1*14"){
    $response = "END "
  }

  elseif($text == "1*2*1*15"){
    $response = "END "
  }

  elseif($text == "1*2*1*16"){
    $response = "END "
  }

  elseif($text == "1*2*1*17"){
    $response = "END "
  }

  elseif($text == "1*2*1*18"){
    $response = "END "
  }
  elseif($text == "1*2*1*19"){
    $response = "END "
  }

  elseif($text == "1*2*1*20"){
    $response = "END "
  }

  elseif($text == "1*2*1*21"){
    $response = "END "
  }

  elseif($text == "1*2*1*22"){
    $response = "END "
  }

   else if ( $text == "1*2*2" ) {
    // Show all LGA in Bayelsa
    $response = "CON Select your LGA";
    $response .= "1. Brass";
    $response .= "2. Ekeremor";
    $response .= "3. Kolokuma/Opokuma";
    $response .= "4. Nembe";
    $response .= "5. Ogbia";
    $response .= "6. Sagbama";
    $response .= "7. Southern Ijaw";
    $response .= "8. Yenegoa";
   }
   elseif ($text == "1*2*2*1") {
    $response = "END "
   }
   
   elseif($text == "1*2*2*2"){
     $response = "END "
   }

   elseif($text == "1*2*2*3"){
    $response = "END "
  }

  elseif($text == "1*2*2*4"){
    $response = "END "
  }

  elseif($text == "1*2*2*5"){
    $response = "END "
  }

  elseif($text == "1*2*2*6"){
    $response = "END "
  }

  elseif($text == "1*2*2*7"){
    $response = "END "
  }

  elseif($text == "1*2*2*8"){
    $response = "END "
  }

  


   else if ( $text == "1*2*3" ) {
    // Show all LGA in Benue
    $response = "CON Select your LGA";
    $response .= "1. Ado";
    $response .= "2. Agatu";
    $response .= "3. Apa";
    $response .= "4. Buruku";
    $response .= "5. Gboko";
    $response .= "6. Guma";
    $response .= "7. Gwer East";
    $response .= "8. Gwer West";
    $response .= "9. Kastina Ala";
    $response .= "10. Konshisha";
    $response .= "11. Kwande";
    $response .= "12. Logo";
    $response .= "13. Makurdi";
    $response .= "14. Obi Ngwa";
    $response .= "15. Agbadibo";
    $response .= "16. Oju";
    $response .= "17. Okpokwu";
    $response .= "18. Ohimini";
    $response .= "19. Oturkpo";
    $response .= "20. Tarka";
    $response .= "21. Ukum";
    $response .= "22. Ushongo";
    $response .= "22. Vandeikya";
    $response .= "22. Katsina-Ala";
    $response .= "22. Ogbadibo";
    $response .= "22. Otukpo";
   }
   elseif ($text == "1*2*3*1") {
    $response = "END "
   }

   elseif($text == "1*2*3*2"){
     $response = "END "
   }

   elseif($text == "1*2*3*3"){
    $response = "END "
  }

  elseif($text == "1*2*3*4"){
    $response = "END "
  }

  elseif($text == "1*2*3*5"){
    $response = "END "
  }

  elseif($text == "1*2*3*6"){
    $response = "END "
  }

  elseif($text == "1*2*3*7"){
    $response = "END "
  }

  elseif($text == "1*2*3*8"){
    $response = "END "
  }

  elseif($text == "1*2*3*9"){
    $response = "END "
  }
  elseif($text == "1*2*3*10"){
    $response = "END "
  }

  elseif($text == "1*2*3*11"){
    $response = "END "
  }

  elseif($text == "1*2*3*12"){
    $response = "END "
  }

  elseif($text == "1*2*3*13"){
    $response = "END "
  }

  elseif($text == "1*2*3*14"){
    $response = "END "
  }

  elseif($text == "1*2*3*15"){
    $response = "END "
  }

  elseif($text == "1*2*3*16"){
    $response = "END "
  }

  elseif($text == "1*2*3*17"){
    $response = "END "
  }

  elseif($text == "1*2*3*18"){
    $response = "END "
  }
  elseif($text == "1*2*3*19"){
    $response = "END "
  }

  elseif($text == "1*2*3*20"){
    $response = "END "
  }

  elseif($text == "1*2*3*21"){
    $response = "END "
  }

  elseif($text == "1*2*3*22"){
    $response = "END "
  }

   else if ( $text == "1*2*4" ) {
    // Show all LGA in Bornu
    $response .= "CON Select your LGA";
    $response .= "1. Abadam";
    $response .= "2. Askira/Uba";
    $response .= "3. Bama";
    $response .= "4. Bayo";
    $response .= "5. Biu";
    $response .= "6. Chibok";
    $response .= "7. Damboa";
    $response .= "8. Dikwa";
    $response .= "9. Gubio";
    $response .= "10. Guzamala";
    $response .= "11. Gwoza";
    $response .= "12. Hawul";
    $response .= "13. Jere";
    $response .= "14. Kaga";
    $response .= "15. Kala/Balge";
    $response .= "16. Konduga";
    $response .= "17. Kukawa";
    $response .= "18. Kwaya Kusar";
    $response .= "19. Mafa";
    $response .= "20. Magumeri";
    $response .= "21. Maiduguri";
    $response .= "22. Marte";
    $response .= "23. Mobbar";
    $response .= "24. Monguno";
    $response .= "25. Ngala";
    $response .= "26. Nganzai";
    $response .= "27. Shani";
    $response .= "28. Maiduguri M.C";
    $response .= "29. Kwaya/Kusar";
   }
   elseif ($text == "1*2*4*1") {
    $response = "END "
   }

   elseif($text == "1*2*4*2"){
     $response = "END "
   }

   elseif($text == "1*2*4*3"){
    $response = "END "
  }

  elseif($text == "1*2*4*4"){
    $response = "END "
  }

  elseif($text == "1*2*4*5"){
    $response = "END "
  }

  elseif($text == "1*2*4*6"){
    $response = "END "
  }

  elseif($text == "1*2*4*7"){
    $response = "END "
  }

  elseif($text == "1*2*4*8"){
    $response = "END "
  }

  elseif($text == "1*2*4*9"){
    $response = "END "
  }
  elseif($text == "1*2*4*10"){
    $response = "END "
  }

  elseif($text == "1*2*4*11"){
    $response = "END "
  }

  elseif($text == "1*2*4*12"){
    $response = "END "
  }

  elseif($text == "1*2*4*13"){
    $response = "END "
  }

  elseif($text == "1*2*4*14"){
    $response = "END "
  }

  elseif($text == "1*2*4*15"){
    $response = "END "
  }

  elseif($text == "1*2*4*16"){
    $response = "END "
  }

  elseif($text == "1*2*3*17"){
    $response = "END "
  }

  elseif($text == "1*2*4*18"){
    $response = "END "
  }
  elseif($text == "1*2*4*19"){
    $response = "END "
  }

  elseif($text == "1*2*4*20"){
    $response = "END "
  }

  elseif($text == "1*2*4*21"){
    $response = "END "
  }

  elseif($text == "1*2*4*22"){
    $response = "END "
  }
  elseif($text == "1*2*4*23"){
    $response = "END "
  }
  elseif($text == "1*2*4*24"){
    $response = "END "
  }
  elseif($text == "1*2*4*25"){
    $response = "END "
  }
  elseif($text == "1*2*4*26"){
    $response = "END "
  }
  elseif($text == "1*2*4*27"){
    $response = "END "
  }
  elseif($text == "1*2*4*28"){
    $response = "END "
  }
  elseif($text == "1*2*4*29"){
    $response = "END "
  }

   else if ( $text == "1*3*1" ) {
    // Show all LGA in Cross river
    $response .= "CON Select your LGA";
    $response .= "1. Abi";
    $response .= "2. Akamkpa";
    $response .= "3. Akpabuyo";
    $response .= "4. Bakassi";
    $response .= "5. Bekwara";
    $response .= "6. Biase";
    $response .= "7. Boki";
    $response .= "8. Calabar Municipal";
    $response .= "9. Calabar South";
    $response .= "10. Etung";
    $response .= "11. Ikom";
    $response .= "12. Obanliku";
    $response .= "13. Obubra";
    $response .= "14. Obudu";
    $response .= "15. Odukpani";
    $response .= "16. Ogoja";
    $response .= "17. Yakurr";
    $response .= "18. Yala";
    $response .= "19. Bekwarra";
   }
   elseif ($text == "1*3*1*1") {
    $response = "END "
   }

   elseif($text == "1*3*1*2"){
     $response = "END "
   }

   elseif($text == "1*3*1*3"){
    $response = "END "
  }

  elseif($text == "1*3*1*4"){
    $response = "END "
  }

  elseif($text == "1*3*1*5"){
    $response = "END "
  }

  elseif($text == "1*3*1*6"){
    $response = "END "
  }

  elseif($text == "1*3*1*7"){
    $response = "END "
  }

  elseif($text == "1*3*1*8"){
    $response = "END "
  }

  elseif($text == "1*3*1*9"){
    $response = "END "
  }
  elseif($text == "1*3*1*10"){
    $response = "END "
  }

  elseif($text == "1*3*1*11"){
    $response = "END "
  }

  elseif($text == "1*3*1*12"){
    $response = "END "
  }

  elseif($text == "1*3*1*13"){
    $response = "END "
  }

  elseif($text == "1*3*1*14"){
    $response = "END "
  }

  elseif($text == "1*3*1*15"){
    $response = "END "
  }

  elseif($text == "1*3*1*16"){
    $response = "END "
  }

  elseif($text == "1*3*1*17"){
    $response = "END "
  }

  elseif($text == "1*3*1*18"){
    $response = "END "
  }
  elseif($text == "1*3*1*19"){
    $response = "END "
  }

  }

   else if ( $text == "1*3*2" ) {
    // Show all LGA in Delta
    $response .= "CON Select your LGA";
    $response .= "1. Aniocha North";
    $response .= "2. Aniocha South";
    $response .= "3. Bomadi";
    $response .= "4. Burutu";
    $response .= "5. Ethiope East";
    $response .= "6. Ethiope West";
    $response .= "7. Ika North East";
    $response .= "8. Ika South";
    $response .= "9. Isoko North";
    $response .= "10. Isoko South";
    $response .= "11. Ndokwa East";
    $response .= "12. Ndokwa West";
    $response .= "13. Okpe";
    $response .= "14. Oshimili North";
    $response .= "15. Oshimili South";
    $response .= "16. Patani";
    $response .= "17. Sapele";
    $response .= "18. Udung Uko";
    $response .= "19. Ughelli North";
    $response .= "20. Ughelli South";
    $response .= "21. Ukwani";
    $response .= "22. Uvwie";
    $response .= "23. Warri South";
    $response .= "24. Warri South";
    $response .= "25. Warri South West";
   }
   elseif ($text == "1*3*2*1") {
    $response = "END "
   }

   elseif($text == "1*3*2*2"){
     $response = "END "
   }

   elseif($text == "1*3*2*3"){
    $response = "END "
  }

  elseif($text == "1*3*2*4"){
    $response = "END "
  }

  elseif($text == "1*3*2*5"){
    $response = "END "
  }

  elseif($text == "1*3*2*6"){
    $response = "END "
  }

  elseif($text == "1*3*2*7"){
    $response = "END "
  }

  elseif($text == "1*3*2*8"){
    $response = "END "
  }

  elseif($text == "1*3*2*9"){
    $response = "END "
  }
  elseif($text == "1*3*2*10"){
    $response = "END "
  }

  elseif($text == "1*3*2*11"){
    $response = "END "
  }

  elseif($text == "1*3*2*12"){
    $response = "END "
  }

  elseif($text == "1*3*2*13"){
    $response = "END "
  }

  elseif($text == "1*3*2*14"){
    $response = "END "
  }

  elseif($text == "1*3*2*15"){
    $response = "END "
  }

  elseif($text == "1*3*2*16"){
    $response = "END "
  }

  elseif($text == "1*3*2*17"){
    $response = "END "
  }

  elseif($text == "1*3*2*18"){
    $response = "END "
  }
  elseif($text == "1*3*2*19"){
    $response = "END "
  }
  elseif($text == "1*3*2*20"){
    $response = "END "
  }
  elseif($text == "1*3*2*21"){
    $response = "END "
  }
  elseif($text == "1*3*2*22"){
    $response = "END "
  }
  elseif($text == "1*3*2*23"){
    $response = "END "
  }
  elseif($text == "1*3*2*24"){
    $response = "END "
  }
  elseif($text == "1*3*2*25"){
    $response = "END "
  }
   else if ( $text == "1*4*1" ) {
    // Show all LGA in Ebonyi
    $response = "CON Select your LGA";
    $response .= "1. Abakaliki";
    $response .= "2. Afikpo North";
    $response .= "3. Afikpo South";
    $response .= "4. Ebonyi";
    $response .= "5. Ezza North";
    $response .= "6. Ezza South";
    $response .= "7. Ikwo";
    $response .= "8. Ishielu";
    $response .= "9. Ivo";
    $response .= "10. Izzi";
    $response .= "11. Ohaozara";
    $response .= "12. Ohaukwu";
    $response .= "13. Onicha";
   }
   elseif ($text == "1*4*1*1") {
    $response = "END "
   }

   elseif($text == "1*4*1*2"){
     $response = "END "
   }

   elseif($text == "1*4*1*3"){
    $response = "END "
  }

  elseif($text == "1*4*1*4"){
    $response = "END "
  }

  elseif($text == "1*4*1*5"){
    $response = "END "
  }

  elseif($text == "1*4*1*6"){
    $response = "END "
  }

  elseif($text == "1*4*1*7"){
    $response = "END "
  }

  elseif($text == "1*4*1*8"){
    $response = "END "
  }

  elseif($text == "1*4*1*9"){
    $response = "END "
  }
  elseif($text == "1*4*1*10"){
    $response = "END "
  }

  elseif($text == "1*4*1*11"){
    $response = "END "
  }

  elseif($text == "1*4*1*12"){
    $response = "END "
  }

  elseif($text == "1*4*1*13"){
    $response = "END "
  }

   else if ( $text == "1*4*2" ) {
    // Show all LGA in Edo
    $response = "CON Select your LGA";
    $response .= "1. Akoko-Edo";
    $response .= "2. Egor";
    $response .= "3. Esan Central";
    $response .= "4. Essan North East";
    $response .= "5. Essan South East";
    $response .= "6. Essan West";
    $response .= "7. Etsako Central";
    $response .= "8. Etsako East";
    $response .= "9. Etsako West";
    $response .= "10. Igueben";
    $response .= "11. Ikpoba Okha";
    $response .= "12. Oredo";
    $response .= "13. Orhionmwon";
    $response .= "14. Ovia North East";
    $response .= "15. Ovia South West";
    $response .= "16. Owan East";
    $response .= "17. Owan West";
    $response .= "18. Uhunmwonde";
    $response .= "19. Ikpoba/Okha";
   }
   elseif ($text == "1*4*2*1") {
    $response = "END "
   }

   elseif($text == "1*4*2*2"){
     $response = "END "
   }

   elseif($text == "1*4*2*3"){
    $response = "END "
  }

  elseif($text == "1*4*2*4"){
    $response = "END "
  }

  elseif($text == "1*4*2*5"){
    $response = "END "
  }

  elseif($text == "1*4*2*6"){
    $response = "END "
  }

  elseif($text == "1*4*2*7"){
    $response = "END "
  }

  elseif($text == "1*4*2*8"){
    $response = "END "
  }

  elseif($text == "1*4*2*9"){
    $response = "END "
  }
  elseif($text == "1*4*2*10"){
    $response = "END "
  }

  elseif($text == "1*4*2*11"){
    $response = "END "
  }

  elseif($text == "1*4*2*12"){
    $response = "END "
  }

  elseif($text == "1*4*2*13"){
    $response = "END "
  }

  elseif($text == "1*4*2*14"){
    $response = "END "
  }

  elseif($text == "1*4*2*15"){
    $response = "END "
  }

  elseif($text == "1*4*2*16"){
    $response = "END "
  }

  elseif($text == "1*4*2*17"){
    $response = "END "
  }

  elseif($text == "1*4*2*18"){
    $response = "END "
  }
  elseif($text == "1*4*2*19"){
    $response = "END "
  }


   else if ( $text == "1*4*3" ) {
    // Show all LGA in Ekiti
    $response = "CON Select your LGA";
    $response .= "1. Ado Ekiti";
    $response .= "2. Aiyekire";
    $response .= "3. Efon";
    $response .= "4. Ekiti East";
    $response .= "5. Ekiti South West";
    $response .= "6. Ekiti West";
    $response .= "7. Emure";
    $response .= "8. Ido Osi";
    $response .= "9. Ijero";
    $response .= "10. Ikere";
    $response .= "11. Ikole";
    $response .= "12. Ilejemeji";
    $response .= "13. Irepodun/Ifelodun";
    $response .= "14. Ise/Orun";
    $response .= "15. Mopa";
    $response .= "16. Oye";
    $response .= "17. Ilejemeje";
    $response .= "18. Gbonyin";
   }
   elseif ($text == "1*4*3*1") {
    $response = "END "
   }

   elseif($text == "1*4*3*2"){
     $response = "END "
   }

   elseif($text == "1*4*3*3"){
    $response = "END "
  }

  elseif($text == "1*4*3*4"){
    $response = "END "
  }

  elseif($text == "1*4*3*5"){
    $response = "END "
  }

  elseif($text == "1*4*3*6"){
    $response = "END "
  }

  elseif($text == "1*4*3*7"){
    $response = "END "
  }

  elseif($text == "1*4*3*8"){
    $response = "END "
  }

  elseif($text == "1*4*3*9"){
    $response = "END "
  }
  elseif($text == "1*4*3*10"){
    $response = "END "
  }

  elseif($text == "1*4*3*11"){
    $response = "END "
  }

  elseif($text == "1*4*3*12"){
    $response = "END "
  }

  elseif($text == "1*4*3*13"){
    $response = "END "
  }
  elseif($text == "1*4*3*14"){
    $response = "END "
  }

  elseif($text == "1*4*3*15"){
    $response = "END "
  }

  elseif($text == "1*4*3*16"){
    $response = "END "
  }

  elseif($text == "1*4*3*17"){
    $response = "END "
  }

  elseif($text == "1*4*3*18"){
    $response = "END "
  }
  


   else if ( $text == "1*4*4" ) {
    // Show all LGA in Enugu
    $response = "CON Select your LGA";
    $response .= "1. Aninri";
    $response .= "2. Awgu";
    $response .= "3. Enugu East";
    $response .= "4. Enugu North";
    $response .= "5. Enugu South";
    $response .= "6. Ezeagu";
    $response .= "7. Igbo-Etiti";
    $response .= "8. Igbo-Eze North";
    $response .= "9. Igbo-Eze South";
    $response .= "10. Isi-Uzo";
    $response .= "11. Nkanu East";
    $response .= "12. Nkanu West";
    $response .= "13. Nsukka";
    $response .= "14. Oji-River";
    $response .= "15. Udenu";
    $response .= "16. Udi";
    $response .= "17. Uzo-Uwani";
    $response .= "18. Igbo Etiti";
   }
   elseif ($text == "1*4*4*1") {
    $response = "END "
   }

   elseif($text == "1*4*4*2"){
     $response = "END "
   }

   elseif($text == "1*4*4*3"){
    $response = "END "
  }

  elseif($text == "1*4*4*4"){
    $response = "END "
  }

  elseif($text == "1*4*4*5"){
    $response = "END "
  }

  elseif($text == "1*4*4*6"){
    $response = "END "
  }

  elseif($text == "1*4*4*7"){
    $response = "END "
  }

  elseif($text == "1*4*4*8"){
    $response = "END "
  }

  elseif($text == "1*4*4*9"){
    $response = "END "
  }
  elseif($text == "1*4*4*10"){
    $response = "END "
  }

  elseif($text == "1*4*4*11"){
    $response = "END "
  }

  elseif($text == "1*4*4*12"){
    $response = "END "
  }

  elseif($text == "1*4*4*13"){
    $response = "END "
  }
  elseif($text == "1*4*4*14"){
    $response = "END "
  }

  elseif($text == "1*4*4*15"){
    $response = "END "
  }

  elseif($text == "1*4*4*16"){
    $response = "END "
  }

  elseif($text == "1*4*4*17"){
    $response = "END "
  }

  elseif($text == "1*4*4*18"){
    $response = "END "
  }

   else if ( $text == "1*5*1" ) {
    // Show all LGA in Abuja
    $response .= "CON Select your LGA";
    $response .= "1. Abaji";
    $response .= "2. Abuja Municipal";
    $response .= "3. Bwari";
    $response .= "4. Gwagwalada";
    $response .= "5. Kuje";
    $response .= "6. Kwali";
   }
   elseif ($text == "1*5*1*1") {
    $response = "END "
   }

   elseif($text == "1*5*1*2"){
     $response = "END "
   }

   elseif($text == "1*5*1*3"){
    $response = "END "
  }

  elseif($text == "1*5*1*4"){
    $response = "END "
  }

  elseif($text == "1*5*1*5"){
    $response = "END "
  }

  elseif($text == "1*5*1*6"){
    $response = "END "
  }
    
   else if ( $text == "1*5*2" ) {
    // Show all LGA in Gombe
    $response .= "CON Select your LGA";
    $response .= "1. Akko";
    $response .= "2. Balanga";
    $response .= "3. Billiri";
    $response .= "4. Dukku";
    $response .= "5. Dunakaye";
    $response .= "6. Gombe";
    $response .= "7. Kaltungo";
    $response .= "7. Kwami";
    $response .= "8. Nafada/Bajoga";
    $response .= "9. Shomgom";
    $response .= "10. Yamaltu/Deba";
   }
   elseif ($text == "1*5*2*1") {
    $response = "END "
   }

   elseif($text == "1*5*2*2"){
     $response = "END "
   }

   elseif($text == "1*5*2*3"){
    $response = "END "
  }

  elseif($text == "1*5*2*4"){
    $response = "END "
  }

  elseif($text == "1*5*2*5"){
    $response = "END "
  }

  elseif($text == "1*5*2*6"){
    $response = "END "
  }

  elseif($text == "1*5*2*7"){
    $response = "END "
  }

  elseif($text == "1*5*2*8"){
    $response = "END "
  }

  elseif($text == "1*5*2*9"){
    $response = "END "
  }
  elseif($text == "1*5*2*10"){
    $response = "END "
  }
 */

 else if ( $text == "1*5*3" ) {
    // Show all LGA in Imo
    $response = "CON Select your LGA\n";
    $response .= "1. Aboh-Mbaise\n";
    $response .= "2. Ahiazu-Mbaise\n";
    $response .= "3. Ehime-Mbano\n";
    $response .= "4. Ezinihitte\n";
    $response .= "5. Ideato North\n";
    $response .= "6. Ideato South\n";
    $response .= "7. Ihitte/Uboma\n";
    $response .= "8. Ikeduru\n";
    $response .= "9. Isiala Mbano\n";
    $response .= "10. Isu\n";
    $response .= "11. Mbaitoli\n";
    $response .= "12. Ngor-Okpala\n";
    $response .= "13. Njaba\n";
    $response .= "14. Nkwerre\n";
    $response .= "15. Nwangele\n";
    $response .= "16. Obowo\n";
    $response .= "17. Oguta\n";
    $response .= "18. Ohaji/Egbema\n";
    $response .= "19. Okigwe\n";
    $response .= "20. Onuimo\n";
    $response .= "21. Orlu\n";
    $response .= "22. Orsu\n";
    $response .= "23. Oru East\n";
    $response .= "24. Oru West\n";
    $response .= "25. Owerri-Municipal\n";
    $response .= "26. Owerri North\n";
    $response .= "27. Owerri West\n";
    $response .= "00. CHECK FOR DANGER ALERT IN IMO\n";    
 }
elseif ($text == "1*5*3*00"){
  $response .= "END Sorry, there is no current danger alert, check later.\n Thank you \n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
 else if ($text == "1*5*3*1") {  
    $response = "CON WARDS IN ABOH MBAISE\n";
    $response .= "1. Amuzu \n";
    $response .= "2. enyiogugu\n";
    $response .= "3. ibeku\n";
    $response .= "4. lagwa\n";
    $response .= "5. lorji\n";
    $response .= "6. mbutu\n";
    $response .= "7. Nguru-ahiato\n";
    $response .= "8. Nguru-nweke\n";
    $response .= "9. Nguru-Nwenkwo\n";
    $response .= "10. Umuhu\n";
    $response .= "11. Uvuru\n";
    $response .= "12. Uvuru 2\n";
 }
 elseif ($text == "1*5*3*1*1") {
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
 elseif ($text == "1*5*3*1*1*1"){
  $response .= "END Your voting point is Umuogu Hall.\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*2"){
  $response .= "END Your voting point is Community School Umuogwu.\n \nVote with Respectability.\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*3"){
  $response .= "END Your voting point is Community School UUmuebee.\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*4"){
  $response .= "END Your voting point is Nriukwu Civil Hall.\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*5"){
  $response .= "END Your voting point is Central School Amator.\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*6"){
  $response .= "END Your voting point is Central School Amator.\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*7"){
  $response .= "END Your voting point is Town School Amuzu.\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*8"){
  $response .= "END Your voting point is Central town Amuzu\n \n Do well to vote with knowledge \n#Decide2019";
}
elseif ($text == "1*5*3*1*1*9"){
  $response = "END Your voting point is Central School Nriukwu\n \n Vote not Fight. \n#Decide2019";
}
elseif ($text == "1*5*3*1*1*10"){
  $response .= "END Your voting point is Umuodaa Village Hall\n \n Vote with Respectability.\n#Decide2019";
}
elseif ($text == "1*5*3*1*1*11"){
  $response .= "END Your voting point is Amaiyi Nriukwu (St John)\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
// all about amuzu ward

// this is for enyiogugu
elseif ($text == "1*5*3*1*2") {
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
  $response .= "12. 012 \n";
  $response .= "13. 013 \n";
  $response .= "14. 014 \n";
  $response .= "15. 015 \n";
  $response .= "16. 016 \n";
  $response .= "17. 017 \n";
}
elseif ($text == "1*5*3*1*2*1"){
 $response .= "END Your voting point is Aladinma Umuelem Hall\n \nVote with Respectability.\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*2"){
  $response .= "END Your voting point is Okwuaku Hall\n \nVote not fight\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*3"){
  $response .= "END Your voting point is Umunkwo Village hall\n \n Do well to vote with knowledge\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*4"){
   $response .= "END Your voting point is Ibeku Hall\n \n Do well to vote with knowledge\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*5"){
   $response .= "END Your voting point is Community School Eziala\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*6"){
  $response .= "END Your voting point is Eziala Hall\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*7"){
  $response .= "END Your voting point is Community School Umugaragu\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*8"){
   $response .= "END Your voting point is Ibeku Hall\n \n Do well to vote with knowledge\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*9"){
  $response .= "END Your voting point is Umueziukwu Village Hall\n \n Vote not fight\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*10"){
   $response .= "END Your voting point is Orie Umueze Hall\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*2*11"){
  $response .= "END Your voting point is Community School Oboama\n \n Do well to vote with knowledge\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*12"){
  $response .= "END Your voting point is Amma-Iyala Hall\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*13"){
   $response .= "END Your voting point is Village Square (Opp. Block Rosary Hall)\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*14"){
   $response .= "END Your voting point is Anokam Hall\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*2*15"){
   $response .= "END Your voting point is Community School Egbelu\n \n Do well to vote with knowledge\n#Decide2019";
}     
elseif ($text == "1*5*3*1*2*16"){
  $response .= "END Your voting point is Umuoye Hall\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*2*17"){
   $response .= "END Your voting point is Central School Egbelu Umuhu\n \n Do well to vote with knowledge\n#Decide2019";
}
// all about enyiogugu

// this is for ward 3
elseif ($text == "1*5*3*1*3") {
  $response = "CON select the last 3 codes of your PU \n";
  $response .= "1. 001 \n";
  $response .= "2. 002 \n";
  $response .= "3. 003 \n";
  $response .= "4. 004 \n";
  $response .= "5. 006 \n";
  $response .= "6. 006 \n";
  $response .= "7. 007 \n";
  $response .= "8. 008 \n";
}

elseif ($text == "1*5*3*1*3*1"){
   $response .= "END Your voting point is Oborji Town Hall\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*3*2"){
  $response .= "END Your voting point is Akuma Town Hall\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*3*3"){
  $response .= "END Your voting point is Town School Ibeku\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*3*4"){
   $response .= "END Your voting point is Community School Ibeku\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*3*5"){
  $response .= "END Your voting point is Umuba Town Hall\n \n Do well to vote with knowledge\n#Decide2019";
}
elseif ($text == "1*5*3*1*3*6"){
  $response .= "END Your voting point is Obom Square, Akuma\n \n Do well to vote with knowledge\n#Decide2019";
  }
elseif ($text == "1*5*3*1*3*7"){
  $response .= "END Your voting point is Eke Ibeku Market Square\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*3*8"){
  $response .= "END Your voting point is Umuokwu Town Hall\n \nVote not Fight.\n#Decide2019";
}
// all about ward 3

//This is for ward 4
elseif ($text == "1*5*3*1*4") {
  $response = "CON select the last 3 codes of your PU \n";
  $response .= "1. 001 \n";
  $response .= "2. 002 \n";
  $response .= "3. 003 \n";
  $response .= "4. 004 \n";
  $response .= "5. 006 \n";
  $response .= "6. 006 \n";
  $response .= "7. 007 \n";
}
elseif ($text == "1*5*3*1*4*1"){
   $response .= "END Your voting point is Group School Lagwa\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*4*2"){
  $response .= "END Your voting point is Obo Town Hall\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*4*3"){
   $response .= "END Your voting point is Central School Okwuato\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*4*4"){
  $response .= "END Your voting point is Amaubeagba Hall\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*4*5"){
   $response .= "END Your voting point is Umuabazu Town Hall\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*4*6"){
  $response .= "END Your voting point is Umunoke Town Hall\n \n Don't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*1*4*7"){
 $response .= "END Your voting point is Okwuato Town Hall\n \n Don't Sell your Vote\n#Decide2019";
}
// All about ward 4

// This is for ward 5
elseif ($text == "1*5*3*1*5") {
  $response = "CON select the last 3 codes of your PU \n";
  $response .= "1. 001 \n";
  $response .= "2. 002 \n";
  $response .= "3. 003 \n";
  $response .= "4. 004 \n";
  $response .= "5. 006 \n";
  $response .= "6. 006 \n";
}
elseif ($text == "1*5*3*1*5*1"){
  $response .= "END Your voting point is Community School Lorji I\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*5*2"){
   $response .= "END Your voting point is Community School Lorji II\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*5*3"){
  $response .= "END Your voting point is Community School Lorji III\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*1*5*4"){
  $pulling = "Central School Lorji I";
  $response .= "END Your voting point is Umuabazu Town Hall\n \nVote responsibly \n#Decide2019";
}
elseif ($text == "1*5*3*1*5*5"){
  $pulling = "Central School Lorji II";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*5*6"){
  $pulling = "Central School Lorji III";
  $response == "END Your voting point is $pulling";
}
// all about ward 5

// This is for ward 6
elseif ($text == "1*5*3*1*6") {
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
  $response .= "12. 012 \n";
  $response .= "13. 013 \n";
  $response .= "14. 014 \n";
  $response .= "15. 015 \n";
  $response .= "16. 016 \n";
  $response .= "17. 017 \n";
  $response .= "18. 018 \n";
}
elseif ($text == "1*5*3*1*6*1"){
  $pulling = "Isiala Hall";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*2"){
  $pulling = "Community School Ekenguru";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*3"){
  $pulling = "Awaka Hall";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*4"){
  $pulling = "Amawo Town Hall";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*5"){
  $pulling = "Community School Mbutu";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*6"){
  $pulling = "Ozara Village Hall";
  $response .= "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*7"){
  $pulling = "Central School, Mbutu";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*8"){
  $pulling = "Ubahi Village Square I";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*9"){
  $pulling = "Ogbor Village Square";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*10"){
  $pulling = "Town School, Mbutu";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*11"){
  $pulling = "Ihitte Oha Village Hall";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*12"){
  $pulling = "Group School, Mbutu";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*13"){
  $pulling = "Umueze Town Hall";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*14"){
  $pulling = "Egbelubi Village Square";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*15"){
  $pulling = "Obokwu Village Square";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*16"){
  $pulling = "Ubahi Village Square II";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*17"){
  $pulling = "Umudim Village Square";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*6*18"){
  $pulling = "Mgbaraoji Village Square";
  $response == "END Your voting point is $pulling";
}
// all about ward 6

// this is for ward 7
elseif ($text == "1*5*3*1*7") {
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
elseif ($text == "1*5*3*1*7*1"){
  $pulling = "Community School Umuezii I";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*2"){
  $pulling = "Community School Umuezii II ";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*3"){
  $pulling = "Community School Obabi I";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*4"){
  $pulling = "Community School Obabi II";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*5"){
  $pulling = "Town School Umuanuma I";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*6"){
  $pulling = "Town School Umuanuma II";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*7"){
  $pulling = "Central School Nguru";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*8"){
  $pulling = "Community School Eziala na Umuoda I";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*9"){
  $pulling = "Community School Eziala na Umuoda II";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*10"){
  $pulling = "Community School Umuanuma";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*11"){
  $pulling = "Community School Eziala";
  $response == "END Your voting point is $pulling";
}
elseif ($text == "1*5*3*1*7*12"){
  $pulling = "Community School Nguru";
  $response == "END Your voting point is $pulling";
}
// all about ward 7

//This is for ward 8
elseif ($text == "1*5*3*1*8") {
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
  $response .= "12. 012 \n";
  $response .= "13. 013 \n";
}
  elseif ($text == "1*5*3*1*8*1"){
    $pulling = "Community School, Amaohuru";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*2"){
    $pulling = "Ukaonu Ugaa Hall";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*3"){
    $pulling = "Umuezeama Hall";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*4"){
    $pulling = "Chokoneze Hall";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*5"){
    $pulling = "Group School Ezuhu";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*6"){
    $pulling = "Town School Umuamaechi";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*7"){
    $pulling = "Community School Egberede";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*8"){
    $pulling = "Community School Eziala";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*9"){
    $pulling = "Community School Okwu Nguru";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*10"){
    $pulling = "Awo Block Rosary Square";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*11"){
    $pulling = "Amako Hall";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*12"){
    $pulling = "Ukwuegbo Square";
    $response == "END Your voting point is $pulling";
  }
  elseif ($text == "1*5*3*1*8*13"){
    $pulling = "Umungoma Hall";
    $response == "END Your voting point is $pulling";
  }
 // all about ward 8

 // this is for ward 9
  elseif ($text == "1*5*3*1*9") {
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
    $response .= "12. 012 \n";
  }
    elseif ($text == "1*5*3*1*9*1"){
      $pulling = "Umuoka-umualake hall";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*2"){
      $pulling = "UMUCHIEZE Hall 1";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*3"){
      $pulling = "UMUCHIEZE Hall 2";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*4"){
      $pulling = "UMUBOCHI Hall";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*5"){
      $pulling = "COMMUNITY SCHOOL OPARA";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*6"){
      $pulling = "ONUGOTU HALL";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*7"){
      $pulling = "OBOKWE HALL";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*8"){
      $pulling = "UMUDIAWA HALL";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*9"){
      $pulling = "OKPURUAWA HALL";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*10"){
      $pulling = "UMULOLO VILLAGE SQUARE";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*11"){
      $pulling = "COMMUNITY SCHOOL OGBOR";
      $response == "END Your voting point is $pulling";
    }
    elseif ($text == "1*5*3*1*9*12"){
      $pulling = "OGWU OKWU PRIMARY SCHOOL";
      $response == "END Your voting point is $pulling";
    }
    // all about ward 9 
    
    // THIS IS FOR WARD 10
    elseif ($text == "1*5*3*1*10") {
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
      }
      elseif ($text == "1*5*3*1*10*1"){
        $pulling = "TOWN SCHOOL UMUHU";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*2"){
        $pulling = "UMUOMA TOWN HALL";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*3"){
        $pulling = "UMUKABIA HALL";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*4"){
        $pulling = "UMUOFUGA Hall";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*5"){
        $pulling = "EZIALA TOWN HALL";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*6"){
        $pulling = "COMMUNITY SCHOOL UMUHU";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*7"){
        $pulling = "OKWUKWU HALL";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*8"){
        $pulling = "EZUHU TOWN HALL";
        $response == "END Your voting point is $pulling";
      }
      elseif ($text == "1*5*3*1*10*9"){
        $pulling = "CENTRAL SCHOOL OKWUATOR";
        $response == "END Your voting point is $pulling";
      }
      // ALL ABOUT THE WARD

      // THIS IS FOR WARD 11
      elseif ($text == "1*5*3*1*11") {
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
        elseif ($text == "1*5*3*1*11*1"){
          $pulling = "AKPOTU hall";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*2"){
          $pulling = "COMMUNITY SCHOOL EGBELU";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*3"){
          $pulling = "AMAISII AMANO HALL";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*4"){
          $pulling = "UMUAGHARA HALL";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*5"){
          $pulling = "COMMUNITY SCHOOL OKWUNAKUWA";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*6"){
          $pulling = "UMUOROBARA HALL";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*7"){
          $pulling = "EZIALA AMAISII AMANO HALL";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*8"){
          $pulling = "UMUNOBI UMUOSHI VILLAGE HALL";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*9"){
          $pulling = "UMUOSHI VILLAGE HALL";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*10"){
          $pulling = "COMMUNITY SCHOOL NDIGBO";
          $response == "END Your voting point is $pulling";
        }
        elseif ($text == "1*5*3*1*11*11"){
          $pulling = "UMUMBIE HALL";
          $response == "END Your voting point is $pulling";
        }
        // END OF WARD 11

        // THIS IS FOR WARD 12
        elseif ($text == "1*5*3*1*12") {
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
          }       
          elseif ($text == "1*5*3*1*12*1"){
            $pulling = "UMUOKEHIE hall";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*2"){
            $pulling = "UMUDINKA HALL";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*3"){
            $pulling = "UMUDINKA HALL 2";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*4"){
            $pulling = "UMUACHALU HALL 1";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*5"){
            $pulling = "UMUACHALU HALL 2";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*6"){
            $pulling = "COMMUNITY SCHOOL UMUOKEHIE";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*7"){
            $pulling = "TOWN SCHOOL OGBOR";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*8"){
            $pulling = "CENTRAL SCHOOL OGBOR 1";
            $response == "END Your voting point is $pulling";
          }
          elseif ($text == "1*5*3*1*12*9"){
            $pulling = "CENTRAL SCHOOL OGBOR 2";
            $response == "END Your voting point is $pulling";
          }
          
 elseif($text == "1*5*3*2"){
    $response = "select an option \n";
    $response .= "0. DANGER ALERT in AHIAZU MBAISE\n";   
    $response = "WARDS IN AHIAZU MBAISE\n";  
    $response .= "0. DANGER ALERT\n";  
    $response .= "1. ihenworie\n";
    $response .= "2. mpam\n";
    $response .= "3. nnarambia\n";
    $response .= "4. obohi\n";
    $response .= "5. ogbe 1\n";
    $response .= "6. ogboro\n";
    $response .= "7. okirika nweke\n";
    $response .= "8. okirika nwenkwo\n";
    $response .= "9. oparanadim\n";
    $response .= "10. oru-na-lude\n";
    $response .= "11. otulu\n";
    $response .= "12. umunumo\n"; 
 }

 elseif($text == "1*5*3*3"){ 
    $response = "select an option \n";
    $response .= "0. DANGER ALERT in EHIME MBANO\n";    
    $response = "WARDS IN EHIME MBANO\n";  
    $response .= "1. agbaja\n";
    $response .= "2. nsu 'a' ikpe\n";
    $response .= "3. nsu 'b' ihitte\n";
    $response .= "4. nzerem\n";
    $response .= "5. umualumaku\n";
    $response .= "6. umueze\n";
    $response .= "7. umueze 2\n";
    $response .= "8. umuezeala\n";
    $response .= "9. umuakabia\n";
    $response .= "10. umunakanu\n";
    $response .= "11. umunumo\n";
 }

 elseif($text == "1*5*3*4"){
    $response = "select an option \n";
    $response .= "0. DANGER ALERT in EZINIHHITE MBAISE\n";   
    $response = "WARDS IN EZINIHHITE MBAISE\n";
    $response .= "1. amumara\n";
    $response .= "2. akpodim\n";
    $response .= "3. eziudo\n";
    $response .= "4. ihitte\n";
    $response .= "5. itu\n";
    $response .= "6. umunama\n";
    $response .= "7. ezeagbogu\n";
    $response .= "8. onicha\n";
    $response .= "9. onicha 2\n";
    $response .= "10. onicha 3\n";
    $response .= "11. onich 4\n";
    $response .= "12. udo na obizi\n";
 }

 elseif($text == "1*5*3*5"){
    $response = "select an option \n";
    $response .= "0. DANGER ALERT in IDEATO NORTH\n";   
    $response = "WARDS IN IDEATO NORTH\n";
    $response .= "1. akpulu\n";
    $response .= "2. akwu owerre\n";
    $response .= "3. ozu\n";
    $response .= "4. isiokpo\n";
    $response .= "5. izuogu\n";
    $response .= "6. izuogu 2\n";
    $response .= "7. Ndi iheme arondizuogo\n";
    $response .= "8. ndimoko\n";
    $response .= "9. obodoukwu\n";
    $response .= "10. osina\n";
    $response .= "11. umuago\n";
    $response .= "12. umuezeaga\n";
    $response .= "13. umuopia\n";
    $response .= "14. uzii\n";
 }

 elseif($text == "1*5*3*6"){
  $response = "select an option \n";
  $response .= "0. DANGER ALERT in IDEATO SOUTH\n";     
  $response = "WARDS IN IDEATO SOUTH\n";
  $response .= "1. AMANATOR\n";
  $response .= "2. DIKENAFAI\n";
  $response .= "3. ISIEKENESHI\n";
  $response .= "4. NTUEKE\n";
  $response .= "5. OBIOHA\n";
  $response .= "6. OGBOKO\n";
  $response .= "7. OGBOKO 2\n";
  $response .= "8. UGBELLE\n";
  $response .= "9. UMUAKAM\n";
  $response .= "10. UMUCHIMA\n";
  $response .= "11. UMUMA ISIAKU\n";
  $response .= "12. UMUOBOM\n";
 }

 elseif($text == "1*5*3*7"){
  $response = "select an option \n";
  $response .= "0. DANGER ALERT in IHITTE/UBOMA\n";     
  $response = "WARDS IN IHITTE/UBOMA";
  $response .= "1. ABUEKE\n";
  $response .= "2. AMAINYI\n";
  $response .= "3. AMAKOHIA\n";
  $response .= "4. ATONERIM\n";
  $response .= "5. AWUCHINUMO\n";
  $response .= "6. DIMNEZE\n";
  $response .= "7. IKPEREJERE\n";
  $response .= "8. OKATA\n";
  $response .= "9. UMUEZEGWU \n";
  $response .= "10. UMUIHI\n";
 }

 elseif($text == "1*5*3*8"){
 $response = "select an option \n";
    $response .= "0. DANGER ALERT in IKEDURU\n";      
  $response = "WARDS IN IKEDURU";
  $response .= "1. AKABO\n";
  $response .= "2. AMAIMO\n";
  $response .= "3. AMAKOHIA\n";
  $response .= "4. AMATTA\n";
  $response .= "5. ATTA 1\n";
  $response .= "6. ATTA 2\n";
  $response .= "7. AVUVU\n";
  $response .= "8. IHO\n";
  $response .= "9. UMUDIM \n";
  $response .= "10. NGUGO/IKEMBARA\n";
  $response .= "11. UGIRIKE \n";
  $response .= "12. UZOAGBA\n";
 }

 elseif($text == "1*5*3*9"){
  $response = "select an option \n";
  $response .= "0. DANGER ALERT in ISIALA MBANO\n";     
  $response = "CON WARDS IN ISIALA MBANO";
  $response .= "1. AMARAKU\n";
  $response .= "2. AMAUZARI\n";
  $response .= "3. IBEME\n";
  $response .= "4. OBOLLO\n";
  $response .= "5. OGBOR\n";
  $response .= "6. OSU-ACHARA\n";
  $response .= "7. OSU-OWERRE\n";
  $response .= "8. OSU-OWERRE\n";
  $response .= "9. OSUAMA\n";
  $response .= "10. UGIRI\n";
  $response .= "11. UMUNKWO \n";
  $response .= "12. UMUOZU\n";
 }

 elseif($text == "1*5*3*10"){
  $response = "select an option \n";
    $response .= "0. DANGER ALERT in ISU(UMUNDUNGA)\n";     
  $response = "CON WARDS IN ISU(UMUNDUGBA)\n";
  $response .= "1. AMANDUGBA\n";
  $response .= "2. AMANDUGBA 2\n";
  $response .= "3. AMURIE OMANZE 1\n";
  $response .= "4. AMURIE OMANZE 2\n";
  $response .= "5. EKWE 1\n";
  $response .= "6. EKWE 2\n";
  $response .= "7. ISU-NJABA 1\n";
  $response .= "8. ISU-NJABA 2\n";
  $response .= "9. ISU-NJABA 3 \n";
  $response .= "10. UMUNDUGBA\n";
  $response .= "11. UMUNDUGBA 2 \n";
 }

  elseif($text == "1*5*3*11"){
    //Wards in Mbaitoli
  $response = "select an option \n";
    $response .= "0. DANGER ALERT in MBAITOLI\n";      
  $response = "CON Wards in Mbaitoli(Nwaorieubi)\n";
  $response .= "1. Afara/Eziama\n";
  $response .= "2. Amaike Mbieri\n";
  $response .= "3. Ezinihitie Mbieri\n";
  $response .= "4. Ifakala\n";
  $response .= "5. Ogbaku\n";
  $response .= "6. Ogwa I\n";
  $response .= "7. Ogwa II\n";
  $response .= "8. Orodo ‘A’\n";
  $response .= "9. Orodo ‘B’ \n";
  $response .= "10. Ubomiri\n";
  $response .= "11. Umunoha/Azara \n";
  $response .= "12. Umunwoha/Mbieri/Umuawu \n";
  }

  elseif($text == "1*5*3*12"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in NGOR OKPALA\n"; 
      //Wards in Ngor Okpala LGA
 
  $response = "CON Wards in Ngor Okpala(Umuneke)\n";
  $response .= "1. Amala/Alulu/Oburu/Obokwe/Ntu\n";
  $response .= "2. Elelem/Obike\n";
  $response .= "3. Eziama/Okpala\n";
  $response .= "4. Imerienwe\n";
  $response .= "5. Logara/Umuohiagu\n";
  $response .= "6. Ngor/Ihitte/Umukabia\n";
  $response .= "7. Nguru/Umuowa\n";
  $response .= "8. Obiangwu\n";
  $response .= "9. Ohekelem Nnorie \n";
  $response .= "10. Ozuzu\n";
  $response .= "11. Umuhu \n";
  }

  elseif($text == "1*5*3*13"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in NJABA\n"; 
     //Wards in Njaba LGA
  $response = "CON Wards in Njaba(Nnenasa)\n";
  $response .= "1. Amucha I\n";
  $response .= "2. Amucha II\n";
  $response .= "3. Atta I\n";
  $response .= "4. Atta II\n";
  $response .= "5. Atta III\n";
  $response .= "6. Nkume\n";
  $response .= "7. Okwudor\n";
  $response .= "8. Umuaka I\n";
  $response .= "9. Umuaka II\n";
  $response .= "10. Umuaka III\n";
  $response .= "11. Umuaka Iv \n";
  }

  elseif($text == "1*5*3*14"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in NKWERE\n"; 
       //Wards in Nkwere LGA
  $response = "CON Wards in Nkwere\n";
  $response .= "1. Amaokpara\n";
  $response .= "2. Eziama Obaire\n";
  $response .= "3. Umunubo/Umunachi\n";
  $response .= "4. Nkwerre V\n";
  $response .= "5. Nnanano (Nkwerre II)\n";
  $response .= "6. Onusa\n";
  $response .= "7. Owerre Nkworji I\n";
  $response .= "8. Owerre Nkworji II\n";
  $response .= "9. Umudi/Umuwala\n";
  $response .= "10. Umukor (Nkwerre III)\n";
  }

  elseif($text == "1*5*3*15"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in NWANGELE\n"; 
           //Wards in Nwangele LGA
  $response = "CON Wards in Nwangele (Onu-Amaigbo)\n";
  $response .= "1. Abajah Ward I\n";
  $response .= "2. Abajah Ward II\n";
  $response .= "3. Abba Ward\n";
  $response .= "4. Amaju\n";
  $response .= "5. Amamnaisi\n";
  $response .= "6. Amano/Umudurumba\n";
  $response .= "7. Dim-Na Nume\n";
  $response .= "8. Ezeobolo/Ofeahia/Duruoha/Umukabia\n";
  $response .= "9. Kara-Na-Orlu\n";
  $response .= "10. Umuanu\n";
  $response .= "11. Umuozu\n";
  }

  elseif($text == "1*5*3*16"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in OBOWO\n"; 
     //Wards in Obowo LGA
  $response = "CON Wards in Obowo (Otoko)\n";
  $response .= "1. Alike\n";
  $response .= "2. Amanze/Umungwa\n";
  $response .= "3. Amuzi\n";
  $response .= "4. Avutu";
  $response .= "5. Ehume\n";
  $response .= "6. Odenkume/Umuosochie\n";
  $response .= "7. Okenalogho\n";
  $response .= "8. Okwuohia\n";
  $response .= "9. Umuariam/Achara\n";
  $response .= "10. Umunachi\n";
  }

  elseif($text == "1*5*3*17"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in OGUTA\n"; 
   //Wards in Oguta LGA
   $response = "CON Wards in Oguta\n";
   $response .= "1. Awa\n";
   $response .= "2. Egwe/Egbuoma\n";
   $response .= "3. Izombe\n";
   $response .= "4. Mbala/Uba";
   $response .= "5. Ndeuloukwu/Umuowere\n";
   $response .= "6. Obudi/Aro\n";
   $response .= "7. Oguta ‘A’\n";
   $response .= "8. Oguta ‘B’\n";
   $response .= "9. Oru\n";
   $response .= "10. Ossemotor/Enuigbo\n";
   $response .= "11. Uwaorie\n";
  }

  elseif($text == "1*5*3*18"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in OHAJI\n"; 
 //Wards in Ohaji LGA
 $response = "CON Wards in Ohaji (Mmahu-Egbema)\n";
 $response .= "1. Assa/Obile\n";
 $response .= "2. Awara/Ikwerede\n";
 $response .= "3. Egbema ‘A’\n";
 $response .= "4. Egbema ‘B’\n";
 $response .= "5. Egbema ‘C’\n";
 $response .= "6. Egbema ‘D’\n";
 $response .= "7. Egbema ‘E’\n";
 $response .= "8. Ekwuato\n";
 $response .= "9. Obitti/Mgbishi\n";
 $response .= "10. Ohoba\n";
 $response .= "11. Umuagwo\n";
 $response .= "12. Umuapu\n";
  }

  elseif($text == "1*5*3*18"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in OKIGWE\n"; 
    //Wards in Okigwe LGA
 $response = "CON Wards in Okigwe\n";
 $response .= "1. Agbobu\n";
 $response .= "2. Aku\n";
 $response .= "3. Amuro\n";
 $response .= "4. Ezinachi\n";
 $response .= "5. Ihube\n";
 $response .= "6. Ndimoko Ofeimo/Ibinta/Okanachi/Umuowa Ibu\n";
 $response .= "7. Ogii\n";
 $response .= "8. Okigwe I\n";
 $response .= "9. Okigwe II\n";
 $response .= "10. Umualumuoke\n";
 $response .= "11. Umulolo\n";
  }
     
  elseif($text == "1*5*3*19"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in ONUIMO\n"; 
    //Wards in Okigwe LGA
 $response = "CON Wards in Onuimo\n";
 $response .= "1. Agbobu\n";
 $response .= "2. Aku\n";
 $response .= "3. Amuro\n";
 $response .= "4. Ezinachi\n";
 $response .= "5. Ihube\n";
 $response .= "6. Ndimoko Ofeimo/Ibinta/Okanachi/Umuowa Ibu\n";
 $response .= "7. Ogii\n";
 $response .= "8. Okigwe I\n";
 $response .= "9. Okigwe II\n";
 $response .= "10. Umualumuoke\n";
 $response .= "11. Umulolo\n";
  }

  elseif($text == "1*5*3*20"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in ONUIMO(OKWE)\n"; 
        //Wards in Onuimo LGA
 $response = "CON Wards in Onuimo (Okwe)\n";
 $response .= "1. Eziama\n";
 $response .= "2. Umucheke\n";
 $response .= "3. Owerre Okwe\n";
 $response .= "4. Ezelu\n";
 $response .= "5. Ofeahia/Umuanumeze\n";
 $response .= "6. Aboh/Okohia\n";
 $response .= "7. Ozimo/Umuneze\n";
 $response .= "8. Umuna\n";
 $response .= "9. Okwelle 1\n";
 $response .= "10. Okwelle 11\n";
  }

  elseif($text == "1*5*3*21"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in ORLU\n"; 
  //Wards in Orlu LGA
 $response = "CON Wards in Orlu\n";
 $response .= "1. Amaifeke\n";
 $response .= "2. Ebenese/Umueze/Nnachi Ihioma\n";
 $response .= "3. Eziachi/Amike\n";
 $response .= "4. Ihite Owerre\n";
 $response .= "5. Ogberuru/Obibi\n";
 $response .= "6. Ohafor/Okporo/Umutanze\n";
 $response .= "7. Okaeke/Okporo\n";
 $response .= "8. Okwua Bala/Ihioma\n";
 $response .= "9. Orlu/Mgbee/Orlu Govt. Station\n";
 $response .= "10. Owerri Ebeiri\n";
 $response .= "11. Umudioka\n";
 $response .= "12. Umuna\n";
 $response .= "13. Umuzike/Umuowa\n";
  }

  elseif($text == "1*5*3*22"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in OSLU(AWO IDEMILI)\n"; 
  //Wards in Orsu LGA
 $response = "CON Wards in Oslu (Awo Idemili)\n";
 $response .= "1. Umuhu\n";
 $response .= "2. Okabia\n";
 $response .= "3. Ebenator\n";
 $response .= "4. Okwufuruaku\n";
 $response .= "5. Okwuamaraihie I\n";
 $response .= "6. Okwuamaraihie II\n";
 $response .= "7. Okwuetiti\n";
 $response .= "8. Orsu Ihiteukwa\n";
 $response .= "9. Ihitenansa\n";
 $response .= "10. Assah Ubiri Elem\n";
 $response .= "11. Eziawa\n";
 $response .= "11. Amaruru\n";
  }

  elseif($text == "1*5*3*23"){
       $response = "select an option \n";
    $response .= "0. DANGER ALERT in ORU EAST\n"; 
   //Wards in Oru East LGA
 $response = "CON Wards in Oru East\n";
 $response .= "1. Awo-Omamma I\n";
 $response .= "2. Awo-Omamma II\n";
 $response .= "3. Awo-Omamma III\n";
 $response .= "4. Awo-Omamma IV\n";
 $response .= "5. Amiri I\n";
 $response .= "6. Amiri II\n";
 $response .= "7. Akuma\n";
 $response .= "8. Amayu\n";
 $response .= "9. Akata\n";
 $response .= "10. Omuma\n";
  }

  elseif($text == "1*5*3*24"){
     //Wards in Oru West LGA
 $response = "CON Wards in Oru West (Mgbidi)\n";
 $response .= "1. Nempi/Elem\n";
 $response .= "2. Otulu\n";
 $response .= "3. Aji\n";
 $response .= "4. Ibiaso Egbe\n";
 $response .= "5. Amafuo\n";
 $response .= "6. Ohakpu\n";
 $response .= "7. Ozara\n";
 $response .= "8. Ubulu\n";
 $response .= "9. Mgbidi I\n";
 $response .= "10. Mgbidi II\n";
  }

  elseif($text == "1*5*3*25"){     
   //Wards in Owerri Municipal LGA
 $response = "CON Wards in Owerri Municipal\n";
 $response .= "1. Aladinma I\n";
 $response .= "2. Aladinma II\n";
 $response .= "3. Ikenegbu I\n";
 $response .= "4. Ikenegbu II\n";
 $response .= "5. Azuzi I\n";
 $response .= "6. Azuzi II\n";
 $response .= "7. Azuzi III\n";
 $response .= "8. Azuzi IV\n";
 $response .= "9. GRA\n";
 $response .= "10. New Owerri I\n";
 $response .= "11. New Owerri II\n";
  }
elseif ($text == "1*5*3*25*0"){
  $response .= "END Sorry, there is no current danger alert, check later.\n Thank you \n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}

  elseif($text == "1*5*3*26"){
       //Wards in Owerri North LGA
 $response = "CON Wards in Owerri North (Orie Uratta)\n";
 $response .= "1. Awaka/Ihitte-Ogada I\n";
 $response .= "2. Naze\n";
 $response .= "3. Egbu\n";
 $response .= "4. Emii\n";
 $response .= "5. Emekuku I\n";
 $response .= "6. Emekuku II\n";
 $response .= "7. Orji\n";
 $response .= "8. Ihitta-Oha\n";
 $response .= "9. Obibi-Urata I\n";
 $response .= "10. Obibi-Urata II\n";
 $response .= "11. Agbala/Obube/Ulakwo\n";
 $response .= "12. Obibiezena\n";
  }

elseif ($text == "1*5*3*26*9") {
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
   $response .= "12. 012 \n"; 
   $response .= "13. 013 \n"; 
   $response .= "14. 014 \n"; 
   $response .= "15. 015 \n";   
 }

 // this for the obibi
 elseif ($text == "1*5*3*26*9*1"){
  $response .= "END Your voting point is Community Primary School Umualum.\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*2"){
  $response .= "END Your voting point is Umuorii primary school I\n \nVote with Respectability.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*3"){
  $response .= "END Your voting point is Umuorii Primary School II.\n \nVote not Fight.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*4"){
  $response .= "END Your voting point is Orie Umuorii Market Square.\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*5"){
  $response .= "END Your voting point is Community Primary School Umuoba I\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*6"){
  $response .= "END Your voting point is Community Primary School Umuoba II\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*7"){
  $response .= "END Your voting point is Community Primary School Umuoba III.\n \nDon't Sell your Vote\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*8"){
  $response .= "END Your voting point is Town Hall Nkwo Umuoba I\n \n Do well to vote with knowledge \n#Decide2019";
}
elseif ($text == "1*5*3*26*9*9"){
  $response = "END Your voting point is Town Hall Nkwo Umuoba II\n \n Vote not Fight. \n#Decide2019";
}
elseif ($text == "1*5*3*26*9*10"){
  $response .= "END Your voting point is Okwu Village Square\n \n Vote with Respectability.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*11"){
  $response .= "END Your voting point is Community School Okwu Uratta I\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*12"){
  $response .= "END Your voting point is Community School Okwu Uratta II\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*13"){
  $response .= "END Your voting point is Okwu Village Square\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*14"){
  $response .= "END Your voting point is Fair Child Nursery School I\n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}
elseif ($text == "1*5*3*26*9*15"){
  $response .= "END Your voting point Fair Child Nursery School II \n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}





  elseif($text == "1*5*3*27"){
  //Wards in Owerri West LGA
 $response = "CON Wards in Owerri West\n";
 $response .= "1. Avu/Oforola\n";
 $response .= "2. Omukuma\n";
 $response .= "3. Okuku\n";
 $response .= "4. Emeabiam/Okolochi\n";
 $response .= "5. Eziobodo\n";
 $response .= "6. Ihiagwa\n";
 $response .= "7. Nekede\n";
 $response .= "8. Obinze\n";
 $response .= "9. Amakohia-Ubi/Ndegwu-Ohii\n";
 $response .= "10. Irete/Orogwe\n";
  }
elseif ($text == "1*5*3*27*0"){
  $response .= "END Sorry, there is no current danger alert, check later.\n Thank you \n \nDo well to Communicate truth throughout the electroneering processes.\n#Decide2019";
}

/* else if ( $text == "1*5*4" ) {
    // Show all LGA in Jigawa
    $response = "CON Select your LGA";
    $response .= "1. Auyo";
    $response .= "2. Babura";
    $response .= "3. Birni Kudu";
    $response .= "4. Biriniwa";
    $response .= "5. Buji";
    $response .= "6. Dutse";
    $response .= "7. Gagarawa";
    $response .= "8. Garki";
    $response .= "9. Gumel";
    $response .= "10. Guri";
    $response .= "11. Gwaram";
    $response .= "12. Gwiwa";
    $response .= "13. Hadejia";
    $response .= "14. Jahun";
    $response .= "15. Kafin Hausa";
    $response .= "16. Kaugama Kazaure";
    $response .= "17. Kiri Kasamma";
    $response .= "17. Kiyawa";
    $response .= "18. Maigatari";
    $response .= "19. Malam Madori";
    $response .= "20. Miga";
    $response .= "17. Kingim";
    $response .= "21. Roni";
    $response .= "22. Sule-Tankarkar";
    $response .= "23. Taura";
    $response .= "24. Yankwashi";
   }
   elseif ($text == "1*5*4*1") {
    $response = "END "
   }

   elseif($text == "1*5*4*2"){
     $response = "END "
   }

   elseif($text == "1*5*4*3"){
    $response = "END "
  }

  elseif($text == "1*5*4*4"){
    $response = "END "
  }

  elseif($text == "1*5*4*5"){
    $response = "END "
  }

  elseif($text == "1*5*4*6"){
    $response = "END "
  }

  elseif($text == "1*5*4*7"){
    $response = "END "
  }

  elseif($text == "1*5*4*8"){
    $response = "END "
  }

  elseif($text == "1*5*4*9"){
    $response = "END "
  }
  elseif($text == "1*5*4*10"){
    $response = "END "
  }

  elseif($text == "1*5*4*11"){
    $response = "END "
  }

  elseif($text == "1*5*4*12"){
    $response = "END "
  }

  elseif($text == "1*5*4*13"){
    $response = "END "
  }
  elseif($text == "1*5*4*14"){
    $response = "END "
  }

  elseif($text == "1*5*4*15"){
    $response = "END "
  }

  elseif($text == "1*5*4*16"){
    $response = "END "
  }

  elseif($text == "1*5*4*17"){
    $response = "END "
  }

  elseif($text == "1*5*4*18"){
    $response = "END "
  }
  elseif($text == "1*5*4*18"){
    $response = "END "
  }
  elseif($text == "1*5*4*19"){
    $response = "END "
  }
  elseif($text == "1*5*4*20"){
    $response = "END "
  }
  elseif($text == "1*5*4*21"){
    $response = "END "
  }
  elseif($text == "1*5*4*22"){
    $response = "END "
  }
  elseif($text == "1*5*4*23"){
    $response = "END "
  }
  elseif($text == "1*5*4*24"){
    $response = "END "
  }
 

   
   else if ( $text == "1*6*1" ) {
    // Show all LGA in Kaduna
    $response .= "CON Select your LGA";
    $response .= "1. Birni-Gwari";
    $response .= "2. Chikun";
    $response .= "3. Giwa";
    $response .= "4. Igabi";
    $response .= "5. Ikara";
    $response .= "6. jaba";
    $response .= "7. Jema'a";
    $response .= "8. Kachia";
    $response .= "9. Kaduna North";
    $response .= "10. Kaduna South";
    $response .= "11. Kagarko";
    $response .= "12. Kajuru";
    $response .= "13. Kaura";
    $response .= "14. Kauru";
    $response .= "15. Kubau";
    $response .= "16. Kudan";
    $response .= "17. Lere";
    $response .= "18. Makarfi";
    $response .= "19. Sabon-Gari";
    $response .= "20. Sanga";
    $response .= "21. Soba";
    $response .= "22. Zango-Kataf";
    $response .= "23. Zaria";
   }

   else if($text == "1*6*1*1"){
     $response = "END "
   }
   else if($text == "1*6*1*2"){
    $response = "END "
  }

   else if ( $text == "1*6*2" ) {
    // Show all LGA in Kano
    $response .= "CON Select your LGA";
    $response .= "1. Ajingi";
    $response .= "2. Albasu";
    $response .= "3. Bagwai";
    $response .= "4. Bebeji";
    $response .= "5. Bichi";
    $response .= "6. Bunkure";
    $response .= "7. Dala";
    $response .= "8. Dambatta";
    $response .= "9. Dawakin Kudu";
    $response .= "10. Dawakin Tofa";
    $response .= "11. Doguwa";
    $response .= "12. Fagge";
    $response .= "13. Gabasawa";
    $response .= "14. Garko";
    $response .= "15. Garum";
    $response .= "16. Mallam";
    $response .= "17. Gaya";
    $response .= "18. Gezawa";
    $response .= "19. Gwale";
    $response .= "20. Gwarzo";
    $response .= "21. Kabo";
    $response .= "22. Kano Municipal";
    $response .= "23. Karaye";
    $response .= "24. Kibiya";
    $response .= "25. Kiru";
    $response .= "26. Kunchi";
    $response .= "27. Kura";
    $response .= "28. Madobi";
    $response .= "29. Makoda";
    $response .= "30. Minjibir";
    $response .= "31. Nasarawa";
    $response .= "32. Rano";
    $response .= "33. Rimin Gado";
    $response .= "34. Rogo";
    $response .= "35. Shanono";
    $response .= "36. Sumaila";
    $response .= "37. Takali";
    $response .= "38. Tarauni";
    $response .= "39. Tofa";
    $response .= "40. Tsanyawa";
    $response .= "41. Tudun Wada";
    $response .= "42. Ungogo";
    $response .= "43. Warawa";
    $response .= "44. Wudil";
   }

   else if ( $text == "1*6*3" ) {
    // Show all LGA in Katsina
    $response .= "CON Select your LGA";
    $response .= "1. Bakori";
    $response .= "2. Batagarawa";
    $response .= "3. Batsari";
    $response .= "4. Baure";
    $response .= "5. Bindawa";
    $response .= "6. Charanchi";
    $response .= "7. Dandume";
    $response .= "8. Danja";
    $response .= "9. Dan Musa";
    $response .= "10. Daura";
    $response .= "11. Dutsi";
    $response .= "12. Dutsin-Ma";
    $response .= "13. Faskari";
    $response .= "14. Funtua";
    $response .= "15. Ingawa";
    $response .= "16. Jibia";
    $response .= "17. Kafur";
    $response .= "18. Kaita";
    $response .= "19. Kankara";
    $response .= "20. Kankia";
    $response .= "21. Katsina";
    $response .= "22. Kurfi";
    $response .= "23. Kusada";
    $response .= "24. Mai'Adua";
    $response .= "25. Malumfashi";
    $response .= "26. Mani";
    $response .= "27. Mashi";
    $response .= "28. Matazuu";
    $response .= "29. Musawa";
    $response .= "30. Rimi";
    $response .= "31. Sabuwa";
    $response .= "32. Safana";
    $response .= "33. Sandamu";
    $response .= "34. Zango";
   }

   else if ( $text == "1*6*4" ) {
    // Show all LGA in Kebbi
    $response .= "CON Select your LGA";
    $response .= "1. Aleiro";
    $response .= "2. Arewa-Dandi";
    $response .= "3. Argungu";
    $response .= "4. Augie";
    $response .= "5. Bagudo";
    $response .= "6. Birnin Kebbi";
    $response .= "7. Bunza";
    $response .= "8. Dandi";
    $response .= "9. Fakai";
    $response .= "10. Gwandu";
    $response .= "11. Kalgo";
    $response .= "12. Koko/Besse";
    $response .= "13. Maiyama";
    $response .= "14. Ngaski";
    $response .= "15. Sakaba";
    $response .= "16. Shanga";
    $response .= "17. Suru";
    $response .= "18. Wasagu/Danko";
    $response .= "19. Yauri";
    $response .= "20. Zuru";
   }

   else if ( $text == "1*6*5" ) {
    // Show all LGA in Kebbi
    $response .= "CON Select your LGA";
    $response .= "1. Adavi";
    $response .= "2. Ajaokuta";
    $response .= "3. Ankpa";
    $response .= "4. Bassa";
    $response .= "5. Dekina";
    $response .= "6. Ibaji";
    $response .= "7. Idah";
    $response .= "8. Igalamela-Odolu";
    $response .= "9. Ijumu";
    $response .= "10. Kabba/Bunu";
    $response .= "11. Kogi";
    $response .= "12. Lokoja";
    $response .= "13. Mopa-Muro";
    $response .= "14. Ofu";
    $response .= "15. Ogori/Mangongo";
    $response .= "16. Okehi";
    $response .= "17. Okene";
    $response .= "18. Olamabolo";
    $response .= "19. Omala";
    $response .= "20. Yagba East";
    $response .= "21. Yagba Yagba West";
   }
   
   else if ( $text == "1*6*6" ) {
    // Show all LGA in Kwara
    $response .= "CON Select your LGA";
    $response .= "1. Asa";
    $response .= "2. Baruten";
    $response .= "3. Edu";
    $response .= "4. Ekiti";
    $response .= "5. Ifelodun";
    $response .= "6. Ilorin East";
    $response .= "7. Ilorin West";
    $response .= "8. Irepodun";
    $response .= "9. Isin";
    $response .= "10. Kaiama";
    $response .= "11. Moro";
    $response .= "12. Offa";
    $response .= "13. Oke-Ero";
    $response .= "14. Oyun";
    $response .= "15. Pategi";
   }

   else if ( $text == "1*7*1" ) {
    // Show all LGA in Lagos
    $response .= "CON Select your LGA";
    $response .= "1. Agege";
    $response .= "2. Ajeromi-Ifelodun";
    $response .= "3. Alimosho";
    $response .= "4. Amuwo-Odofin";
    $response .= "5. Apapa";
    $response .= "6. Badagry";
    $response .= "7. Epe";
    $response .= "8. Eti-Osa";
    $response .= "9. Ibeju/Lekki";
    $response .= "10. Ifako-Ijaye";
    $response .= "11. Ikeja";
    $response .= "12. Ikorodu";
    $response .= "13. Kosofe";
    $response .= "14. Lagos Island";
    $response .= "15. Lagos Mainland";
    $response .= "16. Mushin";
    $response .= "17. Ojo";
    $response .= "18. Oshodi-Isolo";
    $response .= "19. Shomolu";
    $response .= "20. Surulere";
   }

   else if ( $text == "1*7*2" ) {
    // Show all LGA in Nasarawa
    $response .= "CON Select your LGA";
    $response .= "1. Akwanga";
    $response .= "2. Awe";
    $response .= "3. Doma";
    $response .= "4. Karu";
    $response .= "5. Keana";
    $response .= "6. Keffi";
    $response .= "7. Kokona";
    $response .= "8. Lafia";
    $response .= "9. Nasarawa";
    $response .= "10. Nasarawa-Eggon";
    $response .= "11. Obi";
    $response .= "12. Toto";
   }

   else if ( $text == "1*7*3" ) {
    // Show all LGA in Niger
    $response .= "CON Select your LGA";
    $response .= "1. Agaie";
    $response .= "2. Agwara";
    $response .= "3. Bida";
    $response .= "4. Borgu";
    $response .= "5. Bosso";
    $response .= "6. Chanchaga";
    $response .= "7. Edati";
    $response .= "8. Gbako";
    $response .= "9. Gurara";
    $response .= "10. Katcha";
    $response .= "11. Kontagora";
    $response .= "12. Lapai";
    $response .= "13. Lavun";
    $response .= "14. Magama";
    $response .= "15. Mariga";
    $response .= "16. Mashegu";
    $response .= "17. Mokwa";
    $response .= "17. Muya";
    $response .= "17. Pailoro";
    $response .= "17. Rafi";
    $response .= "17. Rijau";
    $response .= "17. Shiroro";
    $response .= "17. Suleja";
    $response .= "17. Tafa";
    $response .= "17. Wushishi";
   }

   else if ( $text == "1*8*1" ) {
    // Show all LGA in Ogun
    $response .= "CON Select your LGA";
    $response .= "1. Abeokuta North";
    $response .= "2. Abeokuta South";
    $response .= "3. Ado-Odo/Ota";
    $response .= "4. Egbado North";
    $response .= "5. Egbado South";
    $response .= "6. Ewekoro";
    $response .= "7. Ifo";
    $response .= "8. Ijebu East";
    $response .= "9. Ijebu North";
    $response .= "10. Ijebu North East";
    $response .= "11. Ijebu Ode";
    $response .= "12. Ikenne";
    $response .= "13. Imeko-Afon";
    $response .= "14. Ipokia";
    $response .= "15. Obafemi-Owode";
    $response .= "16. Ogun Waterside";
    $response .= "17. Odeda";
    $response .= "18. Odogbolu";
    $response .= "19. Remo North";
    $response .= "20. Shagamu";
   }

   else if ( $text == "1*8*2" ) {
    // Show all LGA in Ondo
    $response .= "CON Select your LGA";
    $response .= "1. Akoko North East";
    $response .= "2. Akoko North West";
    $response .= "3. Akoko South Akure East";
    $response .= "4. Akoko South West";
    $response .= "5. Akure North";
    $response .= "6. Akure South";
    $response .= "7. Ese-Odo";
    $response .= "8. Idanre";
    $response .= "9. Ifedore";
    $response .= "10. Ilaje";
    $response .= "11. Ile-Oluji";
    $response .= "12. Okeigbo";
    $response .= "13. Irele";
    $response .= "14. Odigbo";
    $response .= "15. Okitipupa";
    $response .= "16. Ondo East";
    $response .= "17. Ondo West";
    $response .= "18. Ose";
    $response .= "19. Remo North";
    $response .= "20. Owo";
   }

   else if ( $text == "1*8*3" ) {
    // Show all LGA in Osun
    $response .= "CON Select your LGA";
    $response .= "1. Aiyedade";
    $response .= "2. Aiyedire";
    $response .= "3. Atakumosa East";
    $response .= "4. Atakumosa West";
    $response .= "5. Boluwaduro";
    $response .= "6. Boripe";
    $response .= "7. Ede North";
    $response .= "8. Ede South";
    $response .= "9. Egbedore";
    $response .= "10. Ejigbo";
    $response .= "11. Ife Central";
    $response .= "12. Ife East";
    $response .= "13. Ife North";
    $response .= "14. Ife South";
    $response .= "15. Ifedayo";
    $response .= "16. Ifelodun";
    $response .= "17. Ila";
    $response .= "18. Ilesha East";
    $response .= "19. Ilesha West";
    $response .= "20. Irepodun";
    $response .= "21. Irewole";
    $response .= "22. Isokan";
    $response .= "23. Iwo";
    $response .= "24. Obokun";
    $response .= "25. Odo-Otin";
    $response .= "26. Ola-Oluwa";
    $response .= "27. Olorunda";
    $response .= "28. Oriade";
    $response .= "29. Orolu";
    $response .= "30. Osogbo";
   }


   else if ( $text == "1*8*4" ) {
    // Show all LGA in Oyo
    $response .= "CON Select your LGA";
    $response .= "1. Afijio";
    $response .= "2. Akinyele";
    $response .= "3. Atiba";
    $response .= "4. Atigbo";
    $response .= "5. Egbeda";
    $response .= "6. IbadanCentral";
    $response .= "7. Ibadan North";
    $response .= "8. Ibadan North West";
    $response .= "9. Ibadan South East";
    $response .= "10. Ibadan South West";
    $response .= "11. Ibarapa Central";
    $response .= "12. Ibarapa East";
    $response .= "13. Ibarapa North";
    $response .= "14. Ido";
    $response .= "15. Irepo";
    $response .= "16. Iseyin";
    $response .= "17. Itesiwaju";
    $response .= "18. Iwajowa";
    $response .= "19. Kajola";
    $response .= "20. Lagelu Ogbomosho North";
    $response .= "21. Ogbmosho South";
    $response .= "22. Ogo Oluwa";
    $response .= "23. Olorunsogo";
    $response .= "24. Oluyole";
    $response .= "25. Ona-Ara";
    $response .= "26. Orelope";
    $response .= "27. Ori Ire";
    $response .= "28. Oyo East";
    $response .= "29. Oyo West";
    $response .= "30. Saki East";
    $response .= "31. Saki West";
   }


   else if ( $text == "1*9*1" ) {
    // Show all LGA in Pleatue
    $response .= "CON Select your LGA";
    $response .= "1. Barikin Ladi";
    $response .= "2. Bassa";
    $response .= "3. Bokkos";
    $response .= "4. Jos East";
    $response .= "5. Jos North";
    $response .= "6. Jos South";
    $response .= "7. Kanam";
    $response .= "8. Kanke";
    $response .= "9. Langtang North";
    $response .= "10. Langtang South";
    $response .= "11. Mangu";
    $response .= "12. Mikang";
    $response .= "13. Pankshin";
    $response .= "14. Qua'an Pan";
    $response .= "15. Riyom";
    $response .= "16. Shendam";
    $response .= "17. Wase";
   }

   else if ( $text == "1*9*2" ) {
    // Show all LGA in Rivers
    $response .= "CON Select your LGA";
    $response .= "1. Abua/Odual";
    $response .= "2. Ahoada East";
    $response .= "3. Ahoada West";
    $response .= "4. Akuku Toru";
    $response .= "5. Andoni";
    $response .= "6. Asari-Toru";
    $response .= "7. Bonny";
    $response .= "8. Degema";
    $response .= "9. Emohua";
    $response .= "10. Eleme";
    $response .= "11. Etche";
    $response .= "12. Gokana";
    $response .= "13. Ikwerre";
    $response .= "14. Khana";
    $response .= "15. Obia/Akpor";
    $response .= "16. Ogba/Egbema\ndoni";
    $response .= "17. Ogu/Bolo";
    $response .= "18. Okrika";
    $response .= "19. Omumma";
    $response .= "20. Opobo\nkoro";
    $response .= "21. Oyigbo";
    $response .= "22. Port-Harcourt";
    $response .= "23. Tai";
   }
   
   else if ( $text == "1*9*3" ) {
    // Show all LGA in Sokoto
    $response .= "CON Select your LGA";
    $response .= "1. Binji";
    $response .= "2. Bodinga";
    $response .= "3. Dange-shnsi";
    $response .= "4. Gada";
    $response .= "5. Goronyo";
    $response .= "6. Gudu";
    $response .= "7. Gawabawa";
    $response .= "8. Illela";
    $response .= "9. Isa";
    $response .= "10. Kware";
    $response .= "11. kebbe";
    $response .= "12. Rabah";
    $response .= "13. Sabon birni";
    $response .= "14. Silame";
    $response .= "15. Sokoto North";
    $response .= "16. Sokoto South";
    $response .= "17. Tambuwal";
    $response .= "18. Tqngaza";
    $response .= "19. Tureta";
    $response .= "20. Wamako";
    $response .= "21. Wurno";
    $response .= "22. Yabo";
   } 
   
   else if ( $text == "1*9*4" ) {
    // Show all LGA in Taraba
    $response .= "CON Select your LGA";
    $response .= "1. Ardo-kola";
    $response .= "2. Bali";
    $response .= "3. Donga";
    $response .= "4. Gashaka";
    $response .= "5. Cassol";
    $response .= "6. Ibi";
    $response .= "7. Jalingo";
    $response .= "8. Karin-Lamido";
    $response .= "9. Kurmi";
    $response .= "10. Lau";
    $response .= "11. Sardauna";
    $response .= "12. Takum";
    $response .= "13. Ussa";
    $response .= "14. Wukari";
    $response .= "15. Yorro";
    $response .= "16. Zing";
   } 

   else if ( $text == "1*9*5" ) {
    // Show all LGA in Yobe
    $response .= "CON Select your LGA";
    $response .= "1. Bade";
    $response .= "2. Bursari";
    $response .= "3. Damaturu";
    $response .= "4. Fika";
    $response .= "5. Fune";
    $response .= "6. Geidam";
    $response .= "7. Gujba";
    $response .= "8. Gulani";
    $response .= "9. Jakusko";
    $response .= "10. Karasuwa";
    $response .= "11. Karawa";
    $response .= "12. Machina";
    $response .= "13. Nangere";
    $response .= "14. Nguru Potiskum";
    $response .= "15. Tarmua";
    $response .= "16. Yunusari";
    $response .= "17. Yusufari";
   } 

   else if ( $text == "1*9*5" ) {
    // Show all LGA in Zamfara
    $response .= "CON Select your LGA";
    $response .= "1. Anka";
    $response .= "2. Bakura";
    $response .= "3. Birnin Magaji";
    $response .= "4. Bukkuyum";
    $response .= "5. Bungudu";
    $response .= "6. Gummi";
    $response .= "7. Gusau";
    $response .= "8. Kaura";
    $response .= "9. Namoda";
    $response .= "10. Maradun";
    $response .= "11. Maru";
    $response .= "12. Shinkafi";
    $response .= "13. Talata Mafara";
    $response .= "14. Tsafe";
    $response .= "15. Zurmi";
   }  */
 
     

// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;
// DONE!!!
?>
