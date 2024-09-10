{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <main>
        {{-- @dump($products) --}}
        <div class="container">
            <div class="row">
                <div class="boxCard">
                    @foreach ($products as $product)
                        <div class="DcCard">
                            <div>
                                <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                                <h3> {{ $product['title'] }} </h3>
                            </div>
                        </div>
                    @endforeach

                </div>



            </div>
            <div id="Load">LOAD MORE</div>

        </div>


    </main>
@endsection


@section('titlePage')
    home
@endsection
