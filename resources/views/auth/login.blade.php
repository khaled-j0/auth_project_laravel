@extends ('layouts.app');
@section('title', 'Login')
    @section('content')
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4">Login</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" value="{{ old('email')}}" name="email" type="email" class="form-control"
                                    required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" name="password" type="password" class="form-control" required autofocus>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary">Login</button>
                                <a href="{{ route('register') }}">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
