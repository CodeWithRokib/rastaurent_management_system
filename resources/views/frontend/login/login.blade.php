@extends('frontend.master')

@section('title')
    login
@endsection

@section('content')
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Login Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Login Page</li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="inner-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Login
                            </div>
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="text-dark font-weight-bold">Email</label>
                                        <x-required />
                                        <input type="email" name="email" id="email" class="form-control" required>
                                        <x-validation-error :error="$errors->first('email')" />
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="password" class="text-dark font-weight-bold">Password</label>
                                        <x-required />
                                        <input type="password" name="password" id="password" class="form-control" required>
                                        <x-validation-error :error="$errors->first('password')" />
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>

                                <p class="mt-3">
                                    Don't have an account?
                                    <a href="{{ route('register.page') }}" class="text-primary font-weight-bold">Click here
                                        to
                                        register</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
