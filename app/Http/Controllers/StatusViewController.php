<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use DB;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class StatusViewController extends Controller {
        public function index(){
            $check1 = DB::select(
                'SELECT nama_node,status_node 
                    FROM `nodesensor` 
                WHERE id_node= 1'
            );
            $check2 = DB::select(
                'SELECT nama_node,status_node 
                    FROM `nodesensor` 
                WHERE id_node= 2'
            );
            $check3 = DB::select(
                'SELECT nama_node,status_node 
                    FROM `nodesensor` 
                WHERE id_node= 3'
            );
            $check4 = DB::select(
                'SELECT nama_node,status_node 
                    FROM `nodesensor` 
                WHERE id_node= 4'
            );
            $check5 = DB::select(
                'SELECT nama_node,status_node 
                    FROM `nodesensor` 
                WHERE id_node= 5'
            );
            return view('skripsi_checkstatus',['check1'=>$check1,'check2'=>$check2,'check3'=>$check3,'check4'=>$check4,
            'check5'=>$check5]); 
        }
    }