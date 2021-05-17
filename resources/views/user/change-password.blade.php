@extends('user/layout')

@section('content')

    <div id="main-container">
        <div class="container-fluid">

            <div class="card-group">

                <form action="{{url('user/update_change_password')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Old Password</label>
                        <input type="password" class="form-control" required name="old_password" placeholder="Old Password" value="{{ old('old_password',request('old_password')) }}" id="">
                    </div>

                    <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" value="{{old('new_password',request('new_password'))}}" class="form-control" placeholder="New Password" name="new_password" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Confirm New Password</label>
                        <input type="password" class="form-control" required placeholder="Confirm New Password" name="confirm_new_password" value="{{old('confirm_new_password',request('confirm_new_password'))}}" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Change Password" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection