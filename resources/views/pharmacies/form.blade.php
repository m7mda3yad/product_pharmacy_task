<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">{{ trans('cruds.add') }} {{trans('cruds.pharmacy') }}</h3>
                </div>
                <form action="{{route('pharmacy.store')}}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                      <div class="col-12">
                          <label >{{trans('cruds.name')}}</label>
                          <input type="string"  class="form-control" name="name" value="{{old('name')}}"  placeholder="{{trans('cruds.name')}}">
                          @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="col-12">
                        <label >{{trans('cruds.address')}}</label>
                        <textarea  class="form-control" name="address" placeholder="{{trans('cruds.address')}}"> </textarea>
                        @error('address')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('cruds.close') }}</button>
                      <button type="submit" class="btn btn-primary">{{ trans('cruds.add') }}</button>
                  </div>
              </form>
            </div>
        </div>
      </div>
    </div>
</div>
