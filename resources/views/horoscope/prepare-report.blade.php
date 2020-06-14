@extends('layouts.app')

@section('template_title')
  {!! trans('usersmanagement.showing-user', ['name' => $horoscopes->name]) !!}
@endsection


<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

@section('content')
  <div class="container mt-5 ">
    <div class="row">
      @include('layouts.sidenav')
      <div class="col-sm-10">

        <div class="card">

          <div class="card-header text-dark">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              {!! trans('horoscopes.showing-horoscopes-title', ['name' => $horoscopes->orderID]) !!}
              <div class="float-right">
                <a href="/horoscopes" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="{{ trans('Back to Horoscope Orders') }}">
                  <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                  {!! trans('Back to all Orders') !!}
                </a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="row">
              <div class="col-sm-4 col-md-6 mx-auto">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                 {{ $horoscopes->name }}
                </h4>
                <p class="text-center text-left-tablet">
                  <strong>
                    Report Name: {{ $horoscopes->reptype }}
                  </strong>
                  @if($horoscopes->email)
                    <br />
                    <span class="text-center" data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email]) }}">
                      {{ Html::mailto($horoscopes->email, $horoscopes->email) }}
                    </span>
                  @endif
                </p>
                  <div class="text-center text-left-tablet mb-4">
                    {!! Form::open(array('url' => 'horoscope/' . $horoscopes->id, 'class' => 'form-inline', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('Delete Order'))) !!}
                      {!! Form::hidden('_method', 'DELETE') !!}
                      {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('Delete Order') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')) !!}
                    {!! Form::close() !!}
                  </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            <form class="card" action="/horoscoperep" enctype="multipart/form-data" method="post" style="width: 100%;">
              @method('PATCH')
              @csrf

              <div class="md-form col">

                <textarea type="text" id="Form-text" name="analysis" class="form-control{{ $errors->has('analysis') ? ' is-invalid' : '' }}" required> </textarea>
                <label for="Form-text">Form-text</label>
                @if ($errors->has('analysis'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('analysis') }}</strong>
                                    </span>
                @endif
              </div>
              <input type="file" name="chart">
              <input type="file" name="pdf">
              <input type="submit" name="submit" value="Submit Report" />


            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  @include('modals.modal-delete')

@endsection

@section('footer_scripts')
  @include('scripts.delete-modal-script')
  @if(config('usersmanagement.tooltipsEnabled'))
    @include('scripts.tooltips')
  @endif
@endsection
