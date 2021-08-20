@extends('layouts.user')
@section('content')

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
                                <a class="btn btn-xs btn-primary" href="{{ route('user.employees.show', $employee->id) }}">
                                    {{ trans('global.view') }}
                                </a>
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
