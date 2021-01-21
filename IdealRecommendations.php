<?php

# Variables from DB
$BMI = 0.00;
$regimenType = 0;
$Age = 0;

$BMIstatus = 0;
$regimenstatus = 0;
$agestatus = 0;


#Check BMI
function checkBMI($BMI){

# Variables for BMI calculation (Max value for each BMI)
$normal = 24.9;
$underwreight = 18.5;
$overweight = 29.9;

#condition checking 

if($BMI<$overweight){
    echo "You are underweight";
    return $BMIstatus = 0;
}

if($BMI>$overweight and $BMI<=$normal){
    echo "You have normal BMI";
    return $BMIstatus = 1;
}

if($BMI>$normal and $BMI<=$overweight){
    echo "You are overweight";
    return $BMIstatus = 2;
}

if($BMI>$overweight){
    echo "You are obese";
    return $BMIstatus = 3;
}

}


function checkAge($Age){

#variables for age group
$adults = 18;
$middle = 30;
$elders = 50;


if($Age<$adults){
    echo "teens";
    return $agestatus = 0;
}

if($Age>$adults and $Age<$middle){
    echo "Adults";
    return $agestatus = 1;
}

if($Age>$adults and $Age<$middle){
    echo "20's";
    return $agestatus = 2;
}

if($Age>$elders){
    echo "Elders";
    return $agestatus = 3;
}

}


#Check Regimen
function checkRegimenType($regimenType){

    if($regimenType==0){
        echo "Fat loosening"; 
        return $regimenstatus = 0;
    }
    
    if($regimenType==1){
        echo "Muscle Building";
        return $regimenstatus = 1;
    }
    
    if($regimenType==2){
        echo "Fat Gain";
        return $regimenstatus = 2;
    }  

}

    #Print Echo
    echo checkRegimenType(2);
    echo "<br>";
    echo checkAge(25);
    echo "<br>";
    echo checkBMI(24.4);

    
    if(){

    }






?>