@extends('dashboard::layouts.master',[$pageName = 'Profile'])
@section('content')
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><span>My Profile</span></div>
            <h2 class="nk-block-title fw-normal">Account Info</h2>
            <div class="nk-block-des">
                <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
            </div>
        </div>
    </div>
    <ul class="nk-nav nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">Personal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('profile-settings')}}">Security<span class="d-none s-sm-inline"> Setting</span></a>
        </li>
    </ul><!-- .nav-tabs -->
    <div class="nk-block">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Personal Information</h5>
                <div class="nk-block-des">
                    <p>Basic info, like your name and address, that you use on {{config('app.name')}} Platform.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="card card-bordered">
            <div class="nk-data data-list">
                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Full Name</span>
                        <span class="data-value">{{$user->firstname}} {{$user->lastname}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div>
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Email</span>
                        <span class="data-value">{{$user->email}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                </div>
                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Phone Number</span>
                        <span class="data-value text-soft">{{$user->phone_number ?? ''}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div>
                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Date of Birth</span>
                        <span class="data-value">@if($user->date_of_birth!=null){!! $user->date_of_birth->toFormattedDateString() !!}@endif</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div>
                <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                    <div class="data-col">
                        <span class="data-label">Address</span>
                        <span class="data-value">{{$user->address}},<br>{{$user->state}}, {{$user->country}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div>
            </div><!-- .nk-data -->
        </div><!-- .card -->
    </div>
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">First Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="{{$user->firstname}}" placeholder="Enter First name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Last Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="{{$user->lastname}}" placeholder="Enter Last name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" value="{{$user->phone_number}}" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Wallet Address</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" value="{{$user->wallet_address}}" placeholder="Enter wallet address">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Cryptocurrency
                                        <select class="form-control form-control-lg">
                                            <option value="btc">Bitcoin</option>
                                            <option value="eth">Ethereum</option>
                                        </select>
                                        </label>
{{--                                        <input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">--}}
                                    </div>
                                </div>

                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line </label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="{{$user->address}}">
                                    </div>
                                </div>
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-label" for="address-l2">Address Line 2</label>--}}
{{--                                        <input type="text" class="form-control form-control-lg" id="address-l2" value="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st" value="{{$user->state}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@endsection
