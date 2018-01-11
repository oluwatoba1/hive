{{ Form::model($location, array('route' => array('locations.update', $location->id), 'method' => 'PUT')) }}

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Add New Location</h4>
                    </div>

                    <div class="modal-body">                  

                        {{ Form::label('name', 'Location') }}
                        {{ Form::text('name', old('name'), array('class' => 'form-control round-form', 'placeholder' => 'e.g. Ikeja Warehouse', 'required')) }}

                    </div>
                    <div class="modal-footer">
                      {{Form::submit('Close', array('class' => 'btn btn-default', 'data-dismiss' => 'modal'))}}
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