 {{ Form::model($inventory, array('route' => array('inventories.update', $inventory->id), 'method' => 'PUT')) }}

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Add New Inventory</h4>
                    </div>

                    <div class="modal-body col-md-6">

                    {{ Form::label('metric_id', 'Metric') }}

                    <!-- {{ Form::select('metric_id', array($metrics), null, array('class' => 'form-control round-form', 'required' )) }} -->

                     <select name="metric_id" id="metric_id" class="form-control round-form" required>

                        
                    @foreach($metrics as $metric)

                        <option value="{{ $metric->id }}" {{ old('metric') == $metric->id ? 'selected' : '' }} >

                        {{ $metric->name }} ({{$metric->symbol}})
                        </option>

                    @endforeach

                    </select>

                    {{ Form::label('category_id', 'Category') }}

                     <select name="category_id" id="category_id" class="form-control round-form" required>

                        
                    @foreach($categories as $category)

                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }} >

                        {{ $category->name }}
                        
                        </option>

                    @endforeach

                    </select>                    

                    </div>

                    <div class="modal-body col-md-6">

                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', old('name'), array('class' => 'form-control round-form', 'required')) }}

                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', old('description'), array('class' => 'form-control round-form' , 'required')) }}

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