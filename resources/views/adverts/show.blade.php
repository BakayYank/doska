@extends('layouts.app')

@section('content')

    @if ($advert->isDraft())
        <div class="alert alert-danger">
            Статус объявления Черновик. Что бы объявление стало активным нажмите на кнопку Опубликовать
        </div>
        @if ($advert->reject_reason)
            <div class="alert alert-danger">
                {{ $advert->reject_reason }}
            </div>
        @endif
    @endif

    @can ('manage-adverts')
        <h4>Меню  Администратора </h4>
        <div class="d-flex flex-row mb-3">
            <a href="{{ route('admin.adverts.adverts.edit', $advert) }}" class="btn btn-primary mr-1"> Редактировать </a>


            @if ($advert->isOnModeration())
                <form method="POST" action="{{ route('admin.adverts.adverts.moderate', $advert) }}" class="mr-1">
                    @csrf
                    <button class="btn btn-success">Разрешить и опубликовать объявления</button>
                </form>
            @endif

            @if ($advert->isOnModeration() || $advert->isActive())
                <a href="{{ route('admin.adverts.adverts.reject', $advert) }}" class="btn btn-danger mr-1">Отклонить</a>
            @endif

            <form method="POST" action="{{ route('admin.adverts.adverts.destroy', $advert) }}" class="mr-1">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Удалить объявления</button>
            </form>
        </div>
    @endcan

    @can ('manage-own-advert', $advert)

        <h4>Меню  создателя  объяления </h4>

        <div class="d-flex flex-row mb-3">

            <a href="{{ route('cabinet.adverts.edit', $advert) }}" class="btn btn-primary mr-1">Редактировать</a>


            @if ($advert->isDraft())
                <form method="POST" action="{{ route('cabinet.adverts.send', $advert) }}" class="mr-1">
                    @csrf
                    <button class="btn btn-success">Опубликовать</button>
                </form>
            @endif
            @if ($advert->isActive())
                <form method="POST" action="{{ route('cabinet.adverts.close', $advert) }}" class="mr-1">
                    @csrf
                    <button class="btn btn-success">Закрыть</button>
                </form>
            @endif

            <form method="POST" action="{{ route('cabinet.adverts.destroy', $advert) }}" class="mr-1">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Удалить</button>
            </form>
        </div>
    @endcan

    <div class="row">
        <div class="col-md-9" style="    background-color: white;
    padding: 20px;">

            <p class="float-right" style="font-size: 36px;"> Цена {{ $advert->price }}</p>
            <h1 style="margin-bottom: 10px">{{ $advert->title  }}</h1>
            <p>
                @if ($advert->expires_at)
                    Дата добавления: {{ $advert->published_at }} &nbsp;
                @endif

            </p>



            <h3>Описание</h3>
            <p>{!! nl2br(e($advert->content)) !!}</p>

            <table class="table table-bordered">
                <tbody>
                @foreach ($advert->category->allAttributes() as $attribute)
                    <tr>
                        <th>{{ $attribute->name }}</th>
                        <td>{{ $advert->getValue($attribute->id) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <p>Адрес : {{ $advert->address }}</p>

            <div style="margin: 20px 0; border: 1px solid #ddd">
                <div id="map" style="width: 100%; height: 250px"></div>
            </div>

            <p style="margin-bottom: 20px">Добавил объявление: {{ $advert->user->name }}</p>

            <div class="d-flex flex-row mb-3">
                  @if ($user && $user->hasInFavorites($advert->id))
                    <form method="POST" action="{{ route('adverts.favorites', $advert) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-secondary"><span class="fa fa-star"></span> Удалить из избранных</button>
                    </form>
                @else
                    <form method="POST" action="{{ route('adverts.favorites', $advert) }}" class="mr-1">
                        @csrf
                        <button class="btn btn-danger"><span class="fa fa-star"></span> Добавить в избранное</button>
                    </form>
                @endif
            </div>

            <hr/>



        </div>

    </div>
@endsection

@section('scripts')
    <script src="//api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>

    <script type='text/javascript'>
        ymaps.ready(init);
        function init(){
            var geocoder = new ymaps.geocode(
                '{{ $advert->address }}',
                { results: 1 }
            );
            geocoder.then(
                function (res) {
                    var coord = res.geoObjects.get(0).geometry.getCoordinates();
                    var map = new ymaps.Map('map', {
                        center: coord,
                        zoom: 7,
                        behaviors: ['default', 'scrollZoom'],
                        controls: ['mapTools']
                    });
                    map.geoObjects.add(res.geoObjects.get(0));
                    map.zoomRange.get(coord).then(function(range){
                        map.setCenter(coord, range[1] - 1)
                    });
                    map.controls.add('mapTools')
                        .add('zoomControl')
                        .add('typeSelector');
                }
            );
        }
    </script>
@endsection