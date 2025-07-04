@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="col">

        @forelse($noticias as $noticia)
            @include('noticias.noticia')
        @empty
            <p>Não há registro de noticias para o usuario {{ Auth::user()->name }}</p>
        @endforelse

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
