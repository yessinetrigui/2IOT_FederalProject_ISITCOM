@extends('SL_web.layouts.userLayouts')
@section('title')
    News
@endsection
@section('sub-content')
<?php 
    $x = count($data)-1;
    if ($x>=0){
        for ($x; $x>=0; $x--){
            $title = $data[$x]['title'];
            $sub_title = $data[$x]['sub_title'];
            $description = $data[$x]['description'];
            $author = $data[$x]['author'];
            $created_on = $data[$x]['created_at'];
            $image = 'SiteImages/News/' . $data[$x]['ImageURI'] ;
            echo " <div class='NEWS'>
            <div class='BLC1'>
                <div class='IMG'>
                    <img src='$image' alt=''>
                    <div class='cont-title'>
                        <h1>$title</h1>
                    </div>
                </div>
            </div>
            <div class='BLC2'>
                <div class='TEXT-BLOC'> 
                    <div class='sub-title'>
                        <h1>$sub_title </h1>
                    </div>
                    <div class='desc'>
                        <p>$description</p>
                    </div>
            </div>
                <div class='author'>
                    <h2>Published By:  $author  on  $created_on</h2>
                </div>
            </div>
        </div>";
        };
    }else {
        echo " <div class='NEWS'>
            <div class='BLC1'>
                <div class='IMG'>
                    <div class='cont-title'>
                        <h1>Currently, There is no News.</h1>
                    </div>
                </div>
            </div>
            </div>
        </div>";
    }

?>
    
@endsection
