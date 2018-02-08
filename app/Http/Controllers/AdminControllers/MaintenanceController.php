<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MaintenanceModel;
use App\SliderModel;
use App\User;
use Auth;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = MaintenanceModel::where('content_name', '=' ,'contactus')->firstOrFail();
        $page_data = array('page_name'=> "Contact Us",'active'=>'contact','data'=>$data);
        return view('admin/contents/maintenance/contactus/indexcontent',array('page_data'=>$page_data));
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

        if($request->content_name == "contactus"){           
            MaintenanceModel::where('content_name', $request->content_name)
            ->update($request->except('_token','content_name'));
            $msg = 'Contact successfully updated.';
        }else if ($request->content_name == "aboutus"){
            MaintenanceModel::where('content_name', $request->content_name)
            ->update(['content_desc'=>$request->aboutus]);
            $msg = 'About us successfully updated.';
        }elseif($request->content_name == 'companyname'){
            
           MaintenanceModel::where('content_name', 'companyname')
           ->update(['content_desc'=>$request->companyname]);

           $data =   MaintenanceModel::where('content_name','=','companylogo')->firstOrFail();
           if($request->companylogo){
            $file = $request->file('companylogo');
            $imgname = $file->getClientOriginalName();       
                
            $destinationPath = 'includes/admin/images';
            $file->move($destinationPath,$file->getClientOriginalName());
        }else{
           $imgname =$data->content_desc;
        }
          MaintenanceModel::where('content_name', 'companylogo')
           ->update(['content_desc'=>$imgname]);
       
           $msg = 'Profile successfully updated.';
       }else{

       }


           return \Redirect::Back()->with('sesmsg', ['msg' => $msg]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
          $data = MaintenanceModel::where('content_name', '=' ,'aboutus')->firstOrFail();
        $page_data = array('page_name'=> "About Us",'active'=>'about','data'=>$data);
        return view('admin/contents/maintenance/aboutus/indexcontent',array('page_data'=>$page_data));
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

    public function companyprofile(){
         $companyname = MaintenanceModel::where('content_name','=','companyname')->firstOrFail();
          $companylogo = MaintenanceModel::where('content_name','=','companylogo')->firstOrFail();
        $page_data = array('page_name'=> "Company Profile",'active'=>'company','companyname'=>$companyname,'companylogo'=>$companylogo);
        return view('admin/contents/maintenance/companyprofile/indexcontent',array('page_data'=>$page_data));
    }

     public function slider(){
         $data = SliderModel::paginate(10);
        $page_data = array('page_name'=> "Slider",'active'=>'slider','data'=>$data);
        return view('admin/contents/maintenance/slider/indexcontent',array('page_data'=>$page_data));
    }

     public function maintenanceslider(Request $request){
          $slider = new SliderModel;
          if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }

       if ($request->action =='add') {
          if($request->slider_img){
            $file = $request->file('slider_img');
            $imgname = $file->getClientOriginalName();
            $destinationPath = 'includes/admin/slider';
            $file->move($destinationPath,$file->getClientOriginalName());
        }else{
         $imgname ='noimg.jpg';
     }
             $slider->slider_desc = $request->slider_desc;
             $slider->status = $request->status;
             $slider->slider_img = $imgname;
             $slider->status = $status;
          
        $slider->save();
       
           $msg = 'Slider successfully added.';
       }else{
           $data =   SliderModel::where('id','=',$request->id)->firstOrFail();

           if($request->slider_img){
            $file = $request->file('slider_img');
            $imgname = $file->getClientOriginalName();
            $destinationPath = 'includes/admin/slider';
            $file->move($destinationPath,$file->getClientOriginalName());
          }else{
           $imgname = $data->slider_img;
          }
           SliderModel::where('id', $request->id)
           ->update(['slider_desc'=>$request->slider_desc,'slider_img'=>$imgname,'status'=>$status]);
             $msg = 'Slider successfully updated.';
       }

        return \Redirect::to('admin/slider')->with('sesmsg', ['msg' => $msg]);
    }

    public function ChangePassword(Request $request)
    {       

     
         $rules =  [
            'cpass'      => 'required',
            'password'    => 'required',
            'password_confirmation' => 'required|same:password'
        ];
        $messages =  [
         'cpass.required' => '* Current Password is required.',
         'password.required' => '* New Password is required.',
         'password_confirmation.same' => '* Password does not match.', 
         'password_confirmation.required' => '* Password is required.',     
     ];
     $validator = \Validator::make($request->all(), $rules, $messages);
     $validator->after(function($validator) use ($request) {
        if (!\Hash::check($request->cpass, Auth::user()->password)) {
            $validator->errors()->add('cpass', 'Password does not match');
        }
    });

     if ($validator->fails()) {
        //
        return \Redirect::back()->withErrors($validator);
    }else{
        User::where('user_id', Auth::user()->user_id)
           ->update(['password'=>bcrypt($request->password)]);
             return \Redirect::back()->with('sesmsg', ['msg' => 'Password successfully changed.']);
    }



    }
}
