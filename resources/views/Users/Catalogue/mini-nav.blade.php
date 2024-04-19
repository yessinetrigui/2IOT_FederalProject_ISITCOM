<?php 
use Illuminate\Http\Request;

$Routename = Route::currentRouteName();
if (!empty($_GET['Ctype'])){
    $para1 =  $_GET['Ctype'];
}else{
    $para1 = false;
}
if (!empty($_GET['OrdredBy'])){
    $para2 =  $_GET['OrdredBy'];
}else{
    $para2 = false;
}


if (!empty($_GET['Ctype'])){
        $Alpha = [
            'Ctype'=>$_GET['Ctype'],
            'OrdredBy'=>"Alpahbetique",
        ];
        $LowPrice = [
            'Ctype'=>$_GET['Ctype'],
            'OrdredBy'=>"LowPrice",
        ];
        $HighPrice = [
            'Ctype'=>$_GET['Ctype'],
            'OrdredBy'=>"HighPrice",
        ];
        $Random = [
            'Ctype'=>$_GET['Ctype'],
            'OrdredBy'=>"Random",
        ];
}else{
    $Alpha = ['OrdredBy'=>"Alpahbetique"];
    $LowPrice = ['OrdredBy'=>"LowPrice"];
    $HighPrice = ['OrdredBy'=>"HighPrice"];
    $Random = ['OrdredBy'=>"Random"];
}


$AllVehicles = array("All Vehicles","user.catalogue","car-solid.svg");
$AllTypes = array("All Types",[]);
$OrderBY = array("Ordred By:","user.catalogue");

/*!  MODELS *******/
$Cars = array("Cars","user.cars","car-solid.svg");
$Motos = array("Motos","user.motos","motorcycle-solid.svg");
$Planes = array("Planes","user.planes","plane-solid.svg");
$Others = array("Others","user.others","warehouse-solid.svg");

/*!  TYPES  *******/
$OffRoad = array("Off-Road",['Ctype'=>'Off-Road']);
$Sport = array("Sport",['Ctype'=>'Sport']);
$Exclusive = array("Exclusive",['Ctype'=>'Exclusive']);
$Others_Type = array("Others",['Ctype'=>'Others']);

/*!  Orderd By  *******/
$Alpha = array("Alphabetique",$Alpha);
$LowP = array("Low Price",$LowPrice);
$HighP = array("High Price",$HighPrice);
$Random = array("Random",$Random);

if ($Routename == "user.catalogue"){
    $Title1 = $AllVehicles[0];
    $opt1_T1 = $Cars;
    $opt2_T1 = $Motos ;
    $opt3_T1 = $Planes;
    $opt4_T1 = $Others;
}else if ($Routename == "user.cars"){
    $Title1 = $Cars[0];
    $opt1_T1 = $AllVehicles;
    $opt2_T1 = $Motos ;
    $opt3_T1 = $Planes;
    $opt4_T1 = $Others;
}else if ($Routename == "user.motos"){
    $Title1 = $Motos[0];
    $opt1_T1 = $AllVehicles;
    $opt2_T1 = $Cars ;
    $opt3_T1 = $Planes;
    $opt4_T1 = $Others;
}
else if ($Routename == "user.planes"){
    $Title1 = $Planes[0];
    $opt1_T1 = $AllVehicles;
    $opt2_T1 = $Cars ;
    $opt3_T1 = $Motos;
    $opt4_T1 = $Others;
}else if ($Routename == "user.motos"){
    $Title1 = $Motos[0];
    $opt1_T1 = $AllVehicles;
    $opt2_T1 = $Cars ;
    $opt3_T1 = $Planes;
    $opt4_T1 = $Others;
}else if ($Routename == "user.others"){
    $Title1 = $Others[0];
    $opt1_T1 = $AllVehicles;
    $opt2_T1 = $Cars ;
    $opt3_T1 = $Motos;
    $opt4_T1 = $Planes;
}

if ($para1 == "Off-Road"){
    $Title2  = $OffRoad[0];
    $opt1_T2 = $AllTypes;
    $opt2_T2 = $Sport;
    $opt3_T2 = $Exclusive;
    $opt4_T2 = $Others_Type;
}else if ($para1 == "Sport"){
    $Title2  = $Sport[0];
    $opt1_T2 = $AllTypes;
    $opt2_T2 = $OffRoad;
    $opt3_T2 = $Exclusive;
    $opt4_T2 = $Others_Type;
}else if ($para1 == "Exclusive"){
    $Title2  = $Exclusive[0];
    $opt1_T2 = $AllTypes;
    $opt2_T2 = $OffRoad;
    $opt3_T2 = $Sport;
    $opt4_T2 = $Others_Type;
}else if ($para1 == "Others"){
    $Title2  = $Others_Type[0];
    $opt1_T2 = $AllTypes;
    $opt2_T2 = $OffRoad;
    $opt3_T2 = $Sport;
    $opt4_T2 = $Exclusive;
}else{
    $Title2  = $AllTypes[0];
    $opt1_T2 = $OffRoad;
    $opt2_T2 = $Sport;
    $opt3_T2 = $Exclusive;
    $opt4_T2 = $Others_Type;
}


