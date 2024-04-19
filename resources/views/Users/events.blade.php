@extends('SL_web.layouts.userLayouts')
@section('title')
    Events
@endsection
@section('sub-content')
<?php 
    $x = count($data)-1;
    if ($x>=0) {
        for ($x; $x>=0; $x--){
            $title = $data[$x]['title'];
            $sub_title = $data[$x]['sub_title'];
            $description = $data[$x]['edescription'];
            $location = $data[$x]['elocation'];
            $time = $data[$x]['etime'];
            $author = $data[$x]['author'];
            $created_on = $data[$x]['created_at'];
            $image = 'SiteImages/Events/' . $data[$x]['ImageURI'] ;
                echo " <div class='EVENTS'>
                <div class='BLC' id='BLC1'>
                    <img src='$image' alt=''>
                </div>
                <div class='BLC' id='BLC2'>
                    <div class='sub-blc' id='sub-blc1'>
                        <div class='text'>
                            <div id='title'><h1>$title</h1></div>
                            <div id='sub-title'><h1>$sub_title</h1></div>
                        </div>
                    </div>
                    <div class='sub-blc' id='sub-blc2'>
                        <div id='desc'>
                            <p>$description</p>
                        </div>
                        <div id='info'>
                            <div class='cont-inf'>
                                <div id='cont1'>
                                    <div class='ico'>
                                        <img src='/assets/icons/akar-icons_location.svg' alt=''>
                                    </div>
                                    <div class='txt'>
                                        <h1>Location</h1>
                                    </div>
                                </div>
                                <div id='cont2'>
                                    <div class='txt'>
                                        <h1>$location</h1>
                                    </div>
                                </div>
                            </div>
                            <div class='cont-inf'>
                                <div id='cont1'>
                                    <div class='ico'>
                                        <img src='/assets/icons/clock-regular-2 1-small.svg' alt=''>
                                    </div>
                                    <div class='txt'>
                                        <h1>Time</h1>
                                    </div>
                                </div>
                                <div id='cont2'>
                                    <div class='txt'>
                                        <h1>$time</h1>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class='sub-blc' id='sub-blc3'>
                            <h1>By $author on $created_on</h1>
                    </div>
                </div>
        </div>";};
    }
    else {
        echo " 
            <style>
                .EVENTS {
                    width: 95%;
                    height: 260px;
                }
                .EVENTS #BLC2 {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    align-content: center;
                }
                .EVENTS #BLC2 #sub-blc1 .text {
                    width: 70%;
                    height: 100%;
                    margin: auto;
                    position: relative;
                    background: rgba(7, 7, 7, 0.8);

                }
                
                .EVENTS #BLC2 #sub-blc1 .text #title h1 {
                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: normal;
                    font-size: 2.5vw;
                    text-align: center;
                    color: #ffffff;
                }
                </style>
                <div class='EVENTS'>
                        <div class='BLC' id='BLC2'>
                            <div class='sub-blc' id='sub-blc1'>
                                <div class='text'>
                                    <div id='title'><h1>Currently, There is no Events.</h1></div>
                                </div>
                            </div>
                        </div>
                    </div>
        ";
    }
    ?>
@endsection
