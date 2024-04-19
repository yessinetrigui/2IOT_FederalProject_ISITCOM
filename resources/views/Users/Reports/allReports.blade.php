@extends('SL_web.Users.Reports.lay-reports')
@section('rep-content')
<div class="ViewReports">
    <?php
        $to = count($data);
        if ($to == 0){
            echo "
                    <div class='sub-rep' id='center'>
                <div class='TEXT'><h1 style='color:red;'>You Don't Have Any Report!</h1></div>
                    </div>
            ";
        }
        for($x=0; $x<$to; $x++){
            $RepID = $data[$x]['id'];
            echo "
                    <div class='sub-rep'>
                <div class='TEXT'><h1>Report ID: $RepID</h1></div>
                <a href='/reports/show/$RepID' class='BTN'><h1 >Check</h1></a>
                    </div>
            ";
        }
        ?>
    
</div>
@endsection