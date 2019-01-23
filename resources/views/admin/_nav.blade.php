<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link{{ $page === '' ? ' active' : '' }}" href="{{ route('admin.home') }}">Админ панель</a></li>
    @can ('manage-adverts')
        <li class="nav-item"><a class="nav-link{{ $page === 'adverts' ? ' active' : '' }}" href="{{ route('admin.adverts.adverts.index') }}">Управления объявлениями</a></li>
    @endcan

    @can ('manage-regions')
        <li class="nav-item"><a class="nav-link{{ $page === 'regions' ? ' active' : '' }}" href="{{ route('admin.regions.index') }}">Управления регионами</a></li>
    @endcan
    @can ('manage-adverts-categories')
        <li class="nav-item"><a class="nav-link{{ $page === 'adverts_categories' ? ' active' : '' }}" href="{{ route('admin.adverts.categories.index') }}">Управления категориями</a></li>
    @endcan

    @can ('manage-users')
        <li class="nav-item"><a class="nav-link{{ $page === 'users' ? ' active' : '' }}" href="{{ route('admin.users.index') }}">Управления пользователями</a></li>
    @endcan

</ul>
