@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ trans('cruds.pharmacy') }}</h1>
          <div class="col-sm-12">
        </div>
        </div>
    <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{ trans('cruds.home') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('cruds.pharmacy') }}</li>
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
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{trans('cruds.edit')}} {{trans('cruds.pharmacy')}}</h3>
                    </div>
                    <form method="post"class="form-horizontal" action="{{ route('pharmacy.update',$pharmacy->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">{{ trans('cruds.name') }}</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="{{$pharmacy->name }}" name="name">
                                </div>
                                @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">{{ trans('cruds.address') }}</label>
                                <div class="col-sm-8">
                                    <textarea  name="address"class="form-control">{{$pharmacy->address}} </textarea>
                                </div>
                                @error('address')<div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{trans('cruds.submit')}}</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
