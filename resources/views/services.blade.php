@extends('base')

@section('title', '- Szolgáltatásaink')

@section('body')
    <div class="container">
        <main>
            <div class="row">
                <div class="col-12">
                    <h2 class="mt-3">Szolgáltatásaink</h2>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="szajsebeszet"><span class="card-title fw-medium">Szájsebészet</span></a>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>betört fogak, bölcsességfogak műtéti eltávolítása</li>
                                <li>cystaműtétek</li>
                                <li>lágyrészműtétek</li>
                                <li>implantátum beültetés</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="esztetikus"><span class="card-title fw-medium">Esztétikus fogpótlások készítése</span></a>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>...</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="fogszabalyozas"><span class="card-title fw-medium">Fogszabályozás</span></a>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>felnőtt fogszabályozás</li>
                                <li>gyerek fogszabályozás</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="altalanos"><span class="card-title fw-medium">Általános fogászat</span></a>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>tömések készítése</li>
                                <li>ultrahangos fogkőeltávolítás, polírozás</li>
                                <li>fogfehérítés</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
