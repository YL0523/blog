<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 验证用户信息
    public function verifyUser(Request $request)
    {
        $username   = $request->get('username');
        $password  = $request->get('password');
        if ( $username == 'hangge' && $password == '123456' ) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false, 'message' => '用户密码不正确']);
        }
    }
}
