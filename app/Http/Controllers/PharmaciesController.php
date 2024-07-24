<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests;
use App\Http\Requests\PharmacyRequest;
use App\Http\Controllers\Controller;
use App\Repositories\PharmacyRepository;
class PharmaciesController extends Controller
{
    protected $repository;
    public function __construct(PharmacyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $query = $this->repository->getQuery(); 
            return Datatables::of($query)
                ->addColumn('action', function ($item) {return action_form($item, 'pharmacy');})
                ->toJson();
        }
        return view('pharmacies.index');
    }
    

    public function store(PharmacyRequest $request)
    {
            $pharmacy = $this->repository->create($request->only('name','address'));
            if($request->hasFile('photo'))
            {
                $pharmacy->photo=$this->fileUpload('pharmacies',$request->photo);
                $pharmacy->save();
            }
            return redirect()->back()->with('message', 'successfully created');
    }

    public function show($id)
    {
        $pharmacy = $this->repository->with('products')->find($id);
        return view('pharmacies.show', compact('pharmacy'));
    }
    public function edit($id)
    {
        $pharmacy = $this->repository->find($id);
        return view('pharmacies.edit',compact('pharmacy'));
    }
    public function update(PharmacyRequest $request, $id)
    {
            $pharmacy = $this->repository->update($request->only('name','address'), $id);

            if($request->hasFile('photo')){
                $pharmacy->photo=$this->delete_image($pharmacy->photo);  // remove old photo
                $pharmacy->photo=$this->fileUpload('pharmacies',$request->photo,'photo');
            }
            $pharmacy->save();
            return redirect()->back()->with('message', 'successfully  updated');
    }

    public function destroy($id,Request $request)
    {
        $deleted = $this->repository->delete($id);
        if($request->wantsJson()) 
        {
            return response()->json(['code'=>200,'message'=>'Item deleted successfully'],200);
        }
        return redirect()->back()->with('message', 'Pharmacy deleted.');
    }
}
