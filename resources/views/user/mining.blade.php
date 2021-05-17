@extends('user/layout')

@section('content')


            <div class="card-group">

                <form action="{{url('user/create_mining')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Plan</label>
                        <select name="plan" class="form-control" required id="plan">
                            <option value="" readonly="">Select</option>
                            @foreach($pricing as $value)
                                <option value="{{ $value->id }}"> {{ ucwords($value->name) }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Amount to invest (should be in USD)</label>
                        <input type="number" class="form-control" disabled="" step="any" name="amount" required placeholder="Amount to invest (should be in USD)" id="amount">
                    </div>

                    <div class="form-group">
                        <label for="">Minimum Investment Amount</label>
                        <input type="text" placeholder="Minimum Investment Amount" disabled class="form-control" name="" id="min-amount">
                    </div>

                    <div class="form-group">
                        <label for="">Maximum Investment Amount</label>
                        <input type="text" placeholder="Maximum Investment Amount" disabled class="form-control" name="" id="max-amount">
                    </div>

                    <div class="form-group">
                        <label for="">Daily Return</label>
                        <input type="text" placeholder="Daily Return" disabled class="form-control" name="" id="daily-return">
                    </div>

                    <input type="hidden" name="type" value="{{ $page_title }}" id="">

                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Submit" name="" id="">
                    </div>

                </form>

            </div>


@endsection