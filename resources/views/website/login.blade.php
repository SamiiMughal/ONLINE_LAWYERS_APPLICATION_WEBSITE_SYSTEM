@extends('layout.index')
@section('mycontent')


<div class="container mt-5">
    <div class="row">
        <h1 class="text-center">Login User</h1>
        <div class="offset-md-3 col-md-6">
            <form action="{{url('/loginstore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror --}}
                {{-- <br> --}}
                <label for="">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <br>
                <label for="">Password</label>
                <input type="password" name="pass" value="{{ old('pass') }}" class="form-control">
                @error('pass')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
    
@endsection