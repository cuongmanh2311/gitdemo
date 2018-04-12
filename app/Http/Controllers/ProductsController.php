<?php

namespace App\Http\Controllers;
use App\Http\Models\ProductsModel;
use Illuminate\Http\Request;
use App\Http\resources\Product as ProductsResource;
use App\Product;
class ProductsController extends Controller
{

    //cau hinh protected $except = [
        //
        //  '/*' 


    //]; trong App\Http\MiddleWare\Verity !!!!



    private $status;
    public function __construct(Product $status) {
        $this->status  = $status;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all()->toArray();
        return Response()->json([
            'status' => true,
            'DATA' => $product
        ]);
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
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        
        $result = $product->save();

        if($result) {
            return response()->json([
                'Status' => true,
                'Message' => $request->name
            ],200);
        } else {
            return response()->json([
                    'Status' => true,
                    'Message' => 'product was not insert'
                ],200);
        }

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
        $product  = Product::find($id);
        if($product) {
            return response()->json($product);
        }
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

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json([
            'status' => true,
            'message' => "Update success"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
    }
}
