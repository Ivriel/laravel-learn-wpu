@extends('layouts.main')

@section('container')

  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-registration w-auto m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form>
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name" />
            <label for="name">Name</label>
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" />
            <label for="username">Username</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="email" placeholder="email@example.com" />
            <label for="email">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password" />
            <label for="password">Password</label>
          </div>
          <button class="btn btn-primary w-100 py-2 mt-4" type="submit">
            Register
          </button>
        </form>
        <small class="d-block mt-3 text-center">
          Already Registered? <a href="/register">Login</a>
        </small>
      </main>
    </div>
  </div>


@endsection