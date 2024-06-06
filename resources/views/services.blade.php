@extends('base')

@section('title', '- Szolgáltatásaink')

@section('body')
    <div class="container">
        <main>
            <div class="row">
                <div class="col-12">
                    <h2 class="mt-3">Szolgáltatásaink</h2>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="szajsebeszet"><span class="card-title fw-medium">Szájsebészet</span></a>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td><img src="/img/szajsebeszet-icon.png"></td>
                                    <td style="padding: 5px;">betört fogak, bölcsességfogak műtéti eltávolítása</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/szajsebeszet-icon.png"></td>
                                    <td style="padding: 5px;">cystaműtétek</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/szajsebeszet-icon.png"></td>
                                    <td style="padding: 5px;">lágyrészműtétek</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/szajsebeszet-icon.png"></td>
                                    <td style="padding: 5px;">implantátum beültetés</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="fogszabalyozas"><span class="card-title fw-medium">Fogszabályozás</span></a>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td><img src="/img/fogszabalyozas-icon.png"></td>
                                    <td style="padding:5px;">felnőtt fogszabályozás</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/fogszabalyozas-icon.png"></td>
                                    <td style="padding:5px;">gyerek fogszabályozás</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card">
                        <div class="card-header">
                            <a id="altalanos"><span class="card-title fw-medium">Általános fogászat</span></a>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td><img src="/img/konzervalo-icon.png"></td>
                                    <td style="padding: 5px;">tömések készítése</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/gyokerkezeles-icon.png"></td>
                                    <td style="padding: 5px;">gyökérkezelés</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/rogzitett-fogpotlas-icon.png"></td>
                                    <td style="padding: 5px;">esztétikus fogpótlások</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/allapotfelmeres-icon.png"></td>
                                    <td style="padding: 5px;">ultrahangos fogkőeltávolítás, polírozás</td>
                                </tr>
                                <tr>
                                    <td><img src="/img/fogpotlas-icon.png"></td>
                                    <td style="padding: 5px;">fogfehérítés</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
