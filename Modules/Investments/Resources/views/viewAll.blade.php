@extends('dashboard::layouts.master',[$pageName = 'List of investment plans'])
@section('content')
    @if(count($investments) > 0 )
        @include('core::table',[
        $title = 'Investment Table',
        $description = 'Manage all investments activities',
        $fieldlists = ['id','name','desc','daily_interest','term_days','min_amount','max_amount','total_return','status'],
        $modeldata = $investments,
        $addButton = '"#addInvestment"',
        $addButtonName = 'Add plan',
        $deleteButton = '/investments/deleteInvestment/'
    ])
        <!-- Add plan -->
        <div class="modal fade" id="addInvestment">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Investment Plan:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/investments/createInvestment">
                            @csrf
                            <div class="form-group">
                                <label for="input">Title</label>
                                <input class="form-control" type="text" id="input" name="name"
                                       placeholder="Enter title"
                                       autocomplete="on"/>
                            </div>
                            <div class="form-group">
                                <label for="input">Description</label>
                                <input class="form-control" type="text" id="input" name="desc"
                                       placeholder="Description"
                                       autocomplete="on"/>
                            </div>
                            <div class="form-group">
                                <label for="input">Daily interest</label>
                                <input class="form-control" type="text" min="1" id="input"
                                       name="daily_interest"
                                       placeholder=""/>
                            </div>
                            <div class="form-group">
                                <label for="input">Term days</label>
                                <input class="form-control" type="text" id="input" name="term_days"
                                       placeholder="Enter term days"
                                />
                            </div>
                            <div class="form-group">
                                <label for="input">Minimum Amount</label>
                                <input class="form-control" type="text" id="input" name="min_amount"
                                       placeholder="Enter minimum amount"
                                />
                            </div>
                            <div class="form-group">
                                <label for="input">Maximum Amount</label>
                                <input class="form-control" type="text" id="input" name="max_amount"
                                       placeholder="Enter maximum amount"
                                />
                            </div>
                            <div class="form-group">
                                <label for="input">Total return</label>
                                <input class="form-control" type="text" id="input"
                                       name="total_return"
                                       placeholder="Enter total return"
                                />
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

        <!-- Edit plan -->
        @foreach($investments as $investment)
            <div class="modal fade" id="{{Str::slug($investment->name)}}">
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
                                    <input class="form-control" type="text" id="input" name="name"
                                           placeholder="Enter title" value="{{$investment->name}}"
                                           autocomplete="on"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Description</label>
                                    <input class="form-control" type="text" id="input" name="desc"
                                           placeholder="Description" value="{{$investment->desc}}"
                                           autocomplete="on"/>
                                    <input class="form-control" type="hidden" id="input" name="id"
                                           value="{{$investment->id}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Daily interest</label>
                                    <input class="form-control" type="text" min="1" id="input"
                                           name="daily_interest"
                                           placeholder="" value="{{$investment->daily_interest}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Term days</label>
                                    <input class="form-control" type="text" id="input" name="term_days"
                                           placeholder="Enter term days"
                                           value="{{$investment->term_days}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Minimum Amount</label>
                                    <input class="form-control" type="text" id="input" name="min_amount"
                                           placeholder="Enter minimum amount"
                                           value="{{$investment->min_amount}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Maximum Amount</label>
                                    <input class="form-control" type="text" id="input" name="max_amount"
                                           placeholder="Enter maximum amount"
                                           value="{{$investment->max_amount}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Total return</label>
                                    <input class="form-control" type="text" id="input"
                                           name="total_return"
                                           placeholder="Enter total return"
                                           value="{{$investment->total_return}}"/>
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
        @endforeach
    @else
        <script>
            alert('No investments plan added currently')
        </script>
    @endif
@endsection
