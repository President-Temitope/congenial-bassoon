@extends('dashboard::layouts.master')

@section('content')
    @if(count($investments) > 0 )
        @include('core::table',[
        $title = 'Investment Table',
        $description = 'Manage all investments activities',
        $fieldlists = ['id','name','priceRangeOne','priceRangeTwo','percentage','description','status'],
        $modeldata = $investments,
        $addButton = 'data-toggle="modal" data-target="#addInvestment"',
        $editButton = 'data-toggle="modal" data-target=',
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
                                <label for="input">name</label>
                                <input class="form-control" type="text" id="input" name="name" placeholder="Enter title"
                                       value="" autocomplete="on"/>
                            </div>
                            <div class="form-group">
                                <label for="input">Proposed Range One</label>
                                <input class="form-control" type="number" id="input" min="0" name="priceRangeOne"
                                       placeholder="Enter first price range" value="" autocomplete="on"/>
                            </div>
                            <div class="form-group">
                                <label for="input">Proposed Range Two</label>
                                <input class="form-control" type="number" id="input" min="0" name="priceRangeTwo"
                                       placeholder="Enter second price range" value="" autocomplete="on"/>
                            </div>
                            <div class="form-group">
                                <label for="input">Percentage</label>
                                <input class="form-control" type="number" id="input" min="0" max="100" name="percentage"
                                       placeholder="Enter percentage" value="" autocomplete="on"/>
                            </div>
                            <div class="form-group">
                                <label for="input">Description</label>
                                <input class="form-control" type="text" id="input" name="description"
                                       placeholder="Enter description" value="" autocomplete="on"/>
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
                                    <label for="input">name</label>
                                    <input class="form-control" type="text" id="input" name="name"
                                           placeholder="Enter title" value="{{$investment->name}}" autocomplete="on"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Proposed Range One</label>
                                    <input class="form-control" type="number" id="input" min="0" name="priceRangeOne"
                                           placeholder="Enter first price range" value="{{$investment->priceRangeOne}}"
                                           autocomplete="on"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Proposed Range Two</label>
                                    <input class="form-control" type="number" id="input" min="0" name="priceRangeTwo"
                                           placeholder="Enter second price range" value="{{$investment->priceRangeTwo}}"
                                           autocomplete="on"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Percentage</label>
                                    <input class="form-control" type="number" id="input" min="0" max="100"
                                           name="percentage" placeholder="Enter percentage"
                                           value="{{$investment->percentage}}" autocomplete="on"/>
                                </div>
                                <div class="form-group">
                                    <label for="input">Description</label>
                                    <input class="form-control" type="text" id="input" name="description"
                                           placeholder="Enter description" value="{{$investment->description}}"
                                           autocomplete="on"/>
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
