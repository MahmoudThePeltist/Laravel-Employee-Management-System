
@extends('components.head')


@section('content')

    @include('components.navbar')

    <div class="container-fluid">
      <div class="row">
        
        @auth
            @include('components.sidebar')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

                @yield('layout-content')

            </main>
        @endauth

        @guest
            <main role="main" class="col-md-12 mx-auto col-lg-10 pt-3 px-4">

                @yield('layout-content')
                
            </main>
        @endguest

      </div>
    </div>
@endsection
