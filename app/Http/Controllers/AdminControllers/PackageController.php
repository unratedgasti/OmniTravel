<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PackageModel;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data =   PackageModel::paginate(7);
      $page_data = array('page_name'=> "Package List",'active'=>'package','package'=>$data);
        return view('admin/contents/package/indexcontent',array('page_data'=>$page_data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         $page_data = array('page_name'=> "Add Package",'active'=>'package');
        return view('admin/contents/package/add',array('page_data'=>$page_data));
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
        $package = new PackageModel;
         if($request->pack_status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
           if($request->pack_img){
            $file = $request->file('pack_img');    
            $destinationPath = 'includes/admin/packages';
            $file->move($destinationPath,$file->getClientOriginalName());
            $img = $file->getClientOriginalName();;
        }else{
            $img = 'noimg.jpg';
        }
        $package->pack_name = $request->pack_name;  
        $package->pack_desc = $request->pack_desc;
        $package->pack_price = $request->pack_price;  
        $package->start_date =  date('Y-m-d',strtotime($request->start_date)); 
        $package->end_date = date('Y-m-d',strtotime($request->end_date)); 
        $package->pack_status = $status;          
        $package->pack_inclusion = $request->pack_inclusion;
        $package->pack_test = $request->pack_test;
        $package->pack_img = $img;            
        $package->save();

    return \Redirect::to('admin/package')->with('sesmsg', ['msg' => 'Package successfully added.']);
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
        $data =   PackageModel::find($id);
           $page_data = array('page_name'=> "Edit Package",'active'=>'package','package'=>$data);
        return view('admin/contents/package/edit',array('page_data'=>$page_data));
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
        $data =   PackageModel::find($id);
        if($request->pack_status == 'on'){
            $request->merge(['pack_status' =>1]);
        }else{
            $request->merge(['pack_status' =>0]);
        }
        $request->merge(['start_date' =>date('Y-m-d',strtotime($request->start_date)),'end_date' =>date('Y-m-d',strtotime($request->end_date))]);
        if($request->pack_images){
            $file = $request->file('pack_images');
            $imgname = $file->getClientOriginalName();       
            
            $request->merge(['pack_img' => $imgname]);    
            $destinationPath = 'includes/admin/packages';
            $file->move($destinationPath, $file->getClientOriginalName());
        }else{
            $request->merge(['pack_img' =>$data->pack_img]);
        }
        PackageModel::where('id', $id)
        ->update($request->except('_token','pack_images'));



        return \Redirect::Back()->with('sesmsg', ['msg' => 'Product successfully updated.']);
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
