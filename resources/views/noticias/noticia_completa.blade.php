@extends('layouts.app', ['page' => __('Noticia Show'), 'pageSlug' => 'noticia.show'])
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">{{$noticia->title}}</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{route('home')}}" class="btn btn-sm btn-primary">Voltar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{$noticia->content}}</p>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                        </nav>
                    </div>
                </div>
            @endsection