@extends('frontend.master')

@section('title')
    register
@endsection

@section('content')
<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Registration Page</li>
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
                    Register
                </div>
                <div class="card-body">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password Confirmation</label>
                            <input type="password" type="password" name="password_confirmation"
                                id="password_confirmation" class="form-control" required>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection