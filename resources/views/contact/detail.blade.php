@extends('layouts.default')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Show Detail Contact - <strong><span class="label label-primary">{{ $contact->fullname }}</span></strong></h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('contact.index') }}">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <table class="table table-striped">
    <tr>
      <th style="text-align:right">Username:</th>
      <td>{{ $contact->uname }}</td>
    </tr>
    <tr>
      <th style="text-align:right">Full Name:</th>
      <td>{{ $contact->fullname }}</td>
    </tr>
    <tr>
      <th style="text-align:right">Email:</th>
      <td>{{ $contact->email }}</td>
    </tr>
    <tr>
      <th style="text-align:right">Phone:</th>
      <td>{{ $contact->phone }}</td>
    </tr>
    <tr>
      <th style="text-align:right">Address:</th>
      <td>{{ $contact->address }}</td>
    </tr>
</table>
</div>
@endsection
