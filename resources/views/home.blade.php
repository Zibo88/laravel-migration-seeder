@extends('layouts.app')

@section('main_content')
    <div class="cards-container">
        <h1>I nostri pacchetti vacanza</h1>
        @foreach ($packages as $package)
            <div class="card">
                <h3>Pacchetto:{{$package->name}}</h3>
                <div>Nazione:{{$package->location}}</div>
                <div>Hotel:{{$package->hotel}}</div>
                <div>Mezzi di trasporto:{{$package->transport}}</div>
                <div>Gioni:{{$package->days}}</div>
                <div>Descriizone del pacchetto:{{$package->description}}</div>
                <div>Prezzo:{{$package->price}}€</div>
            </div>
        @endforeach
       
    </div>  
   
@endsection 