<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use DB;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class SensingViewController extends Controller {
        public function index(){
            $nodes1 = DB::select(
                'SELECT nodesensor.nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                    FROM nodesensor JOIN tanah on id_tanah = nodesensor.id_node 
                WHERE id_node = 1 AND kode_petak=1'
            );
            $nodes2 = DB::select(
                'SELECT nodesensor.nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                    FROM nodesensor JOIN tanah on id_tanah = nodesensor.id_node 
                WHERE id_node = 2 AND kode_petak=1'
            );
            $nodes3 = DB::select(
                'SELECT nodesensor.nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                    FROM nodesensor JOIN tanah on id_tanah = nodesensor.id_node 
                WHERE id_node = 3 AND kode_petak=1'
            );
            $nodes4 = DB::select(
                'SELECT nodesensor.nama_node,ph_tanah,kelembaban_tanah,suhu_tanah,suhu_udara 
                    FROM nodesensor JOIN tanah on id_tanah = nodesensor.id_node 
                WHERE id_node = 4 AND kode_petak=1'
            );
            return view('skripsi_sensing',['nodes1'=>$nodes1,'nodes2'=>$nodes2,'nodes3'=>$nodes3,'nodes4'=>$nodes4]); 
        }
    }


