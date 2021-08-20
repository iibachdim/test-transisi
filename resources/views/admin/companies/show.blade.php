@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.companies.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="text-center">
                <img width="200" src="{{ url('/transisi/'.$company->logo) }}" class="rounded mx-auto d-block">
            </div>
            <br>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.companies.fields.id') }}
                        </th>
                        <td>
                            {{ $company->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companies.fields.nama') }}
                        </th>
                        <td>
                            {{ $company->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companies.fields.email') }}
                        </th>
                        <td>
                            {{ $company->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.companies.fields.website') }}
                        </th>
                        <td>
                            <a href="#">{{ $company->website }}</a>
                        </td>
                    </tr>
                    <tr>

                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('admin.companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
