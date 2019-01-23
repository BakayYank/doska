@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')

    @if ($region)
        <p>
            <a href="{{ route('cabinet.adverts.create.advert', [$category, $region]) }}" class="btn btn-success">Добавить обявления в регион {{ $region->name }}</a>
        </p>
    @else

    @endif



    <ul>
        @foreach ($regions as $current)
            <li>
                <a href="{{ route('cabinet.adverts.create.region', [$category, $current]) }}">{{ $current->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
