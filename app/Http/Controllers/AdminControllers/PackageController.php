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
        $package->pack_test = $request->package_test;          
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
         PackageModel::where('id', $id)
          ->update($request->except('_token'));



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
