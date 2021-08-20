@extends('layouts.user')
@section('content')

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
                                <a class="btn btn-xs btn-primary" href="{{ route('user.companies.show', $company->id) }}">
                                    {{ trans('global.view') }}
                                </a>
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