if ($para2 == "Alpahbetique"){
    $Title3  = $Alpha[0];
    $opt1_T3 = $LowP;
    $opt2_T3 = $HighP;
    $opt3_T3 = $Random;
}else if ($para2 == "LowPrice"){
    $Title3  = $LowP[0];
    $opt1_T3 = $Alpha;
    $opt2_T3 = $HighP;
    $opt3_T3 = $Random;
}else if ($para2 == "HighPrice"){
    $Title3  = $HighP[0];
    $opt1_T3 = $Alpha;
    $opt2_T3 = $LowP;
    $opt3_T3 = $Random;
}else{
    $Title3  = $Random[0];
    $opt1_T3 = $Alpha;
    $opt2_T3 = $LowP;
    $opt3_T3 = $HighP;
}


echo " <div class='options'>
        <div class='opt' id='opt1'>
            <div class='opt-title'>$Title1<img src='/assets/icons/arrow-up.svg' alt=''></div>
        </div>
        <div class='opt' id='opt2'>
            <div class='opt-title'>$Title2<img src='/assets/icons/arrow-up.svg' alt=''></div>
        </div>
        <div class='opt' id='opt3'>
            <div class='opt-title'>Orderd By: $Title3<img src='/assets/icons/arrow-up.svg' alt=''></div>
        </div>
        <div class='AVC' id='AVC1'>
            <a  href=' ". route($opt1_T1[1]) . "' class='opt-choice'>
                <h1>$opt1_T1[0]</h1>
                <img src='/assets/icons/$opt1_T1[2]' alt=''>
            </a>
            <a  href=' ". route($opt2_T1[1]) . "' class='opt-choice'>
                <h1>$opt2_T1[0]</h1>
                <img src='/assets/icons/$opt2_T1[2]' alt=''>
            </a>
            <a  href=' ". route($opt3_T1[1]) . "' class='opt-choice'>
                <h1>$opt3_T1[0]</h1>
                <img src='/assets/icons/$opt3_T1[2]' alt=''>
            </a>
            <a  href=' ". route($opt4_T1[1]) . "' class='opt-choice'>
                <h1>$opt4_T1[0]</h1>
                <img src='/assets/icons/$opt4_T1[2]' alt=''>
            </a>
        </div>
        <div class='AVC' id='AVC2'>
            <a  href='" . route($Routename,$opt1_T2[1]) . "' class='opt-choice'>
                <h1>$opt1_T2[0]</h1>
                <img src='/assets/icons/car-solid.svg' alt=''>
            </a>
            <a  href='" . route($Routename,$opt2_T2[1]) . "' class='opt-choice'>
                <h1>$opt2_T2[0]</h1>
                <img src='/assets/icons/motorcycle-solid.svg' alt=''>
            </a>
            <a  href='" . route($Routename,$opt3_T2[1]) . "' class='opt-choice'>
                <h1>$opt3_T2[0]</h1>
                <img src='/assets/icons/plane-solid.svg' alt=''>
            </a>
            <a  href='" . route($Routename,$opt4_T2[1]) . "' class='opt-choice'>
                <h1>$opt4_T2[0]</h1>
                <img src='/assets/icons/warehouse-solid.svg' alt=''>
            </a>
        </div>

        <div class='AVC' id='AVC3'>
            <a  href='" . route($Routename,$opt1_T3[1]) . "' class='opt-choice'>
                <h1>$opt1_T3[0]</h1>
                <img src='/assets/icons/car-solid.svg' alt=''>
            </a>
            <a  href='" . route($Routename,$opt2_T3[1]) . "' class='opt-choice'>
                <h1>$opt2_T3[0]</h1>
                <img src='/assets/icons/motorcycle-solid.svg' alt=''>
            </a>
            <a  href='" . route($Routename,$opt3_T3[1]) . "' class='opt-choice'>
                <h1>$opt3_T3[0]</h1>
                <img src='/assets/icons/plane-solid.svg' alt=''>
            </a>

        </div>
    </div>

";

?>