<table id="table" class="table table-bordered table-striped example1" width="100%">
  <thead>
        <tr style="">
          <th>{{trans('cruds.id')}}</th>
          <th>{{trans('cruds.title')}}</th>
          <th>{{trans('cruds.price')}}</th>
          <th>{{trans('cruds.quantity')}}</th>
          <th>{{trans('cruds.description')}}</th>
          <th>{{trans('cruds.action') }}</th>
            </tr>
    </thead>
    <tbody>
     </tbody>
    <tfoot>
    <tr>
      <th>{{trans('cruds.id')}}</th>
      <th>{{trans('cruds.title')}}</th>
      <th>{{trans('cruds.price')}}</th>
      <th>{{trans('cruds.quantity')}}</th>
      <th>{{trans('cruds.description')}}</th>
      <th>{{trans('cruds.action') }}</th>
    </tr>
    </tfoot>
  </table>
@section('js')
<script>
  $(function() {
      $('#table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('products.index') }}',
          columns: [
              { data: 'id', name: 'id' },
              { data: 'title', name: 'title' },
              { data: 'price', name: 'price' },
              { data: 'quantity', name: 'quantity' },
              { data: 'description', name: 'description' },
              { data: 'action', name: 'action', orderable: false, searchable: false }
          ],
          responsive: true,
          paging: true,
          lengthChange: true,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: true,
          dom: '<"top"lfB>rt<"bottom"ip><"clear">',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print', 'colvis', 
              {
                  text: 'Reload',
                  action: function ( e, dt, node, config ) {
                      dt.ajax.reload();
                  }
              }
          ]
      }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
  });
</script>


@endsection
