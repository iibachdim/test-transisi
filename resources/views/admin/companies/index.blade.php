@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.companies.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.companies.title_singular') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.companies.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-companies">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.companies.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.companies.fields.nama') }}
                        </th>
                        <th>
                            {{ trans('cruds.companies.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.companies.fields.website') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $key => $company)
                        <tr data-entry-id="{{ $company->id }}">
                            <td>
                                <img width="100px" src="{{ url('/company/'.$company->logo) }}">
                            </td>
                            <td>
                                {{ $company->nama ?? '' }}
                            </td>
                            <td>
                                {{ $company->email ?? '' }}
                            </td>
                            <td>
                                <a href="#">{{ $company->website }}</a>
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.companies.show', $company->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.companies.edit', $company->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $companies->links() }}
        </div>
    </div>
</div>


@endsection
@section('scripts')
@parent
<script>


</script>
@endsection
