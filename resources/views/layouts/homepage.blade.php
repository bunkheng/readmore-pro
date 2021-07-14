<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.includes.meta')
</head>

<body>

    @include('layouts.includes.header')

    {{-- @if (Auth::check())
    @if (Auth::user()->isAdmin == 'User')
    @include('layouts.includes.header-user')
    @else
    @include('layouts.includes.header-admin')
    @endif --}}


    @include('layouts.includes.herosection')


    @include('layouts.includes.productsection')


    @include('layouts.includes.footer')

    @include('layouts.includes.scripts')


</body>

</html>
