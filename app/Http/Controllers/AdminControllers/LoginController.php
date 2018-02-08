<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_data = array('email'=> "",'password'=>'');

        return view('admin/auth/login',array('page_data'=>$page_data));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    public function login_attempt(Request $request){
        if (Auth::attempt(['user_email' => $request->user_email, 'password' => $request->user_password])) { 

            if(Auth::user()->usertype_id == 1){
                return redirect('/admin/dashboard');
            }/*else if(Auth::user()->usertype_id == 2){
                $error = 0;
                $data =User::getdetailsdealer()->first()->getAttributes();
                foreach ($data as $key => $value) {
                    if($value == "" || $value == null){
                        $error++;
                    }
                }
                if($data['dealer_flag'] == 0){
                    return redirect('/profile');
                }else{
                    return redirect('/dealer');
                }
                
            }else if(Auth::user()->usertype_id == 1){
                return redirect('/');
            }*/

        }else{
            $emailerror = '';
            $passworderror = '';
            if(!$request->user_email){
                $emailerror = 'has-error';
            }

            if(!$request->user_password){
                $passworderror = 'has-error';
            }
             if(!$request->user_email && !$request->user_password){
                $msg = 'Email and Password are required.';
             }else if(!$request->user_email){
                 $msg = 'Email is required.';
             }elseif(!$request->user_password){
                 $msg = 'Password is required.';
             }else{
                $msg = "Email and Password doesn't match.";
             }

            return \Redirect::back()->with('sesserror', ['msg' => $msg,'email'=>$emailerror,'password'=>$passworderror]);
        }
    }
}
