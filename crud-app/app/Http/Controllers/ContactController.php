<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.contact');
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
        // apply validation here
        $request->validate([

            "fname"=>"required",
            "lname"=>"required",
            "email"=>"required|email",
            "phone"=>"required|min:10|max:10",
            "subject"=>"required",
            "message"=>"required"
        ]);

        // insert data in contacts table
        date_default_timezone_set("Asia/Calcutta");
        $data=array(
            "firstname"=>$request->fname,
            "lastname"=>$request->lname,
            "email"=>$request->email,
            "mobile"=>$request->phone,
            "subject"=>$request->subject,
            "message"=>$request->message
        );

        // elequent query builder using ORM(Object Relational-Mapping Model)
        ContactModel::create($data);

        // sending email from mail package from package name
        Mail::to('brijeshchikhaliya1@gmail.com')->send(new SendMail($data));

        // return view('crudapp.contact');
        return redirect('/contactus')->with('success','Thanks For Contact With Us we will successfully received your information on our email');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=ContactModel::all();
        return view('crudapp.admin.managecontact',["data"=>$data]);
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
        // delete from tablename where id='id';
        ContactModel::where('id',$id)->delete();
        return redirect('admin-login/managecontact')->with('del','Your Contact Successfully Deleted');
    }
}
