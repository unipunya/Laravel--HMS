@extends("layouts.default")
@section("title", "Hospitalmanagement - Home")
@section("content")
    <main class="container" style="max-width: 2000px">
        <section>
            <img src="{{$service->image}}" width="600px" height="400px" >
            <h2 style="color: black; margin-top: 40px;">{{$service->title}}</h2>
            <p>{{$service->description}}</p>
            <p>{{$service->note}}</p>
            <a href="{{ route('booking') }}" class="btn btn-success">Book Now </a>
        </section>
    </main>
@endsection