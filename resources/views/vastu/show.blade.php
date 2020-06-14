@extends('layouts.app')

@section('template_title')
    {!! trans('horoscopes.showing-all-horoscopes') !!}
@endsection

@section('template_linked_css')
    @if(config('usersmanagement.enabledDatatablesJs'))

        <link rel="stylesheet" type="text/css" href="{{ config('usersmanagement.datatablesCssCDN') }}">
    @endif
    <style type="text/css" media="screen">
        .users-table {
            border: 0;
        }
        .users-table tr td:first-child {
            padding-left: 15px;
        }
        .users-table tr td:last-child {
            padding-right: 15px;
        }
        .users-table.table-responsive,
        .users-table.table-responsive table {
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')


    <div class="container mt-5 ">
        <div class="row">
            @include('layouts.sidenav')
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {!! trans('All Vastu Orders') !!}
                            </span>
                        </div>
                    </div>

                    <div class="card-body">

                       {{-- @if(config('usersmanagement.enableSearchUsers'))
                            @include('partials.search-horoscope-form')
                        @endif--}}

                        <div class="table-responsive horoscopes-table">
                            <table class="table table-striped table-sm data-table">
                                <caption id="user_count">
                                    {{ trans_choice('horoscopes.users-table.caption', 1, ['horoscopes' => $vastus->count()]) }}
                                </caption>
                                <thead class="thead">
                                <tr>
                                    <th>{!! trans('horoscopes.users-table.id') !!}</th>
                                    <th class="hidden-xs">{!! trans('horoscopes.users-table.rtype') !!}</th>
                                    <th class="hidden-xs">{!! trans('horoscopes.users-table.fname') !!}</th>
                                    <th class="hidden-xs">{!! trans('horoscopes.users-table.email') !!}</th>
                                    <th class="hidden-xs">{!! trans('horoscopes.users-table.phone') !!}</th>
                                    <th>{!! trans('horoscopes.users-table.actions') !!}</th>
                                    <th class="no-search no-sort"></th>
                                    <th class="no-search no-sort"></th>
                                </tr>
                                </thead>
                                <tbody id="horoscopes_table">
                                @foreach($vastus as $vastu)
                                    <tr>
                                        <td>{{$vastu->orderID}}</td>
                                        <td>{{$vastu->reptype}}</td>
                                        <td class="hidden-xs">{{$vastu->name}}</td>
                                        <td class="hidden-xs"><a href="mailto:{{ $vastu->email }}" title="email {{ $vastu->email }}">{{ $vastu->email }}</a></td>
                                        <td>{{$vastu->phone}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('vastu/' . $vastu->id) }}" data-toggle="tooltip" title="Show">
                                                {!! trans('horoscopes.buttons.show') !!}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tbody id="search_results"></tbody>
                                @if(config('usersmanagement.enableSearchUsers'))
                                    <tbody id="search_results"></tbody>
                                @endif

                            </table>

                            @if(config('usersmanagement.enablePagination'))
                                {{ $vastus->links() }}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.modal-delete')

@endsection

@section('footer_scripts')
    @if ((count($vastus) > config('usersmanagement.datatablesJsStartCount')) && config('usersmanagement.enabledDatatablesJs'))
        @include('scripts.datatables')
    @endif
    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    @if(config('usersmanagement.tooltipsEnabled'))
        @include('scripts.tooltips')
    @endif
    @if(config('usersmanagement.enableSearchUsers'))
        @include('scripts.search-horoscopes')
    @endif
@endsection
