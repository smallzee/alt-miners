@extends('user/layout')

@section('content')


<div class="card-group">

    <form action="{{url('user/create_contact_support')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="">Subject</label>
            <input type="text" class="form-control" required name="subject" placeholder="Subject" id="">
        </div>

        <div class="form-group">
            <label for="">Message</label>
            <textarea name="message" class="form-control" required style="resize: none" placeholder="Message" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Submit" name="" id="">
        </div>

    </form>

</div>



@endsection