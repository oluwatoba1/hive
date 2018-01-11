                    {{ Form::open(array('action' => array('SuppliersController@store'))) }}

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Add New Supplier</h4>
                    </div>

                    <div class="modal-body col-md-6">

                            {{ Form::label('name', 'Name of Org.') }}
                            {{ Form::text('name', old('name'), array('class' => 'form-control round-form', 'required' )) }}

                            {{ Form::label('region', 'Region') }}
                            {{ Form::text('region', old('region'), array('class' => 'form-control round-form', 'required' )) }}

                            {{ Form::label('state', 'State') }}
                            {{ Form::text('state', old('state'), array('class' => 'form-control round-form', 'required' )) }}

                            {{ Form::label('contact_title', "Supplier's Title") }}
                            {{ Form::text('contact_title', old('contact_title'), array('class' => 'form-control round-form', 'required')) }}

                            {{ Form::label('contact_phone', "Supplier's Phone No.") }}
                            {{ Form::text('contact_phone', old('contact_phone'), array('class' => 'form-control round-form', 'required')) }}

                            {{ Form::label('contact_email', "Supplier's Email") }}
                            {{ Form::text('contact_email', old('contact_email'), array('class' => 'form-control round-form', 'required')) }}                           

                    </div>

                    <div class="modal-body col-md-6">

                            {{ Form::label('address', 'Address') }}
                            {{ Form::text('address', old('address'), array('class' => 'form-control round-form', 'required')) }}

                            {{ Form::label('city', 'City') }}
                            {{ Form::text('city', old('city'), array('class' => 'form-control round-form' , 'required')) }}

                            {{ Form::label('country', 'Country') }}
                            {{ Form::text('country', old('country'), array('class' => 'form-control round-form', 'required' )) }}

                            {{ Form::label('contact_name', "Supplier's Name") }}
                            {{ Form::text('contact_name', old('contact_name'), array('class' => 'form-control round-form', 'required' )) }}

                            {{ Form::label('contact_fax', "Supplier's Fax") }}
                            {{ Form::text('contact_fax', old('contact_fax'), array('class' => 'form-control round-form' )) }}

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