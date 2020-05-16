@extends('layout')
@section('title','Contacto')

@section('content')
    <h1>@lang('Contact')</h1>
{{--
    @if ($errors->any())
        @foreach ($errors->firts('name') as $item)
            <p>{{$item}}</p>
        @endforeach
    @endif --}}

<form method="POST" action="{{route('contact')}}">
    @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
            {!!$errors->first('name','<small>:message</small>')!!}
        </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
          <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}">
            {!!$errors->first('email','<small>:message</small>')!!}
        </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
              <label for="subjet">Subjet</label>
              <input type="text" name="subjet" class="form-control" id="subjet" value="{{old('subjet')}}">
              {!!$errors->first('subjet','<small>:message</small>')!!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
              <label for="mensaje">Mensaje</label>
              <textarea type="text" name="mensaje" class="form-control" id="mensaje">{{old('mensaje')}}</textarea>
              {!!$errors->first('mensaje','<small>:message</small>')!!}
            </div>
        </div>
        <button type="submit" class="btn btn-primary form-control">Enviar</button>
      </form>
@endsection
