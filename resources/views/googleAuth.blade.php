@extends('layouts.app')
@section('content')
 
<div class="container">
                  <div class="row">
                        <div class="col-md-12 row-block">
                            <a href="{{ url('login/google') }}">
                                <strong>Login with Google</strong>
                            </a>     
                        </div>
                    
                    </div>
</div>
@endsection