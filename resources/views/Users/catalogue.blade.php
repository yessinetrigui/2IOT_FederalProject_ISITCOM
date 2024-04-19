@extends('SL_web.layouts.userLayouts')
@section('title')
    Catalogue
@endsection
@section('sub-content')

    <div class="main-catalog">
       
        @include('SL_web.Users.Catalogue.mini-nav')

        <div class="show">
            <div class='contr'>
            <?php 
            $to = count($data);
        /// here we check if our request got ordred by or no
            $Otypes = array('Alpahbetique', 'HighPrice', 'LowPrice');
            if (!empty($order) && in_array($order, $Otypes)){
                $SHOW = array();
                /// if the para is alpha we sort uing the name
                if ($order=="Alpahbetique"){
                    for ($x=0; $x<$to; $x++){
                        array_push($SHOW, array( 
                           "ORDERING"=> strtoupper(substr($data[$x]["cModel"],0,1)),
                           "cModel"=> $data[$x]["cModel"],
                           "cPrice"=> $data[$x]["cPrice"],
                           "id"=> $data[$x]["id"],
                           "cPlace"=> $data[$x]["cPlace"],
                           "cPic1"=> $data[$x]["cPic1"],
                           "cCat"=> $data[$x]["cCat"],
                           "cType"=> $data[$x]["cType"]
                        ));
                    }
                    sort($SHOW);
                }
                /// if the para is alpha we sort uing the price by the high
                if ($order=="HighPrice"){
                    for ($x=0; $x<$to; $x++){
                        array_push($SHOW, array(
                            "ORDERING"=>  substr($data[$x]["cPrice"],0,-1),
                           "cPrice"=> $data[$x]["cPrice"],
                           "cModel"=> $data[$x]["cModel"],
                           "id"=> $data[$x]["id"],
                           "cPlace"=> $data[$x]["cPlace"],
                           "cPic1"=> $data[$x]["cPic1"],
                           "cCat"=> $data[$x]["cCat"],
                           "cType"=> $data[$x]["cType"]
                        ));
                    }
                    rsort($SHOW);
                }
                /// if the para is alpha we sort uing the price by the low
                if ($order=="LowPrice"){
                    for ($x=0; $x<$to; $x++){
                        array_push($SHOW, array(
                            "ORDERING"=>  substr($data[$x]["cPrice"],0,-1),
                           "cPrice"=> $data[$x]["cPrice"],                           "cModel"=> $data[$x]["cModel"],
                           "id"=> $data[$x]["id"],
                           "cPlace"=> $data[$x]["cPlace"],
                           "cPic1"=> $data[$x]["cPic1"],
                           "cCat"=> $data[$x]["cCat"],
                           "cType"=> $data[$x]["cType"]
                        ));
                    }
                    sort($SHOW);
                }
                    for($x=0; $x<$to; $x++){
                        $Model = $SHOW[$x]["cModel"];
                        $Price = $SHOW[$x]["cPrice"];
                        $Place = $SHOW[$x]["cPlace"];
                        $Pic = $SHOW[$x]["cPic1"];
                        if ($SHOW[$x]["cCat"] == 'cars'){
                            $Pic = 'cars/' . $Pic; 
                            $URI = 'cars/' . $SHOW[$x]["id"];
                        }else if ($SHOW[$x]["cCat"] == 'motos'){
                            $Pic = 'motos/' . $Pic; 
                            $URI = 'motos/' . $SHOW[$x]["id"];
                        }else if ($SHOW[$x]["cCat"] == 'planes'){
                            $Pic = 'planes/' . $Pic; 
                            $URI = 'planes/' . $SHOW[$x]["id"];
                        }else if ($SHOW[$x]["cCat"] == 'others'){
                            $Pic = 'others/' . $Pic; 
                            $URI = 'others/' . $SHOW[$x]["id"];
                        }
                        if (!empty($type)){
                            if ($type == $SHOW[$x]['cType']){
                                echo "
                                <a href='/catalogue/$URI' id='bloc'>
                                    <img id='bg' src='SiteImages/Catalogue/$Pic' alt=''>
                                    <div class='inf'>
                                        <div class='cname'>
                                            <h1>$Model</h1>
                                        </div>
                                        <div class='cprice-size'>
                                            <div class='price'>
                                                <h1>$Price</h1>
                                            </div>
                                            <div class='size'>
                                                <h1>$Place</h1>
                                            <img onclick='openDs()' src='/assets/icons/user-regular.svg' alt=''>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ";
                            }
                        }else{
                            echo "
                                <a href='/catalogue/$URI' id='bloc'>
                                    <img id='bg' src='SiteImages/Catalogue/$Pic' alt=''>
                                    <div class='inf'>
                                        <div class='cname'>
                                            <h1>$Model</h1>
                                        </div>
                                        <div class='cprice-size'>
                                            <div class='price'>
                                                <h1>$Price</h1>
                                            </div>
                                            <div class='size'>
                                                <h1>$Place</h1>
                                            <img onclick='openDs()' src='/assets/icons/user-regular.svg' alt=''>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ";
                        }
                    }
            }
            else{
                    // if the request has not orderd by or ordred by random 
                    for ($x=0; $x<$to; $x++){
                        $Model = $data[$x]['cModel'];
                        $Price = $data[$x]['cPrice'];
                        $Place = $data[$x]['cPlace'];
                        $Pic = $data[$x]['cPic1'];
                        if ($data[$x]['cCat'] == 'cars'){
                            $Pic = 'cars/' . $Pic; 
                            $URI = 'cars/' . $data[$x]['id'];
                        }else if ($data[$x]['cCat'] == 'motos'){
                            $Pic = 'motos/' . $Pic; 
                            $URI = 'motos/' . $data[$x]['id'];
                        }else if ($data[$x]["cCat"] == 'planes'){
                            $Pic = 'planes/' . $Pic; 
                            $URI = 'planes/' . $data[$x]["id"];
                        }else if ($data[$x]["cCat"] == 'others'){
                            $Pic = 'others/' . $Pic; 
                            $URI = 'others/' . $data[$x]["id"];
                        }
                        if (!empty($type)){
                            if ($type == $data[$x]['cType']){
                                echo "
                                <a href='/catalogue/$URI' id='bloc'>
                                    <img id='bg' src='SiteImages/Catalogue/$Pic' alt=''>
                                    <div class='inf'>
                                        <div class='cname'>
                                            <h1>$Model</h1>
                                        </div>
                                        <div class='cprice-size'>
                                            <div class='price'>
                                                <h1>$Price</h1>
                                            </div>
                                            <div class='size'>
                                                <h1>$Place</h1>
                                            <img onclick='openDs()' src='/assets/icons/user-regular.svg' alt=''>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ";
                            }
                        }else{
                            echo "
                                <a href='/catalogue/$URI' id='bloc'>
                                    <img id='bg' src='SiteImages/Catalogue/$Pic' alt=''>
                                    <div class='inf'>
                                        <div class='cname'>
                                            <h1>$Model</h1>
                                        </div>
                                        <div class='cprice-size'>
                                            <div class='price'>
                                                <h1>$Price</h1>
                                            </div>
                                            <div class='size'>
                                                <h1>$Place</h1>
                                            <img onclick='openDs()' src='/assets/icons/user-regular.svg' alt=''>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ";
                        }    
                    }   
                }
            ?>



            </div>     
        </div>
    </div>

@endsection
