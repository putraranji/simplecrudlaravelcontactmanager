@extends('layouts.default')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>{{ $title }}</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('contact.create') }}"><i class="fa fa-plus"></i> Create new Contact</a>
    </div>
  </div>
</div>

@if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
@endif

<table class="table table-striped">
  <thead class="thead-inverse">
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th width="200px"> Action </th>
    </tr>
  </thead>
  @foreach ($contacts as $contact)
  <tbody>
    <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $contact->uname }}</td>
      <td>{{ $contact->fullname }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->phone }}</td>
      <td>{{ $contact->address }}</td>
      <td>
        <a class="btn btn-info" href="{{ route('contact.show', $contact->id) }}"><i class="fa fa-eye" aria-hidden="true" title="Show detail"></i></a>
        <a class="btn btn-primary" href="{{ route('contact.edit',$contact->id) }}"><i class="fa fa-edit" aria-hidden="true" title="Edit Record"></i></a>
              {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Are you sure... you want to delete this record ? it is can not be undone")']) !!}
              {!! Form::button('<i class="fa fa-trash" aria-hidden="true" title="Delete Record"></i>', ['class' => 'btn btn-danger', 'type'=>'submit']) !!}
              {!! Form::close() !!}
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
{!! $contacts->render() !!}
@endsection
