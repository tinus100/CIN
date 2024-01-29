@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<div id='wrapper'>
    <div id='page' class='container'>
        <h1 class='has-text-weight-bold is-size-8'>Nieuwe Afspraak</h1>

<form method='POST' action="/events">
    @csrf

    <div class='field'>
        <a class='has-text-weight-bold is-size-4' for='title'>Titel Afspraak</a>

        <div class='control'>
        <input
        class='input @error('title') is-danger @enderror'
        type='text'
        name='title'
        id='title'
        value='{{old('title')}}'>
        @error('title')
            <p class="help is-danger">{{$errors->first('title')}}</p>
        @enderror
    </div>
    </div>

    <div class="field">
        <a class='has-text-weight-bold is-size-4' for='start'>Start Date</a>

         <div class="control">
             <div class='input-group date @error('start') is-danger @enderror'>
             <input
             type='text'
             class="form-control"
             name="start"
             id='datetimepicker'
             id="start"
             value="{{old('start')}}">
             <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
             </div>
         </div>
         @error('start')
         <p class="help is-danger">{{$errors->first('start')}}</p>
         @enderror
    </div>

   <div class='field'>
    <a class='has-text-weight-bold is-size-4' for='ammount'>Aantal personen</a>
</div>

   <div class="select">
       <select class="form-control @error('ammount') is-danger @enderror" id="ammount" name="ammount">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
       </select>
       @error('ammount')
       <p class="help is-danger">{{$errors->first('ammount')}}</p>
   @enderror
    </div>

    <div classs='field is-grouped' style="margin-top: 1.5rem;">
        <div class="control">
            <button class='button is-link' type='submit'>Submit</button>
        </div>
    </div>

</form>
</div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
{{-- <script>
$("#datetimepicker").datetimepicker({
format: 'YYYY-MM-DD HH:mm'
});
$("#datetimepicker2").datetimepicker({
format: 'YYYY-MM-DD HH:mm'
});
</script> --}}
<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            sideBySide: true,
            daysOfWeekDisabled: [0,4,5,6],
            disabledHours: [0,1,2,3,4,5,6,7,8,17,18,19,20,21,22,23,24]
        });
        $("#datetimepicker").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
    });
 </script>

@endsection

