<?php 
    function pswGen($pswLen) {
        $allCar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
        $shfl = str_shuffle($allCar);
        
        return substr($shfl, 0, $pswLen);    
    }
?>