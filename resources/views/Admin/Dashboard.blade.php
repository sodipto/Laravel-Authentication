@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in Admin!

                    Your ID:  {{ Auth::user()->id }}
                   @if(Auth::guard('admin')->check())
                        Hello {{Auth::guard('admin')->user()->name}}
                    @elseif(Auth::guard('user')->check())
                        Hello {{Auth::guard('user')->user()->name}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
