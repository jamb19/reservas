<div class="modal fade" id="modal-update-event-{{$event->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Evento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">Nombre</label>
                                        <input type="text" name="title" class="form-control" id="event" value="{{$event->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="category-id">Categoría</label>
                                    <select name="category_id" id="category-id" class="form-control">
                                        <option value="">-- Elegir categoría --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" <?= $category->id == $event->category->id ? 'selected': '' ?> > {{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="content">Contenido</label>
                                    <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{$event->content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="author">Autor</label>
                                    <input type="text" name="author" class="form-control" id="author" value="{{$event->author}}">
                                </div>
                                <div class="form-group">
                                    <label for="date">Fecha</label>
                                    <input type="date" name="date" id="date" value="{{$event->date}}">
                                </div>
                                <div class="form-group">
                                    <label for="featured">Imagen principal</label>
                                    <input type="file" name="featured" class="form-control" id="featured">
                                    <small>imagen actual</small> <br>
                                    <img src="{{asset($event->featured)}}" width="80px" class="img-fluid img-thumbnail" alt="{{$event->featured}}">
                    </div>
                            </div>            

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
            <!-- /.modal-dialog -->
        </div>