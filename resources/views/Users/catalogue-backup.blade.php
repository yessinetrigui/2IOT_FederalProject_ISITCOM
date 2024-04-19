@extends('SL_web.layouts.userLayouts')
@section('title')
    Catalogue
@endsection
@section('sub-content')
    <div class="main-catalog">
        @include('SL_web.Users.Catalogue.mini-nav')

        <div class="show">
            <?php
            $to = count($data);
                if (Str::length($type)!=0){

                    for ($x=0; $x<$to; $x++){
                        if ($type == $data[$x]['cType']){
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
                            }
                            echo "<div class='contr'>
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
                                </div>";
                        }
                    }   
                }else{
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
                        }
                        echo "<div class='contr'>
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
                            </div>";
                }   
                }
                
                
            ?>



            
        </div>
    </div>

@endsection
