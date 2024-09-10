{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="boxCard">
                    <div class="DcCard">
                        <div>
                            <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="descrizione alternativa">
                            <h3> Action Comics </h3>
                        </div>

                    </div>
                </div>



            </div>
            <div id="Load">LOAD MORE</div>

        </div>


    </main>
@endsection


@section('titlePage')
    home
@endsection
