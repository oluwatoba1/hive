@extends('layouts.template')

@section('content')
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt" style="float: right; padding: 0px 25px 12px 0px">
              <a href="locations/create" class="btn btn-default btn-round" data-toggle="modal" data-target="#myModal">
                New Location
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
                      <h4><i class="fa fa-angle-right"></i> Locations</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="numeric">S/N</th>
                                  <th>Lft</th>
                                  <th>Rgt</th>
                                  <th>Depth</th>
                                  <th>Location</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>

                              @foreach($locations as $location)

                              <tr>

                              <td>{{ $location->id }}</td>
                              <td>{{ $location->lft }}</td>
                              <td>{{ $location->rgt }}</td>
                              <td>{{ $location->depth }}</td>
                              <td>{{ $location->name }}</td>
                              <td>
                                {{ Form::open(array('route' => ['locations.destroy', $location->id], 'method' => 'DELETE')) }}
                                <a href="locations/{{ $location->id }}/edit" id="editButton" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs" type="button" href="#"><i class="fa fa-pencil"></i></a>
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
