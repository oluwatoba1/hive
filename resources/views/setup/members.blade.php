@extends('layouts.template')

@section('content')      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt" style="float: right; padding-right:25px; padding-bottom: 12px">
              <a href="{{ route('register') }}" data-toggle="modal" data-target="#myModal" id="createButton" class="btn btn-default btn-round">
                New User
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
                      <h4><i class="fa fa-angle-right"></i> Users</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">

                            <thead>
                              <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>

                            @foreach($members as $member)

                              <tr>
                                <td>{{ $member->name }}</th>
                                <td>{{ $member->email }}</th>
                                <td>
                                  <a href="members/{{$member->id}}/edit" data-toggle="modal" data-target="#myModal" id="editButton" class="btn btn-primary btn-xs" type="button"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger btn-xs" type="button" href="#"><i class="fa fa-trash-o "></i></a>
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

    <script type="text/javascript" src="js/jquery-1.8.3.min.js">
         

        var $modalDialog = $('<div/>', { 
          'class': 'modal-content', 
          'id': 'myModal' 
        })

        $(function () {
            $('a#createButton').on('click', function (e) {
                e.preventDefault();
                // TODO: Undo comments, below
                var url = $('a#createButton').attr('href');
                $modalDialog.load(url);
                $modalDialog.dialog("open");

                return false;
            });
        });

          $(function () {
            $('a#editButton').on('click', function (e) {
                e.preventDefault();
                // TODO: Undo comments, below
                var url = $('a#editButton').attr('href');
                $modalDialog.load(url);
                $modalDialog.dialog("open");

                return false;
            });
        });

    </script>

@endsection