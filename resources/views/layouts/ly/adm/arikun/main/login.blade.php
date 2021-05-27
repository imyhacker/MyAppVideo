<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-12">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 mt-3">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">


                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter Email Address...">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password"
                                        placeholder="Input Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                            </form>
                            <small>Don't Have Account ? <a href="{{route('register')}}">Register</a></small><br>
                            <small>Lost Account ? <a href="{{ route('password.request') }}">Reset
                                    Password</a></small>

                            <center class="mt-3">
                                Crafted With <font color="red">♥</font> By <a
                                    href="https://github.com/imyhacker">Arikun</a>
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-3">
                        <div class="p-3">
                            <img src="{{asset('adm/arikun/iso.png')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>