<!-- Bookingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::date('bookingdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Starttime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starttime', 'Starttime:') !!}
    {!! Form::text('starttime', null, ['class' => 'form-control']) !!}
</div>

<!-- Endtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endtime', 'Endtime:') !!}
    {!! Form::text('endtime', null, ['class' => 'form-control']) !!}
</div>

<!-- Memberid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memberid', 'Memberid:') !!}
	<!-- Memberid Field -->
<div class="form-group col-sm-6">
    <select name="memberid" class="form-control">
        @foreach($members as $member)
            <option value="{{$member->id}}">{{$member}}</option>
        @endforeach

    </select>
</div>

<!-- Courtid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courtid', 'Courtid:') !!}
<div class="form-group col-sm-6">
    <select name="courtid" class="form-control">
        @foreach($courts as $court)
            <option value="{{$court->id}}">{{$court}}</option>
        @endforeach

    </select>
</div>
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
