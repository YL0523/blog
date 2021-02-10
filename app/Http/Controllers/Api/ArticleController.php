<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // 返回文章列表
    public function getList()
    {
        $result = array(["id" => "001", "title" => "文章001"],
            ["id" => "002", "title" => "文章002"],
            ["id" => "003", "title" => "文章003"]);
        return response()->json([
            'status'  => true,
            'result'    => $result,
        ]);
    }

    // 根据id返回文章详情内容
    public function getDetail($id)
    {
        $result = ["title" => "文章".$id,
            "content" => "这个是文章".$id."的详细内容"];
        return response()->json([
            'status'  => true,
            'result'    => $result,
        ]);
    }
}
