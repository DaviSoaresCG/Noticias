<section class="note-container">
    <div class="note-header">
        <div class="note-info">
            <h3 class="note-title">{{$noticia->title}}</h3>
            <p>
                Criado em <strong>{{ date('d/m/Y', strtotime($noticia->created_at)) }}</strong> às
                <strong>{{ date('H:i:s', strtotime($noticia->created_at)) }}</strong>
            </p>
            @if ($noticia->created_at != $noticia->updated_at)
                <p>
                    Modificado em <strong>{{ date('d/m/Y', strtotime($noticia->updated_at)) }}</strong> às
                    <strong>{{ date('H:i:s', strtotime($noticia->updated_at)) }}</strong>
                </p>
            @endif
        </div>
        <div class="note-actions">
            <a href="{{route('noticia.edit', ['noticium' => $noticia->id])}}">
                <!-- Ícone editar -->
                <i class="tim-icons icon-pencil"></i>
            </a>
            <form action="{{route('noticia.destroy', ['noticium' => $noticia->id])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="tim-icons icon-trash-simple"></i>
            </button>
            </form>                
        </div>
    </div>
    <div class="note-text">
        <p>
            {{$noticia->content}} <a href="{{route('noticia.show', ['noticium' => $noticia->id])}}" class=" font-weight-bold">Ler mais</a>
        </p>
    </div>
</section>