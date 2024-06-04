@extends('base')

@section('body')
    <main>
        <div class="container">
            <div class="position-relative overflow-hidden p-0 p-md-3 m-md-1 text-center bg-surgery">
                <div class="col-md-5 p-lg-5 mx-auto">
                    <h3>Fogászat Debrecen belvárosában</h3>
                </div>
            </div>
            <div id="carousel" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="d-flex carousel-item active align-items-center justify-content-center">
                        <div class="carousel-img carousel-img-1"></div>
                        <div class="carousel-caption d-md-block" style="top: 50%; transform: translateY(-50%); bottom: initial;">
                            <h3 class="fw-normal mb-3">Esztétikus fogpótlások</h3>
                            <a href="{{ route('services') }}#esztetikus" class="btn btn-primary">Bővebben</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img carousel-img-2"></div>
                        <div class="carousel-caption d-md-block" style="top: 50%; transform: translateY(-50%); bottom: initial;">
                            <h3 class="fw-normal mb-3 text-dark">Fogszabályozás</h3>
                            <a href="{{ route('services') }}#fogszabalyozas" class="btn btn-primary">Bővebben</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img carousel-img-3"></div>
                        <div class="carousel-caption d-md-block" style="top: 50%; transform: translateY(-50%); bottom: initial;">
                            <h3 class="fw-normal mb-3 text-dark">Szájsebészet</h3>
                            <a href="{{ route('services') }}#szajsebeszet" class="btn btn-primary">Bővebben</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
@endsection
