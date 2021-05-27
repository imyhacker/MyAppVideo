<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-12">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 mt-3">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Page</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name"
                                        placeholder="Name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required placeholder="Email"
                                        autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required placeholder="Password"
                                                autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required
                                                placeholder="Password Confirm" autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>




                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>

                            </form>
                            <small>Have Account ? <a href="{{route('login')}}">Login</a></small>
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