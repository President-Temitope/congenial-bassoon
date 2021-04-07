@extends('dashboard::layouts.master')

@section('content')
    <!-- Main Content -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Deposits
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-btc fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Withdraws
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-btc fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @if(Auth::user()->hasRole(['user']))
            <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Total Repeats
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-sync fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
        @if(Auth::user()->hasRole(['admin','super-admin']))
            <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Total Users
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
        <!-- Pending Requests Card Example -->
            @if(Auth::user()->hasRole(['admin','super-admin']))
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pending Requests
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        <!-- Active Plan  -->
            @if(Auth::user()->hasRole('user'))
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Active plan(s)
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endif

    <!-- Content Row -->

            <!-- Pie Chart -->
            @if(count($investments) > 0)
                @foreach($investments as $investment)
                    <div class="col-sm-4 col-lg-4 col-md-4"  >
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Plan</h6>
                                @can('edit investment')
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                             aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Operations:</div>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#{{Str::slug($investment->name,'-')}}">Edit</a>
                                            <a class="dropdown-item" href="/investments/deactivateInvestment/{{$investment->id}}">Deactivate</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/investments/deleteInvestment/{{$investment->id}}">Delete</a>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="{{Str::slug($investment->name,'-')}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{$investment->name}}'s details:</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="/investments/updateInvestment">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="input">Title</label>
                                                            <input class="form-control" type="text" id="input" name="name" placeholder="Enter title" value="{{$investment->name}}" autocomplete="on" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="input">Price Range One</label>
                                                            <input class="form-control" type="number" id="input" min="1" name="priceRangeOne" placeholder="Enter Price range one" value="{{$investment->priceRangeOne}}" autocomplete="on" />
                                                        </div>
                                                       <div class="form-group">
                                                            <label for="input">Price Range Two</label>
                                                            <input class="form-control" type="number" id="input" min="1" name="priceRangeTwo" placeholder="Enter Price range two" value="{{$investment->priceRangeTwo}}" autocomplete="on" />
                                                            <input class="form-control" type="hidden" id="input" name="id" value="{{$investment->id}}" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="input">Percentage</label>
                                                            <input class="form-control" type="number" min="1" id="input" name="percentage" placeholder="Enter percentage" value="{{$investment->percentage}}" autocomplete="on" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="input">Description</label>
                                                            <input class="form-control" type="text" id="input" name="description" placeholder="Enter description" value="{{$investment->description}}" autocomplete="on" />
                                                        </div>

                                                        <div class="form-group">

                                                            <input class="form-control btn btn-outline-success" type="submit"/>
                                                        </div>

                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h3 class="text-capitalize text-center">{{$investment->name}}</h3>
                                <p class="text-capitalize text-center">get</p>
                                <h3 class="text-capitalize text-center">{{$investment->percentage}}</h3>
                                <p class="text-capitalize text-center">for</p>
                                <h3 class="text-capitalize text-center"><span>From <i class="fa fa-dollar">$</i></span>{{$investment->priceRangeOne}}<span> To <i class="fa fa-dollar">$</i></span>{{$investment->priceRangeTwo}}</h3>
                                @if(Auth::user()->hasRole('user'))
                                    <p>{{$investment->description}}</p>
                                <a href="/investments/getPlan/{{$investment->id}}" class="text-center btn btn-outline-success">Make Offer</a>@endif
                            </div>
                        </div>
                    </div>

                @endforeach
                    {{$investments->links()}}
            @endif
        </div>
    <!-- /.container-fluid -->
    <!-- End of Main Content -->
@endsection
