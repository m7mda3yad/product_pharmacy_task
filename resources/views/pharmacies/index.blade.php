@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ trans('cruds.pharmacy') }}</h1>
            <br>
            <div class="col-sm-4">
                <button type="button" class="btn btn-block btn-primary " data-toggle="modal" data-target="#modal-lg">{{ trans('cruds.add') }} {{trans('cruds.pharmacy') }}</button>
            </div>
            @include('includes.errors')
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
            <div class="card-body">
                @include('pharmacies.table')
              </div>
            </div>
        </div>
      </div>
    </div>
</section>
      @include('pharmacies.form')
  @endsection
