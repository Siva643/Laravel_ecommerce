@extends('master')
@section('content')
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
    <form action="{{ route('form.register') }}" method="post">
      @csrf
      @method('POST')
        <div class="form-group">
          <label for="name">User Name</label>
          <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" name="name" id="exampleInputEmail1" placeholder="User Name" value="{{old('name')}}">
        </div>
        @if ($errors->has('name'))
                 <div class="" style="color:red;">{{  $errors->first('name') }}</div>
        @endif
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="text" class="form-control @if ($errors->has('email')) is-invalid @endif" name="email" id="exampleInputPassword1" placeholder="Email" value="{{old('email')}}">
        </div>
        @if ($errors->has('email'))
                 <div class="" style="color:red;">{{ $errors->first('email') }}</div>
        @endif
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control  @if ($errors->has('password')) is-invalid @endif" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        @if ($errors->has('password'))
                 <div class="" style="color:red;">{{ $errors->first('password') }}</div>
        @endif

       
        {{-- <h1>{{ count($errors) }}</h1> --}}
       {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif  --}}
        <input type="submit" class="btn btn-default" value="Register">
      </form>
</div>
</div>    
</div>
@endsection