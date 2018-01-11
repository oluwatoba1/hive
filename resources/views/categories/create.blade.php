                    {{ Form::open(array('action' => array('CategoriesController@store'))) }}

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                    </div>

                    <div class="modal-body">                  

                        {{ Form::label('name', 'Category') }}
                        {{ Form::text('name', old('name'), array('class' => 'form-control round-form', 'placeholder' => 'e.g. Beer', 'required' )) }}

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