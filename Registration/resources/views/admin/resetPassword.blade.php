@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ url ('update-password') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Old Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="old_password"  placeholder="Old Password" required>

                            </div>
                        </div>

                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password"  placeholder="New Password" required>
                            </div>
                        </div>

                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="confirm_password" type="password" class="form-control" name="new_password_confirmation"  placeholder="Confirm New Password" required>
                            </div>
                        </div>

                                @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection