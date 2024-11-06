<div class="d-flex justify-content-center align-items-center vh-100">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="col-md-4 border border-secondary-subtle rounded-3 shadow p-4 bg-body-tertiary">

        <div class="text-center mb-3">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" class="d-block mx-auto" style="width: 150px" alt="RDS Logo">
            <h4 class="fw-semibold mt-3">Research and Development Services <br>(R&DS)</h4>
        </div>

        <div>
            <hr>
            <h5 class="text-center fw-medium mb-3">Sign in</h5>
            <form>
                @include('includes.errorhandler')
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control mb-2" placeholder="Enter your email" wire:model='email'>

                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control mb-3" placeholder="Enter your password" wire:model='password'>

                <div class="d-grid gap-2">
                    <input type="button" wire:click='login' value="Sign in" class="btn btn-primary">
                    <a href="{{ route('register') }}" class="btn btn-secondary">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</div>
