<div>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Register</h3>
                        <form action="{{'/register'}}" method="POST">
                            {{ csrf_field() }}
                      <div class="row">
                        <div class="form-outline mb-4">
                          <div class="form-outline">
                            <input type="text" name="name" id="name" class="form-control form-control-lg" />
                            <label class="form-label" for="name">Name</label>
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>
                          <div class="form-outline mb-4">
                            <select name="gender" class="form-control form-control-lg">
                                <option value="0">Female</option>
                                <option value="1">Male</option>
                            </select>
                            <label class="form-label" for="gender">Gender</label>
                            @error('gender')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>


                      <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="email">Email</label>
                        @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                                <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
                      <div class="d-flex justify-content-end pt-3">
                        <a href="{{'/'}}" class="btn btn-light btn-lg">Already have an account</a>
                        <button type="submit" class="btn btn-warning btn-lg ms-2">Register</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
