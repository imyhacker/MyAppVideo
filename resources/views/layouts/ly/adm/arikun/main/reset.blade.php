<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-12">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 mt-3">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                            </div>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="New Password" required
                                        autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" placeholder="Confirmation New Password"
                                        required autocomplete="new-password">

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Reset Password') }}
                                </button>

                            </form>

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