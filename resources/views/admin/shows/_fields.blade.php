<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('name', ' Name') }}
    {{ Form::text('name',$products->name,['class'=>'form-control border-input','placeholder'=>' Name']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>


    <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
       {!! Form::label('category', 'Category') !!}
       {!! Form::select('category', array('drama' => 'drama', 'action' => 'action', 'comedy' => 'comedy','adventure'=> 'adventure','horror'=>'horror','family'=>'family'),array('required' => 'required')) !!} 
       <span class="text-danger">{{ $errors->has('category') ? $errors->first('category') : '' }}</span>
  </div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    {{ Form::label('url', 'Url') }}
    {{ Form::text('url',$products->url,['class'=>'form-control border-input','placeholder'=>'Url']) }}
    <span class="text-danger">{{ $errors->has('url') ? $errors->first('url') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description',$products->description,['class'=>'form-control border-input','placeholder'=>'Description']) }}
    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    {{ Form::label('file','Logo') }}
    {{ Form::file('image', ['class'=>'form-control border-input', 'id' => 'image']) }}
    <div id="thumb-output"></div>
    <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
</div>