<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{

    public function getRoomInfo($id){
        $roomInfo = DB::select('select * from room where room_id = ?', [$id]);
        return response()->json([
            'status'  => true,
            'result'    => $roomInfo,
        ]);
    }
}