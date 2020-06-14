@extends('layouts.app')

@section('template_title')
  {!! trans('usersmanagement.showing-user', ['name' => $horoscopes->name]) !!}
@endsection



@section('content')
  <div class="container mt-5 ">
    <div class="row">
      @include('layouts.sidenav')
      <div class="col-sm-10">

        <div class="" style="border: 1px solid #f05f1e">

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
                          <div class="clearfix"></div>
            <div class="border-bottom"></div>
            @if ($horoscopes->razorpayOrderId)

        <div class="col">
              <div class="col-sm-4 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.id') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->razorpayOrderId }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            </div>
            @endif

              <div class="row row-cols-1 row-cols-md-2">
                  <div class="col mb-12">
                      <!-- Card -->
                      <div class="card">

                          <!--Card image-->

                          <!--Card content-->
                          <div class="card-body">
                              <!--Title-->
                              <h4 class="card-title text-center mb-3 ">{{$horoscopes->reptype}} Report</h4>
                              <div class="row">
                                  @if ($horoscopes->name)
                                      <div class="col-md-12 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Name:
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->name }}
                                          </div>

                                          <div class="clearfix"></div>
                                          <div class="border-bottom"></div>
                                      </div>
                                  @endif

                              </div>

                              <div class="row mt-2 mb-2">
                                  @if ($horoscopes->email)
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  {{ trans('horoscopes.users-table.email') }}
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                      <span data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email]) }}">
                        {{ HTML::mailto($horoscopes->email, $horoscopes->email) }}
                      </span>
                                          </div>

                                      </div>
                                  @endif

                                  @if ($horoscopes->phone)
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  {{ trans('horoscopes.users-table.phone') }}
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->phone }}
                                          </div>

                                      </div>
                                  @endif
                                  @if ($horoscopes->name)
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Gender
                                              </strong>
                                          </div>
                                          <div class="col-sm-12">
                                              {{ $horoscopes->gender }}
                                          </div>

                                      </div>
                                  @endif
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="row mt-2 mb-2">
                                  @if ($horoscopes->created_at)
                                  <div class="col-md-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Order Received
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                                {{$horoscopes->created_at}}
                                          </div>
                                      </div>

                                  @if ($horoscopes->updated_at)
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                 Report Updated
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->updated_at }}
                                          </div>

                                      </div>
                                  @endif
                                      <div class="col-sm-4 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Status
                                              </strong>
                                          </div>
                                          <div class="col-sm-12">
                                              {{ $horoscopes->status }}
                                          </div>

                                      </div>
                                  @endif

                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="row mt-2 mb-2">
                                  @if ($horoscopes->created_at)
                                      <div class="col-md-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Refferal Source
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{$horoscopes->reftype}}
                                          </div>
                                      </div>

                                          <div class="col-sm-6 text-center">
                                              <div class="col-sm-12 text-larger">
                                                  <strong>
                                                      Refferal Details
                                                  </strong>
                                              </div>
                                              <div class="col-sm-12">
                                                  {{ $horoscopes->refdetails }}
                                              </div>
                                          </div>
                                  @endif
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>
                              <div class="text-center mt-3">
                              <a href="/horoscope/{{$horoscopes->id}}/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="{{ trans('Prepare Report') }}">
                                  <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> {{ trans('Prepare Report') }} </span>
                              </a>
                              </div>
                          </div>

                      </div>
                      <!-- Card -->
                  </div>

              </div>

              <div class="row row-cols-1 row-cols-md-2 mt-5">
                  <div class="col mb-12">
                      <!-- Card -->
                      <div class="card">
                          <!--Card content-->
                          <div class="card-body">
                              <!--Title-->
                              <h4 class="card-title text-center">Birth Details</h4>
                              <div class="row">
                                  @if ($horoscopes->dob)
                                      <div class="col-md-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Date Of Birth:
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->dob }}
                                          </div>
                                      </div>
                                  @endif

                                  @if ($horoscopes->tob)
                                      <div class="col-md-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Time Of Birth
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->tob }}
                                          </div>


                                      </div>
                                  @endif
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="row">
                                  @if ($horoscopes->pob)
                                      <div class="col-sm-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Place Of Birth
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->pob }}

                                          </div>

                                      </div>
                                  @endif

                                  @if ($horoscopes->cob)
                                      <div class="col-sm-6 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Country Of Birth
                                              </strong>
                                          </div>

                                          <div class="col-sm-12">
                                              {{ $horoscopes->cob }}
                                          </div>
                                      </div>
                                  @endif
                              </div>
                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                                <div class="col text-center">
                                      @if ($horoscopes->comments)
                                          <div class="col-md-12 text-center">
                                              <div class="col-sm-12 text-larger">
                                                  <strong>
                                                      Query
                                                  </strong>
                                              </div>

                                              <div class="col-md-12">
                                                  {{ $horoscopes->comments }}
                                              </div>

                                              <div class="clearfix"></div>
                                              <div class="border-bottom"></div>
                                          </div>
                                      @endif
                                </div>

                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              <div class="col text-center">
                                      <div class="col-md-12 text-center">
                                          <div class="col-sm-12 text-larger">
                                              <strong>
                                                  Suggestions/Recommendations
                                              </strong>
                                          </div>

                                          <div class="col-md-12">
                                              {{ $horoscopes->suggestions }}
                                          </div>

                                          <div class="clearfix"></div>
                                          <div class="border-bottom"></div>
                                      </div>

                              </div>

                              <div class="clearfix"></div>
                              <div class="border-bottom"></div>

                              @if ($horoscopes->image)

                                  <div class="col-sm-5 col-6 text-larger">
                                      <strong>
                                          Detailed Report
                                      </strong>
                                  </div>

                                  <div class="col-sm-12">
                                      <iframe src="{{ URL::to('/') }}/uploads/{{ $horoscopes->image }}" width="100%" height="500px">
                                  </div>

                                  <div class="clearfix"></div>
                                  <div class="border-bottom"></div>

                              @endif

                          </div>
                          </div>

                      </div>
                      <!-- Card -->
                  </div>
              </div>



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
