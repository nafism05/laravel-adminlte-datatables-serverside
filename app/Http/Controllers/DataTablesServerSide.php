<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DataTablesServerSide extends Controller
{
    public function index()
	{
        // Storage::disk('public')->put('example.txt', 'Contents');
        return view('datatablesserverside');
    }

    public function ajax(Request $request)
	{
        
        $columns = array( 
            0 =>'rendering_engine', 
            1 =>'browser',
            2=> 'platform',
            3=> 'engine_version',
            4=> 'css_grade',
        );

        DB::table('coba')->insert([
            'isi' => 'haha'
        ]);

        $data = array();
        // if(!empty($query)){
            // $no = $start + 1;
            // foreach ($query as $r) {
                // echo $user->name;
                // $nestedData['no'] = $no;
                $nestedData['rendering_engine'] = "a";
                $nestedData['browser'] = "a";
                $nestedData['platform'] = "a";
                $nestedData['engine_version'] = "a";
                $nestedData['css_grade'] = "a";
                $nestedData['action'] = '';
                $data[] = $nestedData;
                // $no++;
                // echo $nestedData['update']->format('d-m-Y H:i:s');
            // }
        // }
           
        $json_data = array(
                    "draw"            => intval(0),  
                    "recordsTotal"    => intval(10),  
                    "recordsFiltered" => intval(10), 
                    "data"            => $data  
                    );
             
        return json_encode($json_data);

        // $limit = $request->input('length');

        // Storage::disk('public')->put('example.txt', 'Contents');

        // $querycount = UserNotification::join('notifications', 'notifications.id', 'notification_id')
        //     ->selectRaw('user_id, notification_id,vm_ip,mid,notifications.updated_at')
        //     ->where('user_id','=',$id)
        //     ->whereIn('notifications.mid', $monitors)
        //     ->where('status','=',0)
        //     ->count();

        // $totalData = $querycount;
        // $totalFiltered = $totalData; 

        // $data = array(
        //     'timeout' => 60,
        //     'connect_timeout' => 60,
        //     'length' => $_POST['length'],
        //     'start' => $_POST['start'],
        //     'ordercolumn' => $_POST['order']['0']['column'],
        //     'orderdir' => $_POST['order']['0']['dir'],
        //     'draw' => $_POST['draw'],
        //     );

        // $limit = $request->input('length');
        // // $limit2 = $request->length;
        // $start = $request->input('start');
        // $order = $columns[$request->input('ordercolumn')];
        // $dir = $request->input('orderdir');
             
        // if(empty($request->input('searchvalue'))){            
        //     $query = UserNotification::join('notifications', 'notifications.id', 'notification_id')
        //         ->selectRaw('user_id, notification_id,vm_ip,mid,notifications.updated_at')
        //         ->where('user_id','=',$id)
        //         ->whereIn('notifications.mid', $monitors)
        //         ->where('status','=',0)
        //         ->orderBy($order, $dir)
        //         ->offset($start)
        //         ->limit($limit)
        //         ->get();
        // }
        // else{
        //     $search = $request->input('searchvalue'); 

        //     $query = UserNotification::join('notifications', 'notifications.id', 'notification_id')
        //         ->selectRaw('user_id, notification_id,vm_ip,mid,notifications.updated_at')
        //         ->where('user_id','=',$id)
        //         ->whereIn('notifications.mid', $monitors)
        //         ->where('status','=',0)
        //         ->where('notification_id', 'like', '%'.$search.'%')
        //         ->orWhere('vm_ip', 'like', '%'.$search.'%')
        //         ->orWhere('mid', 'like', '%'.$search.'%')
        //         ->orWhere('updated_at', 'like', '%'.$search.'%')
        //         ->orderBy($order, $dir)
        //         ->offset($start)
        //         ->limit($limit)
        //         ->get();
 
 
        //     $querycount = UserNotification::join('notifications', 'notifications.id', 'notification_id')
        //         ->selectRaw('user_id, notification_id,vm_ip,mid,notifications.updated_at')
        //         ->where('user_id','=',$id)
        //         ->whereIn('notifications.mid', $monitors)
        //         ->where('status','=',0)
        //         ->where('notification_id', 'like', '%'.$search.'%')
        //         ->orWhere('vm_ip', 'like', '%'.$search.'%')
        //         ->orWhere('mid', 'like', '%'.$search.'%')
        //         ->orWhere('updated_at', 'like', '%'.$search.'%')
        //         ->orderBy($order, $dir)
        //         ->offset($start)
        //         ->limit($limit)
        //         ->count();
        //     $datacount = $querycount;
        //     $totalFiltered = $datacount;
        // }
 
        // $data = array();
        // if(!empty($query)){
        //     $no = $start + 1;
        //     foreach ($query as $r) {
        //         // echo $user->name;
        //         $nestedData['no'] = $no;
        //         $nestedData['id_notif'] = $r->notification_id;
        //         $nestedData['mid'] = $r->mid;
        //         $nestedData['vm_ip'] = $r->vm_ip;
        //         $nestedData['update'] = $r->updated_at->format('d-m-Y H:i:s');
        //         $nestedData['action'] = '<a href="../User/showed/'.$r->mid.'/'.$r->notification_id.'" target="_blank()" type="button" class="btn dim btn-sm btn-info"><i class="fa fa-play-circle"></i> Show</button>';
        //         $data[] = $nestedData;
        //         $no++;
        //         // echo $nestedData['update']->format('d-m-Y H:i:s');
        //     }
        // }
           
        // $json_data = array(
        //             "draw"            => intval($request->input('draw')),  
        //             "recordsTotal"    => intval($totalData),  
        //             "recordsFiltered" => intval($totalFiltered), 
        //             "data"            => $data  
        //             );
             
        // return json_encode($json_data);
    }
}
