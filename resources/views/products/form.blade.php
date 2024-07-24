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
                  <h3 class="card-title">{{ trans('cruds.add') }} {{trans('cruds.products') }}</h3>
                </div>
                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                      <div class="col-6">
                          <label >{{trans('cruds.title')}}</label>
                          <input type="string"  class="form-control" name="title" value="{{old('title')}}"  placeholder="{{trans('cruds.title')}}">
                          @error('title')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="col-6">
                          <label >{{trans('cruds.price')}}</label>
                          <input type="number"  class="form-control" name="price" value="{{old('price')}}"  placeholder="{{trans('cruds.price')}}">
                          @error('price')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>

                      <div class="col-6">
                        <label >{{trans('cruds.quantity')}}</label>
                        <input type="number"  class="form-control" name="quantity" value="{{old('quantity')}}"  placeholder="{{trans('cruds.quantity')}}">
                        @error('quantity')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="col-6">
                          <label for="photo">{{trans('cruds.photo')}}</label>
                          <div class="input-group">
                              <div class="">
                                  <input type="file" class="form-control" name="photo">
                                  <label class="" for="photo">{{trans('cruds.choose')}} {{trans('cruds.photo')}} </label>
                              </div>
                          </div>
                          @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                      <div class="col-12">
                        <label >{{trans('cruds.description')}}</label>
                        <textarea  class="form-control" name="description" placeholder="{{trans('cruds.description')}}"> </textarea>
                        @error('description')<div class="text-danger">{{ $message }}</div> @enderror
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
