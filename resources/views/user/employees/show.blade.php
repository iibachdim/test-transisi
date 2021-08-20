@extends('layouts.user')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employees.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <th>
                            {{ trans('cruds.employees.fields.id') }}
                        </th>
                        <td>
                            {{ $employee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employees.fields.nama') }}
                        </th>
                        <td>
                            {{ $employee->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employees.fields.email') }}
                        </th>
                        <td>
                            {{ $employee->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employees.fields.company_id')}}
                        </th>
                        <td>
                            {{ $employee->nama_company }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('user.employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
