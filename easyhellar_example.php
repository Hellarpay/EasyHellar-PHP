<?php

require_once 'easyhellar.php';

use easyhellar\EasyHellar as EasyHellar;
use easyhellar\EasyHellarException as EasyHellarException;

$hellar = new EasyHellar('hellarrpc','password');

try {
    $getinfo = $hellar->getinfo();
    
    echo "\n ===== Getinfo ===== \n\n ";
    print_r($getinfo);

    $blockhash = $hellar->getblockhash(50000);

    echo "\n\n ===== Hash of block #50000 ===== \n\n ";
    print_r($blockhash);
    
    $block = $hellar->getblock($blockhash);

    echo "\n\n ===== Block #50000 ===== \n\n ";
    print_r($block);    
    
    $tx = $hellar->getrawtransaction($block['tx'][0],1);

    echo "\n\n ===== Transaction #".$tx['txid']." ===== \n\n ";
    
    print_r($tx);
    
    echo "\n";    
    
} catch (EasyHellarException $easyException) {
    var_dump($easyException);
}
