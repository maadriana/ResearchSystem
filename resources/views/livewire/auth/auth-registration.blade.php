<div class="d-flex justify-content-center align-items-center vh-100"">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="col-md-4 border border-secondary-subtle rounded-3 shadow p-4 bg-body-tertiary">
        @include('includes.errorhandler')

        <div class="text-center mb-3">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" class="d-block mx-auto" style="width: 150px" alt="RDS Logo">
            <h4 class="fw-semibold mt-3">Research and Development Services <br>(R&DS)</h4>
        </div>

        <div>
            <hr>
            <h5 class="text-center fw-medium mb-3">Sign up</h5>

            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter your email" wire:model.lazy='email'>

            {{-- @if ($email)
            {{ $email }}
            @endif --}}
            @if ($account == 1)
                <label for="name" class="form-label mt-3">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" wire:model='name'>
                <br>
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" wire:model='password'>
                <br>
                <label for="role">Role</label>
                <select class="form-select" name="" wire:model.live='role'>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
                <br>
                <div class="d-grid gap-2">
                    <input type="button" wire:click='register' value="Register" class="btn btn-primary">
                </div>
            @else
                <p>Not Pre-registered</p>
            @endif
        </div>
    </div>
</div>
