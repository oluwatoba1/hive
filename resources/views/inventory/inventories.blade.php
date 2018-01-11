@extends('layouts.template')

@section('content')      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt" style="float: right; padding: 0px 25px 12px 0px">
              <a href="inventories/create" type = "button" class="btn btn-default btn-round" data-toggle="modal" data-target="#myModal">
                New Inventory
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
                      <h4><i class="fa fa-angle-right"></i> Inventory</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">

                            <thead>
                              <tr>
                              <th>Category</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                          @foreach($inventories as $inventory)
                              <tr>

                                <td>{{ $inventory->kategory->name }}</td>
                                <td>{{ $inventory->name }}</td>
                                <td>{{  $inventory->description }}</td>
                                <td>
                                  {{ Form::open(array('route' => ['inventories.destroy', $inventory->id], 'method' => 'DELETE')) }}
                                  <a href="inventories/{{ $inventory->id }}/edit" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs" type="button"><i class="fa fa-pencil"></i></a>
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