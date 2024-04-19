@extends('SL_web.Users.Reports.lay-reports')
@section('rep-content')
<div class="ShowReport">
        <div class="controll">
            <h1> Report ID: {{$Repid}}</h1>
            @if ($data[0]['ReportStatus']== "Pending")
                <h1 class="box">Report Status: <span class="PEND">{{$data[0]['ReportStatus']}}</span></h1>
            @endif
            @if ($data[0]['ReportStatus']== "Closed")
                <h1  class="box">Report Status: <span class="CLOS">{{$data[0]['ReportStatus']}}</span></h1>
            @endif
        </div>
        <div class="message">
            <textarea name="RepDesc" id="" cols="30" rows="15" style="resize: none;" readonly>{{$data[0]['PlayerText']}}</textarea>
        </div>

            @if (!empty($data[0]['AdminRep']))
            <div class="mini-controll">
                <h1>Admin Reponse:</h1>
                <h1>Admin ID: {{$data[0]['AdminID']}}</h1>
            </div>
                <div class="message">
                    <textarea name="RepDesc" id="" cols="30" rows="12"  style="resize: none;" readonly>{{$data[0]['AdminRep']}}</textarea>
                </div>
            @endif
        <div class="mini-controll">
            <h1>Created At: {{$data[0]['created_at']}}</h1>
            @if ($data[0]['ReportStatus']== "Closed")
            <h1>Admin Reponse At: {{$data[0]['updated_at']}}</h1>
            @endif

        </div>
    </form>
</div>
@endsection