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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon icon-edit">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </a>
            <form action="{{route('noticia.destroy', ['noticium' => $noticia->id])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon icon-delete">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                    </svg>
            </button>
            </form>
                <!-- Ícone deletar -->
                
        </div>
    </div>
    <div class="note-text">
        <p>
            {{$noticia->content}} <a href="{{route('noticia.show', ['noticium' => $noticia->id])}}" class="">Ler mais</a>
        </p>
    </div>
</section>