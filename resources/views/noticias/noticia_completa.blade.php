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
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{route('noticia.edit', ['noticium' => $noticia->id])}}">Edit</a>
                                        <form action="{{route('noticia.destroy', ['noticium' => $noticia->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item btn btn-link">Delete</button>
                                        </form>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
@endsection