<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Check Status | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<style>
    body{
        background-image: url("assets/sensing_bg.jpg") ;
        background-size: 100%;
        padding-left: 99px;
        padding-right: 108px;
        background-repeat: no-repeat;
    }
</style>
<body  onload=" GetCellValues()">
    @include('skripsi_header')
    <br>
    <table style="margin-top: 24px;float: left; " id="table1">
        @foreach ($check1 as $check1)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check1->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td>{{ $check1->status_node}}</td>
        </tr>
        @endforeach
    </table>

    <table style="margin-top: 24px;float: left; " id="table2">
        @foreach ($check2 as $check2)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check2->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td>{{ $check2->status_node}}</td>
        </tr>
        @endforeach
    </table>

    <br>

    <table style="margin-top: 24px;float: left; " id="table3">
        @foreach ($check3 as $check3)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check3->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td>{{ $check3->status_node}}</td>
        </tr>
        @endforeach
    </table>

    <table style="margin-top: 24px;float: left; " id="table4">
        @foreach ($check4 as $check4)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check4->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td>{{ $check4->status_node}}</td>
        </tr>
        @endforeach
    </table>

    <br>

    <table style="margin-top: 24px;float: left;margin-left:26%; " id="table5">
        @foreach ($check5 as $check5)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check5->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td>{{ $check5->status_node}}</td>
        </tr>
        @endforeach
    </table>
    
    <div style="margin-left:15px;margin-top: 418px;">
        <img src="assets/back.png"><a href="/" style="color: white;">Kembali</a>
    </div>
</body>

<script>
    function GetCellValues() {
        var table = document.getElementById('table1');
        var table2 = document.getElementById('table2');
        var table3 = document.getElementById('table3');
        var table4 = document.getElementById('table4');
        var table5 = document.getElementById('table5');

        //alert(table.rows[2].cells[1].innerHTML);
        if(table.rows[2].cells[1].innerHTML==1){
            table.rows[2].cells[1].innerHTML = "Online";
        }
        else{
            table.rows[2].cells[1].innerHTML = "Offline";
        }

        if(table2.rows[2].cells[1].innerHTML==1){
            table2.rows[2].cells[1].innerHTML = "Online";
        }
        else{
            table2.rows[2].cells[1].innerHTML = "Offline";
        }

        if(table3.rows[2].cells[1].innerHTML==1){
            table3.rows[2].cells[1].innerHTML = "Online";
        }
        else{
            table3.rows[2].cells[1].innerHTML = "Offline";
        }

        if(table4.rows[2].cells[1].innerHTML==1){
            table4.rows[2].cells[1].innerHTML = "Online";
        }
        else{
            table4.rows[2].cells[1].innerHTML = "Offline";
        }

        if(table5.rows[2].cells[1].innerHTML==1){
            table5.rows[2].cells[1].innerHTML = "Online";
        }
        else{
            table5.rows[2].cells[1].innerHTML = "Offline";
        }
    }

</script>