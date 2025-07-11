@extends('layouts.app', ['class' => 'register-page', 'pageSlug' => _('edit_noticia'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="text-right">
                <a href="{{route('home')}}" class="btn btn-sm btn-primary">Home</a>
            </div>
            <div class="card card-register card-white">
                <form class="form" method="post" action="{{ route('noticia.update', ['noticium' => $noticia->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="input-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ _('Title') }}" value="{{ old('title', $noticia->title) }}">
                            @include('alerts.feedback', ['field' => 'title'])
                        </div>
                        <div class="input-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                            
                          <textarea class="text-area" id="exampleFormControlTextarea1" name="content" placeholder="{{_('Conteudo')}}" rows="5">{{old('content', $noticia->content)}}</textarea>
                            @include('alerts.feedback', ['field' => 'content'])
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ _('Salvar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
