@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/style2.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $product->name??'' }}</h1>
          <br>
        </div>
    <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{ trans('cruds.home') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('cruds.products') }}</li>
        </ol>
        </div>
      </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0 pb-5">
                        <div class="user-top">
                            <div class="row align-items-center">
                                <div class="user-profile col-md-2">
                                    @if($product->photo)
                                    <div class="profile-img">
                                        <img class="profile-pic" src="{{$product->photo??''}}" alt="image">    
                                    </div>
                                    @endif
                                </div>
                                <div class="user-title col-md-7">
                                    <h4 class="card-title"> {{ trans('cruds.product') }}  {{ trans('cruds.details') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="user-detail" role="tabpanel">
                            <div class="tab-content">

                                <div role="tabpanel" class=" show active" id="information">

                                    <div class="row">
                                        @foreach (['id','title','price','quantity','description','created_at'] as $data) 
                                        <div class="col-md-6">
                                            <div class="col-group">
                                                <label for="" class="font-weight-bold"  style="color:blue">{{trans("cruds.$data")}}:</label>
                                                <span>{{$product->$data}}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        @if($product->photo)                                                        
                                        <div class="col-md-6">
                                            <div class="col-group">
                                                <img src="{{$product->photo??''}}"  sizes="150" width="150" height="150">
                                            </div>
                                        </div>
                                        @endif

                                        @if($product->pharmacies()->count()>0)
                                        <h2>Available at the following pharmacies:</h2>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Pharmacy Name</th>
                                                    <th>Address</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product->pharmacies as $pharmacy)
                                                    <tr>
                                                        <td> <a href="{{route('pharmacy.show',$pharmacy->id)}}">{{ $pharmacy->name }} </a></td>
                                                        <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 400px;">{{ $pharmacy->address }}</td>
                                                        <td>{{ $pharmacy->pivot->price }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  @endsection
