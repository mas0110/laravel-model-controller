@extends('layouts.app')

@section('main')
    <main>
        <h1 class="text-center m-3">Libreria film</h1>
        <div class="row justify-content-center">
            @foreach ($movies as $item)
            <div class="col-3 m-3">
                <div class="card bg-light text-dark" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item['title']}}</h4>
                        <p class="card-text">{{ $item['original_title']}}</p>
                        <p class="card-text">{{ $item['nationality']}}</p>
                        <p class="card-text">{{ $item['date']}}</p>
                        <p class="card-text">{{ $item['vote']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </main>
@endsection
