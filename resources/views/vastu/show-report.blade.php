@extends('layouts.app')

@section('template_title')
  {!! trans('usersmanagement.showing-user', ['name' => $vastus->name]) !!}
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
              {!! trans('horoscopes.showing-horoscopes-title', ['name' => $vastus->orderID]) !!}
              <div class="float-right">
                <a href="/vastus" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="{{ trans('Back to Vastu Orders') }}">
                  <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                  {!! trans('Back to Vastu Orders') !!}
                </a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="row">
              <div class="col-sm-4 col-md-6 mx-auto">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                  {{ $vastus->name }}
                </h4>
                <p class="text-center text-left-tablet">
                  <strong>
                    {{ $vastus->reptype }}
                  </strong>
                  @if($vastus->email)
                    <br />
                    <span class="text-center" data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $vastus->email]) }}">
                      {{ Html::mailto($vastus->email, $vastus->email) }}
                    </span>
                  @endif
                </p>
                  <div class="text-center text-left-tablet mb-4">
                    <a href="/vastu/{{$vastus->id}}/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="{{ trans('Edit Order') }}">
                      <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> {{ trans('Edit Order') }} </span>
                    </a>
                    {!! Form::open(array('url' => 'horoscope/' . $vastus->id, 'class' => 'form-inline', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('usersmanagement.deletereport'))) !!}
                      {!! Form::hidden('_method', 'DELETE') !!}
                      {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('Delete Order') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')) !!}
                    {!! Form::close() !!}
                  </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @if ($vastus->razorpayOrderId)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('Payment ID') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->razorpayOrderId }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->name)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.fname') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->name }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->email)

            <div class="col-sm-5 col-6 text-larger">
              <strong>
                {{ trans('horoscopes.users-table.email') }}
              </strong>
            </div>

            <div class="col-sm-7">
              <span data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $vastus->email]) }}">
                {{ HTML::mailto($vastus->email, $vastus->email) }}
              </span>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @endif

            @if ($vastus->phone)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.phone') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->phone }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->gender)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.gender') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->gender }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->dob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.dob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->dob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->tob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.tob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->tob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->pob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.pob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->pob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->cob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.cob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->cob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif


            @if ($vastus->tob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.tob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->tob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->reftype )

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.reftype') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->reftype }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($vastus->refdetails))


                @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.refdetails') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->refdetails }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif


            @if (empty($vastus->horoscope))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.horoscope') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->horoscope }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($vastus->productamount))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.productamount') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->productamount }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($vastus->status))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.status') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->status }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->created_at)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelCreatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $vastus->created_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($vastus->filenames)

              <div class="col-sm-5 col-6 mb-3 text-larger">
                <strong>
                  {{ trans('Images') }}
                </strong>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div id="mdb-lightbox-ui"></div>
                  <div class="mdb-lightbox no-margin">
                    @foreach(explode('|',$vastus->filenames) as $fileName)

                      <figure class="col-md-3">
                        <a href="{{ url('') }}/image/{{ $fileName }}" data-size="1600x1067">
                          <img src="{{ url('') }}/image/{{ $fileName }}" class="img-fluid" width="150">
                        </a>
                      </figure>

                    @endforeach
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

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
