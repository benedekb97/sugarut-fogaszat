<div class="container-fluid bg-primary">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center text-md-center py-0">
            <a href="{{ route('index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="/img/logo.png" style="height: 7rem;" />
            </a>
        </header>
    </div>
</div>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item mb-2">
                <a href="{{ route('index') }}" class="nav-link">Főoldal</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('about-us') }}" class="nav-link">Rólunk</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('employees') }}" class="nav-link">Munkatársaink</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('services') }}" class="nav-link">Szolgáltatásaink</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('pricing') }}" class="nav-link">Árlista</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('contact') }}" class="nav-link">Kapcsolat</a>
            </li>
        </ul>
    </header>
</div>
