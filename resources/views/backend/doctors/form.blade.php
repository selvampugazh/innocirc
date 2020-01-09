<div class="box-body">
    <div class="form-group">
        <!-- customer name -->
        {{ Form::label('first_name', "First Name", ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('first_name', null, ['class' => 'form-control box-size', 
                'placeholder' => "First Name", 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
     <div class="form-group">
        <!-- customer name -->
        {{ Form::label('last_name', "Last Name", ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('last_name', null, ['class' => 'form-control box-size', 
                'placeholder' => "Last Name", 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- customer email -->
        {{ Form::label('email', "Email", ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::email('email', null, ['class' => 'form-control box-size', 
                'placeholder' => "Email", 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    
    <div class="form-group">
        <!-- customer number -->
        {{ Form::label('phone_number',"Phone Number", ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('phone_number', null, ['class' => 'form-control box-size', 
                'placeholder' => "Phone Number", 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
    <!-- how the services are provided -->
    {{ Form::label('specialities ', "Specialities", ['class' => 'col-lg-2 control-label required']) }}  
    <div class="col-lg-10">
        <select name="specialities[]" class="form-control box-size multiple-specialities-select" multiple="multiple" style="width: 100%">
            @foreach($specialities as $speciality)
                <option value="{{ $speciality->id }}"> {{ $speciality->name }} </option>
            @endforeach
        </select>
    </div>
</div>

    <div class="form-group">
    <!-- Primary address of the vendor -->
    {{ Form::label('address', "Address", ['class' => 'col-lg-2 control-label required']) }}  
    <div class="col-lg-10">
        {{ Form::textarea('address', null, ['class' => 'form-control box-size', 
            'placeholder' => "Address",'rows' => 2, 'autocomplete' => 'off']) }}
    </div><!--col-lg-10-->
</div><!--form-group-->

    <div class="form-group">
        <!-- active / disabled -->
        {{ Form::label('status', "Status", ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::select('status', ['1' => "Active", 
            '0' => "Disabled"], null,  ['class' => 'form-control box-size']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        $( document ).ready( function() {
            $('.multiple-specialities-select').select2({allowClear: true});
        });
    </script>
@endsection
