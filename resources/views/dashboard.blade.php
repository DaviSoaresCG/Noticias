@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="col">
        @if($noticias->isEmpty())
            <p>Sem noticias para o usuario {{ Auth::user()->name }}</p>
        @else
            @foreach ($noticias as $noticia)
                @include('noticias.noticia');
            @endforeach
        @endif

    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
@endpush
