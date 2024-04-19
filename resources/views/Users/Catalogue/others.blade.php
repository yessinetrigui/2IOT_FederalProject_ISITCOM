@extends('SL_web.layouts.home')
@section('css-import')
<link rel="stylesheet" href="../css/navbars.css">
<link rel="stylesheet" href="../css/user.css">
@endsection
@section('js-import')
<script src="../js/scripts.js"></script>
<script src="../js/user.js"></script>

@endsection
@section('pagetitle')
    SkyLine Catalogue   
@endsection
@section('content')
    <div id="user-cont">
        <div class="title">
            <div class="text-cont">
                <div class="text">
                    <h1>Others Catalogue</h1>
                </div>
                <div class="line"></div>
            
        </div>

        </div>
        <div class="user-content">
    <div class="main-catalog">
        @include('SL_web.Users.Catalogue.mini-nav')

        <div class="show">
            <div class='contr'>
                <?php 
                $to = count($data);
                /// here we check if our request got ordred by or no
                $types = array('Alpahbetique', 'HighPrice', 'LowPrice');
                if (!empty($order) && in_array($order, $types)){
                    /// if the para is alpha we sort uing the name
                    if ($order=="Alpahbetique"){
                        $SHOW = array();
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
                        $SHOW = array();
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
                        $SHOW = array();
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
                            if ($SHOW[$x]['cCat']== 'others'){
                                $Model = $SHOW[$x]["cModel"];
                                $Price = $SHOW[$x]["cPrice"];
                                $Place = $SHOW[$x]["cPlace"];
                                $Pic = $SHOW[$x]["cPic1"];
                                $Pic = 'others/' . $Pic; 
                                $URI = 'others/' . $SHOW[$x]["id"];
                                if (!empty($type)){
                                    if ($type == $SHOW[$x]['cType']){
                                        echo "
                                        <a href='/catalogue/$URI' id='bloc'>
                                            <img id='bg' src='../SiteImages/Catalogue/$Pic' alt=''>
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
                                            <img id='bg' src='../SiteImages/Catalogue/$Pic' alt=''>
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
                    }
                else{
                        // if the request has not orderd by or ordred by random 
                        for ($x=0; $x<$to; $x++){
                            if ($data[$x]['cCat']== 'others'){
                                $Model = $data[$x]['cModel'];
                                $Price = $data[$x]['cPrice'];
                                $Place = $data[$x]['cPlace'];
                                $Pic = $data[$x]['cPic1'];
                                $Pic = 'others/' . $Pic; 
                                $URI = 'others/' . $data[$x]['id'];
                            
                                if (!empty($type)){
                                    if ($type == $data[$x]['cType']){
                                        echo "
                                        <a href='/catalogue/$URI' id='bloc'>
                                            <img id='bg' src='../SiteImages/Catalogue/$Pic' alt=''>
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
                                            <img id='bg' src='../SiteImages/Catalogue/$Pic' alt=''>
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
                    }
                ?>
    
    
    
                </div>
            
        </div>
    </div>
</div>
</div>
@endsection

