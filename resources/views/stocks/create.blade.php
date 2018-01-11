{{ Form::open(array('action' => array('StocksController@store', auth()->id()))) }}

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Add New Stock</h4>
  </div>

  <div class="modal-body col-md-6">                  

    {{ Form::label('inventory_id', 'Inventory') }}
      <select name="inventory_id" id="inventory_id" class="form-control round-form" required>

      <option value="">Choose an Item...</option>
                              
      @foreach($inventories as $inventory)

      <option value="{{ $inventory->id }}" {{ old('inventory') == $inventory->id ? 'selected':'' }} >
                                
        {{ $inventory->name }}

      </option>

    @endforeach

      </select>

      {{ Form::label('quantity', 'Quantity') }}
      {{ Form::text('quantity', old('quantity'), array('class' => 'form-control round-form', 'required' )) }}

      {{ Form::label('reason', 'Reason') }}
      {{ Form::text('reason', old('reason'), array('class' => 'form-control round-form', 'required')) }}


  </div>

  <div class="modal-body col-md-6">
                        
    {{ Form::label('location_id', 'Location') }}
      <select name="location_id" id="location_id" class="form-control round-form" required>

      <option value="">Choose a Location...</option>

      @foreach($locations as $location)
                          
        <option value="{{ $location->id }}" {{ old('location') == $location->id ? 'selected':'' }} >
                            
        {{ $location->name }}

        </option>

      @endforeach

                        </select>

                        {{ Form::label('cost', 'Cost') }}
                        {{ Form::text('cost', old('cost'), array('class' => 'form-control round-form', 'required')) }}

                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                        {{Form::submit('Save', array('class' => 'btn btn-primary'))}}
                      </div>

                      @if(count($errors))

                          <ol class="alert alert-danger">
                              
                          @foreach($errors->all() as $error)

                              <li>{{ $error }}</li>

                          @endforeach

                          </ol>

                      @endif

    {{ Form::close() }}

