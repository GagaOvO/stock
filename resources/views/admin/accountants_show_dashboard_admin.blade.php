@include('layouts.app')
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
         @include('layouts.admin_dashboard_sidebar')
        <link href="css/datatables.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/datatables.min.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
         <div class="container" style="margin-right: 100px;">
                <div class="row" style="margin-top: 10px;">
                    <div class="container">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 60px;">Add New</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add New Account(s)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <input type="file" name="import_file" />
                                                <button class="btn btn-success">Import File</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>E-Mail</th>
                                    <th>User_type</th>
                                    <th>Store Location</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <? php $i=0; ?>
                                @foreach($seller AS $value)
                            <tbody>
                                <tr>
                                    <td>{{$value->fname}}</td>
                                    <td>{{$value->lname}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->user_type}}</td>
                                    <td>{{$value->store_location}}</td>
                                    <td> 
                                        <a href="#" class="table-action-btn btn btn-success btn-sm">
                                          <i class="md md-edit">Edit</i>
                                        </a>
                                        <a href="#" class="table-action-btn btn btn-danger btn-sm">
                                          <i class="md md-close">Delete</i>
                                        </a>
                                        <a href="#" class="table-action-btn btn btn-primary btn-sm">
                                          <i class="md md-close">See Actions</i>
                                        </a>
                                      </td>
                                </tr>
                            </tbody>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        <p>CopyRight © 2017<a style="color:#0a93a6; text-decoration:none;" href="#"> Company Name</a>, All rights reserved 2017.</p>
    </footer>
        <script type="text/javascript">
    // For demo to fit into DataTables site builder...
    $('#example')
        .removeClass( 'display' )
        .addClass('table table-striped table-bordered');
        </script>

        
  </section>
</section>

