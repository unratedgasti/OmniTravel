<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $data =   ProductModel::paginate(10);
      $page_data = array('page_name'=> "Products List",'active'=>'products','products'=>$data);
        return view('admin/contents/product/indexcontent',array('page_data'=>$page_data));
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

        $this->validate($request, [
            'prod_name' => 'required',
            'prod_description' => 'required',
            'prod_price'=> 'required',
            'prod_image'=> 'required',
            ],
            [
             'prod_name.required' => '* Product Name is required.',
             'prod_description.required' => '* Product Description is required.',
             'prod_price.required' => '* Product Price is required.',
             'prod_image.required' => '* Product Image is required.',     
            ]
            );

         $product = new ProductModel;
         if($request->prod_status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
         if($request->prod_image){
            $file = $request->file('prod_image');    
            $destinationPath = 'includes/admin/products';
            $file->move($destinationPath,$file->getClientOriginalName());
            $img = $file->getClientOriginalName();;
        }else{
            $img = 'noimg.jpg';
        }
       
             $product->prod_name = $request->prod_name;
             $product->prod_description = $request->prod_description;
             $product->prod_price = $request->prod_price;
             $product->prod_image = $img;
             $product->prod_status = $status;
             $product->prod_quantity = $request->prod_quantity;
          
        $product->save();

    return \Redirect::to('admin/products')->with('sesmsg', ['msg' => 'Product successfully added.']);
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
          $page_data = array('page_name'=> "Add Product",'active'=>'add');
        return view('admin/contents/product/add',array('page_data'=>$page_data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //
        $data =   ProductModel::find($id);
           $page_data = array('page_name'=> "Edit Product",'active'=>'edit','product'=>$data);
        return view('admin/contents/product/edit',array('page_data'=>$page_data));
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
        $data =   ProductModel::find($id);

        if($request->prod_status == 'on'){
            $request->merge(['prod_status' =>1]);
        }else{
            $request->merge(['prod_status' =>0]);
        }
       

        if($request->prod_images){
            $file = $request->file('prod_images');
            $imgname = $file->getClientOriginalName();
           

            $request->merge(['prod_image' =>$imgname]);                
                $destinationPath = 'includes/admin/products';
                $file->move($destinationPath,$file->getClientOriginalName());
        }else{
            $request->merge(['prod_image' =>$data->prod_image]);
        }
        ProductModel::where('prod_id', $id)
          ->update($request->except('_token','prod_images'));



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
