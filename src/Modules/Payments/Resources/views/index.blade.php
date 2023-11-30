@extends('dashboard::layouts.master',[$pageName = 'Payments'])

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Lists of Payments</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">This is where you manage payment made by users</h6>
                <button class="btn btn-outline-success -align-right" data-toggle="modal"
                        data-target="#add-payment">Add payment for user
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name of User</th>

                            <th>Plan paid for</th>
                            <th>Date paid</th>
                            <th>Status of Payment</th>
                            <th>Date Approved</th>
                            <th>Actions</th>


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name of User</th>

                            <th>Plan paid for</th>
                            <th>Date paid</th>
                            <th>Status of Payment</th>
                            <th>Date Approved</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if(count($payments) > 0)

                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{$payment->username}}</td>
                                    <td>{{$payment->investment_name}}</td>
                                    <td>{{$payment->created_at ? $payment->created_at->diffForHumans() : 'N/A'}}</td>
                                    <td>{{$payment->status}}</td>
                                    <td>{{$payment->approved_at ?? ''}}</td>

                                    <td>
                                        <span>  <a href="" class="btn btn-outline-success">View POP</a> </span>
                                        <span>  <a
                                                href="{{route('approve-payment',[$payment->id,$payment->user_email,$payment->amount])}}"
                                                class="btn btn-outline-success">Approve</a> </span>
                                        <a href="" class="btn btn-outline-secondary" data-toggle="modal"
                                           data-target="#{{Str::slug($payment->username)}}">Edit</a>
                                        <span><a href="{{route('delete-payment',[$payment->id])}}"
                                                 class="btn btn-outline-danger ">Delete</a></span>
                                    </td>
                                </tr>
                                <div class="modal fade" id="{{Str::slug($payment->username)}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{$payment->username}}'s details:</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{route('update-payment')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="input">Amount</label>
                                                        <input class="form-control" type="text" id="input" name="amount"
                                                               placeholder="Enter Amount" value="{{$payment->amount}}"
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input">Available Balance</label>
                                                        <input class="form-control" type="text" id="input"
                                                               name="available_balance"
                                                               placeholder="Available Balance"
                                                               value="{{$payment->available_balance}}"
                                                        />
                                                        <input class="form-control" type="hidden" id="input" name="id"
                                                               value="{{$payment->id}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input">Total Invested</label>
                                                        <input class="form-control" type="text" min="1" id="input"
                                                               name="total_invested"
                                                               placeholder="" value="{{$payment->total_invested}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input">Total Profit</label>
                                                        <input class="form-control" type="text" id="input"
                                                               name="total_profit"
                                                               placeholder=""
                                                               value="{{$payment->total_profit}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input"> Available Fund</label>
                                                        <input class="form-control" type="text" id="input"
                                                               name="available_fund"
                                                               placeholder=""
                                                               value="{{$payment->available_fund}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input">Invested Fund</label>
                                                        <input class="form-control" type="text" id="input"
                                                               name="invested_fund"
                                                               placeholder=""
                                                               value="{{$payment->invested_fund}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input">This Month Profit</label>
                                                        <input class="form-control" type="text" id="input"
                                                               name="this_month_profit"
                                                               placeholder=""
                                                               value="{{$payment->this_month_profit}}"/>
                                                    </div>

                                                    <div class="form-group">

                                                        <input class="form-control btn btn-outline-success"
                                                               type="submit"/>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="add-payment">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Payment</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('update-payment')}}">
                        @csrf
                        <div class="form-group">
                            <label for="input">Select User</label>
                            <select id="selectOption" name="user_id">
                                @if(count($users)>0)
                                    @foreach($users as $user)
                                        <option
                                            value="{{$user->id}}">{{$user->lastname . ' ' . $user->firstname}}</option>
                                    @endforeach
                                @else
                                    <option value="option1">No user registered</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="input">Select Investment</label>
                            <select id="selectOption" name="investment_id">
                                @if(count($investments)>0)
                                    @foreach($investments as $investment)
                                        <option
                                            value="{{$investment->id}}">{{$investment->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input">Amount</label>
                            <input class="form-control" type="text" id="input" name="amount"
                                   placeholder="Enter Amount" value=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="input">Available Balance</label>
                            <input class="form-control" type="text" id="input"
                                   name="available_balance"
                                   placeholder="Available Balance"
                                   value=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="input">Total Invested</label>
                            <input class="form-control" type="text" min="1" id="input"
                                   name="total_invested"
                                   placeholder="" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="input">Total Profit</label>
                            <input class="form-control" type="text" id="input"
                                   name="total_profit"
                                   placeholder=""
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <label for="input"> Available Fund</label>
                            <input class="form-control" type="text" id="input"
                                   name="available_fund"
                                   placeholder=""
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <label for="input">Invested Fund</label>
                            <input class="form-control" type="text" id="input"
                                   name="invested_fund"
                                   placeholder=""
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <label for="input">This Month Profit</label>
                            <input class="form-control" type="text" id="input"
                                   name="this_month_profit"
                                   placeholder=""
                                   value=""/>
                        </div>

                        <div class="form-group">

                            <input class="form-control btn btn-outline-success"
                                   type="submit"/>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
