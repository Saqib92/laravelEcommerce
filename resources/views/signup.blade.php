@extends('index')
@section('body')
<div class="">
    <div class="" >
        <div class="d-flex justify-content-center align-self-center" style="height: 80vh;">
            
            <form action="{{route('postSignup')}}" method="POST" class="align-self-center">
                <div class="text-center">Signup</div>
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    @error('name')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Name is Required</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @error('email')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Email is Required</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                @error('password')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Password is Required</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
            </form>
        </div>        
    </div>
</div>    
@endsection
