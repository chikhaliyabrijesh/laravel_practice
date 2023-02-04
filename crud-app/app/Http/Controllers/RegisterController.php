<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.register');
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
        $request->validate([
            "name"=>"required",
            "mobile"=>"required|min:10|max:10",
            "email"=>"required|email",
            "pass"=>"required",
            "cpass"=>"required",
            "address"=>"required"
        ]);

        // insert data in customers table
        date_default_timezone_set("Asia/Calcutta");
        $data=array(
            "name"=>$request->name,
            "mobile"=>$request->mobile,
            "email"=>$request->email,
            "password"=>$request->pass,
            "address"=>$request->address
        );

        // elequent query builder using ORM(Object Relational-Mapping Model)
        RegisterModel::create($data);

        // sending email from mail package from package name
        Mail::to('brijeshchikhaliya1@gmail.com')->send(new RegisterMail($data));

        // return view('crudapp.register');

        // return view('crudapp.contact');
        return redirect('/register')->with('success','Thanks For Register With Us');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=RegisterModel::all();
        return view('crudapp.admin.managecustomer',["data"=>$data]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete from tablename where id='$id'
        RegisterModel::where('id',$id)->delete();
        return redirect('admin-login/managecustomers')->with('del','Your Customer Successfully Deleted');
    }
}
