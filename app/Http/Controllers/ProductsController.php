<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
class ProductsController extends Controller
{
    protected $repository;
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $query = $this->repository->getQuery(); 
    
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return action_form($item, 'products');
                })
                ->toJson();
        }
    
        return view('products.index'); 
    }
    

    public function store(ProductRequest $request)
    {
            $product = $this->repository->create($request->only('title','description','price','quantity'));
            if($request->hasFile('photo'))
            {
                $product->photo=$this->fileUpload('products',$request->photo);
                $product->save();
            }
            return redirect()->back()->with('message', 'successfully created');
    }

    public function show($id)
    {
        $product = $this->repository->with('pharmacies')->find($id);
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        $product = $this->repository->find($id);
        return view('products.edit',compact('product'));
    }
    public function update(ProductRequest $request, $id)
    {
            $product = $this->repository->update($request->only('title','description','price','quantity'), $id);

            if($request->hasFile('photo')){
                $product->photo=$this->delete_image($product->photo);  // remove old photo
                $product->photo=$this->fileUpload('products',$request->photo,'photo');
            }
            $product->save();
            return redirect()->back()->with('message', 'successfully  updated');
    }

    public function destroy($id,Request $request)
    {
        $deleted = $this->repository->delete($id);
        if($request->wantsJson()) 
        {
            return response()->json(['code'=>200,'message'=>'Item deleted successfully'],200);
        }
        return redirect()->back()->with('message', 'Product deleted.');
    }
}
