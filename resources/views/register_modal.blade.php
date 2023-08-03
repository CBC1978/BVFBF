<form class="login-register text-start mt-20" method="POST" action="{{ route('registerUser') }}">
    @csrf

    <div class="form-group">
        <label class="form-label" for="name">Full Name *</label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" required="" name="name" value="{{ old('name') }}" placeholder="Steven Job">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="first_name">First Name*</label>
        <input class="form-control @error('first_name') is-invalid @enderror" id="first_name" type="text" required="" name="first_name" value="{{ old('first_name') }}" placeholder="Steven Job">
        @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="user_phone">Phone *</label>
        <input class="form-control @error('user_phone') is-invalid @enderror" id="user_phone" type="text" required="" name="user_phone" value="{{ old('user_phone') }}" placeholder="Steven Job">
        @error('user_phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="email">Email *</label>
        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" required="" name="email" value="{{ old('email') }}" placeholder="stevenjob@gmail.com">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="username">Username*</label>
        <input class="form-control @error('username') is-invalid @enderror" id="username" type="text" required="" name="username" value="{{ old('username') }}" placeholder="Steven Job">
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="password">Password *</label>
        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" required="" name="password" placeholder="************">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="password_confirmation">Re-Password *</label>
        <input class="form-control" id="password_confirmation" type="password" required="" name="password_confirmation" placeholder="************">
    </div>
    <div class="form-group">
        <select class="form-select @error('role') is-invalid @enderror" aria-label="Default select example" name="role" required>
            <option selected>Role</option>
            <option value="chargeur" {{ old('role') == 'chargeur' ? 'selected' : '' }}>Chargeur</option>
            <option value="transporteur" {{ old('role') == 'transporteur' ? 'selected' : '' }}>Transporteur</option>
        </select>
        @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="login_footer form-group d-flex justify-content-between">
        <label class="cb-container">
            <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
        </label>
        <a class="text-muted" href="#">Learn more</a>
    </div>
    <div class="form-group">
        <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Submit &amp; Register</button>
    </div>
    <div class="text-muted text-center">Already have an account? <a href="login.html">Sign in</a></div>
</form>
