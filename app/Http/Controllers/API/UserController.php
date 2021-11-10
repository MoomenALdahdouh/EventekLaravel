<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Service::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$data = array();
        $data['category_name'] = $request->category_name;
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        DB::table('categories')->insert($data);*/
        $Users = new User();
        $Users->remember_token = $request->remember_token;
        $Users->first_name = $request->first_name;
        $Users->second_name = $request->second_name;
        $Users->email = $request->email;
        $Users->email_verified_at = $request->email_verified_at;
        $Users->phone = $request->phone;
        $Users->password = $request->password;
        $Users->image = $request->image;
        $Users->type = $request->type;
        $Users->address = $request->address;
        $Users->date_of_create = Carbon::now();
        $Users->updated_at = $request->updated_at;
        $Users->status = $request->status;
        $result = $Users->save();
        if ($result)
            return ["Result" => "User added Successfully"];
        else
            return ["Result" => "Failed to add User"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        //
        return $id ? User::find($id) : User::all();//If and Else  if find category with this id get it else get all categories

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->statuss = $request->statuss;
        $category->date_of_create = Carbon::now();
        $result = $category->save();
        if ($result)
            return ["Result" => "Category update Successfully"];
        else
            return ["Result" => "Failed to update"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
