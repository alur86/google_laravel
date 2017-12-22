@extends('layouts.app')


@section('content')

  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
  <div class="panel-heading">Профиль пользователя<h3> {{Auth::user()->name}}</h3></div>
  <div class="panel-body">


 <div class="col-md-6">
<label for="name" class="col-md-4 control-label">ФИО</label>
<input id="name" type="text" name="name" value="{{ $user->name }}">
 </div>

 <div class="col-md-6">
 <label for="name" class="col-md-4 control-label">E-mail</label>
<input id="name" type="text" name="email" value="{{ $user->email}}">
 </div>



  
@endsection

