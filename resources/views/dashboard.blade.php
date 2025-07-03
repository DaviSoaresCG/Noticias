@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="col">
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-edit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-edit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-edit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-edit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-edit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-edit">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 7.125 18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
        <section class="note-container">
            <div class="note-header">
                <div class="note-info">
                    <h3 class="note-title">Titulo</h3>
                    <p>
                        Criado em <strong>22/03/2007</strong> às
                        <strong>22:32:21</strong>
                    </p>
                    {{-- @if ($note->created_at != $note->updated_at) --}}
                        <p>
                            Modificado em <strong>03/07/2025</strong> às
                            <strong>19:30:21</strong>
                        </p>
                    {{-- @endif --}}
                </div>
                <div class="note-actions">
                    <a href="#">
                        <!-- Ícone editar -->
                        <i class="icon icon-edit tim-icons icon-pencil"></i>
                    </a>
                    
                    <a href="#">
                        <!-- Ícone deletar -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon icon-delete">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9M19.228 5.79l-1.068 13.883a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0A48.108 48.108 0 0 0 15.75 5.393m-12 .562A48.11 48.11 0 0 1 7.228 5.393m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="note-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam sequi consectetur, magni minima laborum quae deserunt natus, explicabo corrupti itaque voluptas repellat dolore iusto ut veniam esse, commodi quasi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ut optio necessitatibus non quasi, veniam laboriosam aperiam animi earum molestiae numquam odio quibusdam perspiciatis maxime eligendi tempore ducimus, illo adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi...</p>
            </div>
        </section>
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
