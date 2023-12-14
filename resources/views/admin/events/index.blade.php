@extends('adminlte::page')

@section('title', 'ADMIN - EVENTOS')

@section('css')

@stop

@section('content_header')
<h1>
    Eventos
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-event">
        Crear 
    </button>
</h1>
@stop


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Eventos</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="events" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoría</th>
                            <th>Nombre</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Fecha</th>
                            <th>Imagen principal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->category->name }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->content }}</td>
                            <td>{{ $event->author }}</td>
                            <td>{{ $event->date }}</td>
                            <td>
                            <img src="{{asset($event->featured)}}" alt="{{ $event->title }}" class="img-fluid img-thumbnail" width="100px">
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-event-{{$event->id}}">
                                Editar
                                </button>
                                <form action="{{route('admin.events.delete', $event->id)}}" method="POST">
                                {{ csrf_field() }} 
                                @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                                
                            </td>
                        </tr>
                        <!-- /.modal EDITAR Eventos -->
                        @include('admin.events.modal-update-event')
                        <!-- /.modal -->
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Categoría</th>
                            <th>Nombre</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Fecha</th>
                            <th>Imagen principal</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-event">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Evento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <!-- PERMITE SUBIR IMAGENES A NUESTRO FORMULARIO-->
        <form action="{{route('admin.events.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
            <div class="form-group">
                    <label for="title">Evento</label>
                    <input type="text" name="title" class="form-control" id="event">
                </div>
                <div class="form-group">
                <label for="category-id">Categoría</label>
                        <select name="category_id" id="category-id" class="form-control">
                            <option value="">-- Elegir categoría --</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" name="author" class="form-control" id="author-id">
                </div>
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="featured">Imagen principal</label>
                    <input type="file" name="featured" class="form-control" id="featured">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



@stop


@section('js')
<script>
$(document).ready(function() {
    $('#events').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop
