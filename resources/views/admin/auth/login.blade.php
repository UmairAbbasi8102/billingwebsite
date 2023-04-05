@include('admin.includes.header')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{route('adminLoginPost')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" value="{{old('email') }}" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @if ($errors->has('email'))
                                                <span class="text-danger text-sm">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password">
                                                @if ($errors->has('password'))
                                                <span class="text-danger text-sm">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user">
                                            Login
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('admin.includes.footer')
