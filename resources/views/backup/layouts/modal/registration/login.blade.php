<div class="registraion">
  <div class="modal-header">
    <h5 class="modal-title" id="pop-up-title">Login</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <form method="post" action="{{ url('/login') }}">
  @csrf
    <div class="modal-body">
        <div class="row">
          <div class="form-group col-10 offset-1">
            <input type="email" class="form-control bottom-only {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}"
                placeholder="Email">
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <input type="password" class="form-control bottom-only {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password">
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="rememberMe">
              <label class="custom-control-label" for="rememberMe">Remember me</label>
            </div>
            <br>
            <input type="Submit" name="submit" value="Login" class="btn form main-btn single-btn btn-orange text-light" style="width: 100%">
            <a href=" {{ url('/register') }} ">
              <div class="btn form main-btn single-btn btn-light text-primary" style="width: 100%;margin-top: 10px"> Buat Akun </div>
            </a>
          </div>
        </div>
        <br>
    </div>

    <div class="modal-footer">
      <div class="row" style="width: 100%;">
        <div class="col-11">
            <div class="btn form main-btn single-btn btn-danger text-light" style="width: 100%">
              <i class="fa fa-google"></i> &nbsp; Google
            </div>
            <!-- <div class="btn form main-btn single-btn btn-primary text-light" style="width: 100%;margin: 20px 0">
              <i class="fa fa-facebook"></i> &nbsp; Facebook
            </div> -->
        </div>
      </div>
    </div>

  </form>
</div>