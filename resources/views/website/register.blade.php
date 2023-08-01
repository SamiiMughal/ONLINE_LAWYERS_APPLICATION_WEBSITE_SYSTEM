@extends('layout.form')
@section('myform')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js">
    {{-- <div class="container mt-5">
        <div class="row">
            <h1 class="text-center">Register User</h1>
            <div class="offset-md-3 col-md-6">
                <form action="{{ url('/registerstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <label for="">Password</label>
                    <input type="password" name="pass" class="form-control">
                    @error('pass')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <label hidden for="formFileLg" class="form-label">user Image</label>
                    <input hidden class="form-control form-control-lg bg-dark" name="img" id="formFileLg"
                        type="file">
                    <label for="">Address</label>
                    <textarea name="address" rows="5" class="form-control"></textarea>
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div> --}}




    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-4">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="font-weight: bolder;">Create an Account</h1>
                            </div>
                            <form class="user" action="{{ url('/registerstore') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user"
                                            placeholder="Name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            placeholder="Email">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control form-control-user"
                                        placeholder="Password">
                                    @error('pass')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea name="address" rows="5" class="form-control form-control-user" placeholder="Address"></textarea>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input hidden class="form-control form-control-lg form-control-user bg-dark"
                                            name="img" id="formFileLg" type="file">

                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div> --}}

                                <label for="chkLayer">
                                    <input type="checkbox" id="chkLayer" name="checks"  value="1"/>
                                    Is Lawyer !
                                </label>
                                <hr />
                                <div id="div" style="display:none;" >
                                    
                                    <div class="form-group">
                                        <input type="file" name="document" class="form-control form-control-user"
                                            >
                                        @error('document')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <textarea name="QUALIFICATION" rows="5" class="form-control form-control-user" placeholder="QUALIFICATION"></textarea>
                                        @error('QUALIFICATION')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                </div>


                                




                                <script type="text/javascript">
                                    $(function () {
                                        $("#chkLayer").click(function () {
                                            if ($(this).is(":checked")) {
                                                $("#div").show();
                                            } else {
                                                $("#div").hide();
                                            }
                                        });
                                    });
                                </script>


                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            <hr>
                            {{-- <div class="text-center">
                                <a href="forgot-password.html" class="small">Forgot Password?</a>
                            </div> --}}
                            <div class="text-center">
                                <a href="/login" class="small">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
