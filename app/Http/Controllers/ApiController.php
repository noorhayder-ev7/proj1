<?php

namespace App\Http\Controllers;
namespace App\Models\Controllers;
use common\models\User;
use Illuminate\Http\Request;
use app\models\UserModel;
class ApiController extends Controller
{

    public function create(Request $request)
    {
        $users=new UserModel();
        $users->name=$request->input('name');
        $users->type=$request->input('type');
        $users->secret_word=$request->input('secret_word');
        $users->phone=$request->input('phone');
        $users->save();
        return response()->json(users);

    }




//    public function index()
//    {
//        $users=UserModel::paginate(10);
//        if($users){
//            return$this->apiResponse(UserResource::collection($users));
//
//        }
//        else{return $this->notFoundResponse();}
//
//
//    }
}
