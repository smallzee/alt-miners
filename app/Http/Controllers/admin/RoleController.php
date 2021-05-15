<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function role(){
        $data['page_title'] = "Admin Role";


        $data['role_data'] = Role::all();

        return view('admin.role',$data);
    }

    public function edit_role($id){
        $role = Role::where('id',$id);


        $role_data = $role->first();

        $data['role_data'] = $role_data;

        if (!isset($id) && empty($id)){
            return abort(404);
        }

        if ($role->count() == 0){
            return abort(404);
        }

        $data['page_title'] = "Update ".$role_data->name." Role";

        return view('admin.edit-role',$data);
    }

    public function update_role(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|string|min:3|max:50'
        ]);

        if ($validator->fails()){

            foreach ($validator->errors()->all() as $value){
                $data['error'] = $value;
            }

            return redirect()->back()->with('flash_error', $data['error'])->withInput();
        }

        $role = Role::find($request->role_id);

        $role->id = $request->role_id;
        $role->name = $request->name;

        $save = $role->save();

        if ($save){
            return redirect()->back()->with('flash_info','Role has been updated successfully');
        }

    }

    public function create_new_role(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:20|unique:role'
        ]);


        if ($validator->fails()){
            return redirect()->back()->with("flash_error",$validator->errors()->first())->withInput();
        }

        $role = new Role();
        $role->name = $request->name;

        if ($role->save()){
            return redirect()->back()->with('flash_info','New role has been created successfully');
        }

    }

    public function update_user_role(Request $request){
        $validator = Validator::make($request->all(),[
            'role'=>'required|numeric'
        ]);

        if ($validator->fails()){

            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $user = User::where('id',$request->id)->first();
        $user->role_id = $request->role;

        if ($user->save()){
            return redirect()->back()->with('flash_info','Role has been change to '.\role($request->role));
        }
    }

    public function change_role($user_id){

        if (!isset($user_id) && empty($user_id)){
            abort(404);
        }

        $user_data = User::where(array('id'=>$user_id))->get();

        if ($user_data->count() == 0){
            abort(404);
        }

        $data['page_title'] = $user_data[0]->full_name." - Change Role";

        $data['role'] = Role::all([
            'id', 'name']);

        $data['user_data'] = $user_data;


        return view('admin.change-role',$data);
    }
}
