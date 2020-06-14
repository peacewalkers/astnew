@extends('layouts.app')

@section('template_title')
  {!! trans('usersmanagement.showing-user', ['name' => $matchmakers->name]) !!}
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
              {!! trans('horoscopes.showing-horoscopes-title', ['name' => $matchmakers->orderID]) !!}
              <div class="float-right">
                <a href="/matchmakers" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="{{ trans('Matchmakers Orders') }}">
                  <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                  {!! trans('Back to All Orders') !!}
                </a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="row">
              <div class="col-sm-4 col-md-6 mx-auto">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                  {{ $matchmakers->name }}
                </h4>
                <p class="text-center text-left-tablet">
                  <strong>
                    {{ $matchmakers->reptype }}
                  </strong>
                  @if($matchmakers->email)
                    <br />
                    <span class="text-center" data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $matchmakers->email]) }}">
                      {{ Html::mailto($matchmakers->email, $matchmakers->email) }}
                    </span>
                  @endif
                </p>
                <div class="text-center text-left-tablet mb-4">
                  <a href="/horoscope/{{$matchmakers->id}}/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="{{ trans('Prepare Report') }}">
                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> {{ trans('Prepare Report') }} </span>
                  </a>
                  {!! Form::open(array('url' => 'horoscope/' . $matchmakers->id, 'class' => 'form-inline', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('Delete Order'))) !!}
                  {!! Form::hidden('_method', 'DELETE') !!}
                  {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('Delete Order') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')) !!}
                  {!! Form::close() !!}
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>
    <div class="row">
         <div class="col-md-6">
            @if ($matchmakers->razorpayOrderId)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('Payment Order ID') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->razorpayOrderId }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->name)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.fname') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->name }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->email)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.email') }}
                </strong>
              </div>

              <div class="col-sm-7">
              <span data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $matchmakers->email]) }}">
                {{ HTML::mailto($matchmakers->email, $matchmakers->email) }}
              </span>
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->phone)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.phone') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->phone }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->gender)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.gender') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->gender }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->dob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.dob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->dob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->tob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.tob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->tob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->pob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.pob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->pob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->cob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.cob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->cob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif


            @if ($matchmakers->comments)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.tob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->comments }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->reftype )

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.reftype') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->reftype }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($matchmakers->refdetails))


            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.refdetails') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->refdetails }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif


            @if (empty($matchmakers->horoscope))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.horoscope') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->horoscope }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($matchmakers->productamount))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.productamount') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->productamount }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($matchmakers->status))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.status') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->status }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->created_at)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelCreatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->created_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($matchmakers->updated_at)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelUpdatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $matchmakers->updated_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

          </div>
            <div class="col-md-6">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist"
                     aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1 pt-3" role="tab" id="heading1">
                            <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="true"
                               aria-controls="collapse1">
                                <h6 class="mb-0 text-uppercase font-thin">
                                    #1 Matching Partner<i class="fas fa-angle-down rotate-icon"></i>
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                             data-parent="#accordionEx7">
                            <div class=" mb-1 mt-3">

                                @if ($matchmakers->nameone)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Partner Name') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->nameone }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                    @if ($matchmakers->dobone)

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                {{ trans('Date Of Birth') }}
                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            {{ $matchmakers->dobone }}
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    @endif

                                    @if ($matchmakers->tobone)

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                {{ trans('Time Of Birth') }}
                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            {{ $matchmakers->tobone }}
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    @endif

                                    @if ($matchmakers->pobone)

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                {{ trans('Place Of Birth') }}
                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            {{ $matchmakers->pobone }}
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    @endif
                                    @if ($matchmakers->cobone)

                                        <div class="col-sm-5 col-6 text-larger">
                                            <strong>
                                                {{ trans('Country Of Birth') }}
                                            </strong>
                                        </div>

                                        <div class="col-sm-7">
                                            {{ $matchmakers->cobone }}
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="border-bottom"></div>

                                    @endif
                            </div>
                        </div>
                        <!-- Accordion card -->
                    </div>
                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2"
                               aria-expanded="false" aria-controls="collapse2">
                                <h6 class="mb-0 text-uppercase font-thin">
                                    #2  Matching Partner<i class="fas fa-angle-down rotate-icon"></i>
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
                             data-parent="#accordionEx7">
                            <div class="mt-3 mb-1 ">

                                @if ($matchmakers->nametwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Partner Name') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->nametwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                @if ($matchmakers->dobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Date Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->dobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                @if ($matchmakers->tobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Time Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->tobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                @if ($matchmakers->pobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Place Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->pobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif
                                @if ($matchmakers->cobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Country Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->cobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3"
                               aria-expanded="false" aria-controls="collapse3">
                                <h6 class="mb-0 text-uppercase font-thin">
                                    #3  Matching Partner <i class="fas fa-angle-down rotate-icon"></i>
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
                             data-parent="#accordionEx7">
                            <div class="mt-3 mb-1 ">

                                @if ($matchmakers->nametwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Partner Name') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->nametwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                @if ($matchmakers->dobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Date Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->dobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                @if ($matchmakers->tobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Time Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->tobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif

                                @if ($matchmakers->pobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Place Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->pobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif
                                @if ($matchmakers->cobtwo)

                                    <div class="col-sm-5 col-6 text-larger">
                                        <strong>
                                            {{ trans('Country Of Birth') }}
                                        </strong>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ $matchmakers->cobtwo }}
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="border-bottom"></div>

                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!--/.Accordion wrapper-->
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
