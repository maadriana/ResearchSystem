<div>
    {{-- NAVBAR --}}
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">
            <img src="{{ asset("assets/images/RDS_Logo.png")}}" alt="RDS Logo" width="30" class="d-inline-block align-text-top">
            Research Development Services
            </a>
            <div class="nav-item justify-content-end d-flex align-items-center">
                <label for="role" class="text-muted me-2">Login as:</label>
                <select class="form-select btn btn-light btn-outline-dark w-auto">
                    <option><a href="{{ route('faculty') }}">Faculty</a></option>
                    <option><a href="#">TEC</a></option>
                    <option><a href="#">UREC</a></option>
                    <option><a href="#">Research Director</a></option>
                </select>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        {{-- SIDE BAR --}}
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
            <ul class="nav flex-column">
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light disabled d-flex align-items-center">HOME</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty') }}" class="btn btn-light active text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2" alt="Home Icon" width="20"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light disabled d-flex align-items-center">MY PROPOSALS</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty-create-proposal') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2" alt="Create Proposal Icon" width="20"></i>
                                Create
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-track-proposal') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-search me-2" alt="Track Proposal Icon" width="20"></i>
                                Track
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light disabled d-flex align-items-center">MY RESEARCH</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty-ongoing-research') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-clock me-2" alt="Ongoing Research Icon" width="20"></i>
                                Ongoing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-completed-research') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-list-check me-2" alt="Completed Research Icon" width="20"></i>
                                Completed
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr>
        </nav>

        {{-- MAIN CONTENT --}}
        <main class="container-fluid p-4">
            <h2>Welcome to the RDS Dashboard</h2>
            <p>Start managing your research projects efficiently.</p>
        </main>
    </div>
</div>

