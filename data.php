<?php
     
$bill = [
    '800 Piusha,Bihan,Kalana,Prashan,Dushanthi,Deshan,Nirash',
    '500 Kalana,Prashan,Dushanthi,Deshan,Nirash',
    '200 Piusha,Bihan,Deshan,Nirash',
    '650 Piusha,Bihan,Kalana,Prashan,Dushanthi,Deshan,Nirash,Nirash',
    '300 Dushanthi,Deshan,Nirash',
    '275 Piusha,Piusha,Piusha,Dushanthi,Dushanthi,Deshan,Nirash',
    '1250 Piusha,Bihan,Kalana,Prashan,Dushanthi,Deshan,Nirash,Piusha,Bihan,Kalana,Prashan,Dushanthi,Deshan,Nirash',
    '500 Piusha,Bihan,Nirash'
];


$payer = [];


foreach($bill as $pay){

    $ammountAndUser = explode(' ',$pay);

    $participants = explode(',',$ammountAndUser[1]);

    $singlePersonsAmmount = $ammountAndUser[0]/count($participants);

    echo "------\r\n";
    $splitetdAmmount = [];
    foreach($participants as $participant){

        
        //echo $participant."\r\n";
        if(isset($splitetdAmmount[$participant])){
            $splitetdAmmount[$participant] = $splitetdAmmount[$participant] + $singlePersonsAmmount;
        }else{
            $splitetdAmmount[$participant] = $singlePersonsAmmount;
        }
    }
    
    $payer[] = $splitetdAmmount; 
 }			



echo "\r\n";
 print_r($payer);
    