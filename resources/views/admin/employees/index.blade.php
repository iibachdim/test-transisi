@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employees.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employees.title_singular') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employees.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-employees">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.employees.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.employees.fields.nama') }}
                        </th>
                        <th>
                            {{ trans('cruds.employees.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.employees.fields.company_id') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $key => $employee)
                        <tr data-entry-id="{{ $employee->id }}">
                            <td>
                                {{ $employee->id ?? '' }}
                            </td>
                            <td>
                                {{ $employee->nama ?? '' }}
                            </td>
                            <td>
                                {{ $employee->email ?? '' }}
                            </td>
                            <td>
                                {{ $employee->nama_company ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.employees.show', $employee->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.employees.edit', $employee->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $employees->links() }}
        </div>
    </div>
</div>


@endsection
@section('scripts')
@parent
<script>


</script>
@endsection
