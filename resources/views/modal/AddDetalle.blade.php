
<div class="modal" id="modalAddDetalle" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['url' => 'DetalleItem/AddItem', 'method' => 'post']) !!}
        <div class="modal-body">
          <div class ="form-group">
              {!! Form::label('detalle', 'Detalle' ) !!}
              {!! Form::text('detalle') !!}
          </div>
          <div class ="form-group">
              {!! Form::label('cantidad', 'Cantidad') !!}    
              {!! Form::text('cantidad') !!}
          </div>
          <div class ="form-group">
              {!! Form::label('precioUnitario', 'Precio Unitario') !!}    
              {!! Form::text('precioUnitario') !!}
          </div>
          {{ Form::hidden('invisible', $detalles) }}
          <div class ="form-group">
              {!! Form::submit('Agregar') !!}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>