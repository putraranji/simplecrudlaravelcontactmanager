<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Username:</strong>
      {!! Form::text('uname', null, array('placeholder' => 'Username', 'class' => 'form-control')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Full Name:</strong>
      {!! Form::text('fullname', null, array('placeholder' => 'Full Name', 'class' => 'form-control')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Email:</strong>
      {!! Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Phone:</strong>
      {!! Form::text('phone', null, array('placeholder' => 'Phone', 'class' => 'form-control')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Address:</strong>
      {!! Form::textarea('address', null, array('placeholder' => 'Address', 'class' => 'form-control', 'style' => 'height:100px')) !!}
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <hr />
    {!! Form::button('<i class="fa fa-floppy-o" aria-hidden="true" title="Submit Record"></i> Save', ['class' => 'btn btn-primary', 'type'=>'submit']) !!}
  </div>
</div>
