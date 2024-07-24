<div class="btn-group">
    <button type="button" class="btn btn-default">{{ trans('cruds.action') }}</button>
    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown"></button>
    <div class="dropdown-menu" role="menu">       
        <a class="dropdown-item" href="{{route("$route.show",$item->id)}}" >    {{ trans('cruds.view') }}</a>
        <a class="dropdown-item" href="{{route("$route.edit",$item->id)}}" >    {{ trans('cruds.edit') }}</a>
        <form method="POST" action="{{ route("$route.destroy", $item->id) }}"
            accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" style="margin-left:6px;background: none; color: inherit; border: none; font: inherit; cursor: pointer; outline: inherit;" onclick="return confirm(&quot;Confirm delete?&quot;)">{{ trans('cruds.delete') }}</button>
        </form>
    </div>
</div>