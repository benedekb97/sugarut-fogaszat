@extends('base')

@section('title', ' - Árlista')

@section('body')
    <main>
        <div class="container">
            <h2 class="my-3">Árlista</h2>
                @foreach($categories as $category)
                <table class="table table-bordered table-striped">
                    <tr>
                        <th colspan="2" style="font-size: 20px;">{{ $category->name }}</th>
                    </tr>
                    @foreach($category->services as $price)
                        <tr>
                            <td>{{ $price->name }}</td>
                            <td style="width: 50%;"><i>{!! $price->price !!}</i>@if(!empty($price->description)) <sub>({{ $price->description }})</sub> @endif</td>
                        </tr>
                    @endforeach
                </table>
                @endforeach

            <h2 class="mb-3">Fizetési módok</h2>
            <p>Debreceni fogorvosi rendelőnkben kezelésének költségeit rendezheti készpénzben és bankkártyával.</p>
            <p style="text-align:justify;">Felhívjuk figyelmét, hogy áraink tájékoztató jellegűek, mivel minden kezelés személyre szabott és esetenként más elemeket tartalmazhat! Az Önre érvényes kezelési tervet egy konzultációt követően készítjük el, a tervvel kapcsolatban a változás jogát fenntartjuk!</p>
        </div>
    </main>
@endsection
