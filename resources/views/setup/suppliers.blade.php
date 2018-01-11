@extends('layouts.template')

@section('content')      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt" style="float: right; padding: 0px 25px 12px 0px">
              <a href="suppliers/create" type="button" class="btn btn-default btn-round" data-toggle="modal" data-target="#myModal">
                New Supplier
              </a>
          </div>
              
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                </div>
              </div>
          
          <div class="row mt"></div>
          <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Supplier</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">

                            <thead>
                              <tr>
                              <th>Name of Org.</th>
                              <th>Address</th>
                              <th>Supplier's Name</th>
                              <th>Phone No.</th>
                              <th> Email</th>
                              <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>

                            @foreach($suppliers as $supplier)

                              <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->address}}, {{$supplier->region}}, {{$supplier->city}}, {{$supplier->state}}</td>
                                <td>{{ $supplier->contact_name}}</td>
                                <td>{{ $supplier->contact_phone }}</td>
                                <td>{{ $supplier->contact_email }}</td>
                                <td>
                                  {{ Form::open(array('route' => ['suppliers.destroy', $supplier->id], 'method' => 'DELETE')) }}
                                  <a href="suppliers/{{ $supplier->id }}/edit" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs" type="button"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash-o "></i></button>
                                  {{ Form::close() }}
                                </td>
                              </tr>

                            @endforeach

                            </tbody>

                            </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->   
              </div>
          </section>
      </section>
@endsection