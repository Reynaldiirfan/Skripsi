<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Sensing | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<style>
    body{
        background-image: url("assets/sensing_bg.jpg") ;
        background-size: cover;
        padding-left: 99px;
        padding-right: 108px;
    }
</style>
<body>
  @include('skripsi_header')

    <table style="margin-top: 24px;float: left; " id="table1">
      @foreach ($nodes1 as $node1)
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Variable</th>
        <th>Value</th> 
      </tr>
      <tr>
          <td>Nama Node</td>
          <td id="namanode1">{{ $node1->nama_node }}</td>
        </tr>
      <tr>
        <td>Keasaman (pH)</td>
        <td>{{ $node1->ph_tanah }}</td>
      </tr>
      <tr>
        <td>Kelembaban Tanah</td>
        <td>{{ $node1->kelembaban_tanah }} %</td>
      </tr>
      <tr>
        <td>Suhu Tanah</td>
        <td>{{ $node1->suhu_tanah }} <span>&#8451;</span></td>
      </tr>
      <tr>
          <td>Suhu Udara</td>
          <td>{{ $node1->suhu_udara }} <span>&#8451;</span></td>
      </tr>
      @endforeach
    </table>

    <table style="margin-top: 24px;float: left; " id="table2">
      @foreach ($nodes2 as $node2)
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Variable</th>
        <th>Value</th> 
      </tr>
      <tr>
          <td>Nama Node</td>
          <td>{{ $node2->nama_node }}</td>
        </tr>
      <tr>
        <td>Keasaman (pH)</td>
        <td>{{ $node2->ph_tanah }}</td>
      </tr>
      <tr>
        <td>Kelembaban Tanah</td>
        <td>{{ $node2->kelembaban_tanah }} %</td>
      </tr>
      <tr>
        <td>Suhu Tanah</td>
        <td>{{ $node2->suhu_tanah }} <span>&#8451;</span></td>
      </tr>
      <tr>
          <td>Suhu Udara</td>
          <td>{{ $node2->suhu_udara }} <span>&#8451;</span></td>
      </tr>
      @endforeach
    </table>

    <br>

    <table style="margin-top: 20px;float: left; " id="table3">
      @foreach ($nodes3 as $node3)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $node3->nama_node }}</td>
          </tr>
        <tr>
          <td>Keasaman (pH)</td>
          <td>{{ $node3->ph_tanah }}</td>
        </tr>
        <tr>
          <td>Kelembaban Tanah</td>
          <td>{{ $node3->kelembaban_tanah }} %</td>
        </tr>
        <tr>
          <td>Suhu Tanah</td>
          <td>{{ $node3->suhu_tanah }} <span>&#8451;</span></td>
        </tr>
        <tr>
            <td>Suhu Udara</td>
            <td>{{ $node3->suhu_udara }} <span>&#8451;</span></td>
        </tr>
        @endforeach
    </table>

    <table style="margin-top: 20px;float: left; " id="table4">
      @foreach ($nodes4 as $node4)
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Variable</th>
        <th>Value</th> 
      </tr>
      <tr>
          <td>Nama Node</td>
          <td>{{ $node4->nama_node }}</td>
        </tr>
      <tr>
        <td>Keasaman (pH)</td>
        <td>{{ $node4->ph_tanah }}</td>
      </tr>
      <tr>
        <td>Kelembaban Tanah</td>
        <td>{{ $node4->kelembaban_tanah }} %</td>
      </tr>
      <tr>
        <td>Suhu Tanah</td>
        <td>{{ $node4->suhu_tanah }} <span>&#8451;</span></td>
      </tr>
      <tr>
          <td>Suhu Udara</td>
          <td>{{ $node4->suhu_udara }} <span>&#8451;</span></td>
      </tr>
      @endforeach
    </table>

    <button class="button button4" onclick="changeButtonText()" value="online" id="sensing_button" style="margin-top: 140px;margin-right: 15px;">Stop Sensing</button>
    
    <div style="margin-left:15px;margin-top: 468px;">
      <img src="assets/back.png"><a href="/" style="color: white;">Kembali</a>
    </div>
</body>
</html>


<script>
  
  var buttonSensing = document.getElementById('sensing_button').value;
  
  function changeButtonText(){
    if(buttonSensing=="offline"){ 
      document.getElementById('sensing_button').innerHTML = 'Stop Sensing';
      buttonSensing = "online";
      alert("Sensing akan dimulai !");
      location.reload();
      return false;
    }
    else{ 
      document.getElementById('sensing_button').innerHTML = 'Mulai Sensing';
      alert("Sensing akan dihentikan !");
      
      
      var table1 = document.getElementById('table1');
      var table2 = document.getElementById('table2');
      var table3 = document.getElementById('table3');
      var table = document.getElementById('table4');
      var lengthTable = table.rows.length;

      for(i=1;i<lengthTable;i++){
        var cells = table.rows.item(i).cells;
        var cells1 = table1.rows.item(i).cells;
        var cells2 = table2.rows.item(i).cells;
        var cells3 = table3.rows.item(i).cells;

        //gets amount of cells of current row
        var cellLength =cells.length;

        //loops through each cell in current row
        for(var j = 1; j < cellLength; j++){
          /* get your cell info here */
          cells.item(j).innerHTML= '-';
          cells1.item(j).innerHTML= '-';
          cells2.item(j).innerHTML= '-';
          cells3.item(j).innerHTML= '-';
        }
      }

      buttonSensing = "offline";
    }
  }
 
</script>