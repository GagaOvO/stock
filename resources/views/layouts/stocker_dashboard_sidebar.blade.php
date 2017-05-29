<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="SHEMA MUYANGO Gael gagagael6@gmail.com">
    <title>MUTICOL Ltd</title>

   <!-- Bootstrap Core CSS -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/newbar.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
    
<body>

  
<nav class="navbar navbar-m2p sidebar" role="navigation">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-toggle" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu-toggle">
            <ul class="nav navbar-nav">
                <!-- Dashboard -->
                <li class="active open">
                  <a href="/stocker_dashboard">
                      <span class="pull-right hidden-xs showopacity glyphicon material-icons"></span> Dashboard
                  </a>
                </li>
                <li class="separator">CONTENT</li>
                <!-- Page -->
                <li class="">
                    <a href="/instock_stocker"><span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons"></span>Goods In Stock
                    </a>
                    <a href="/outgoing_stock"><span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons"></span>Goods going out of stock
                    </a>
                    <a href="" data-toggle="modal" data-target="#myModal"><span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons"></span>Upload Bulk Stock
                    </a>
                    
                </li>
                <li class="separator">System</li>
                <!-- Users -->
                <li class="#">
                    <a href="#" ><span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons"></span>Profile
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    </div>

    <div class="container">
        <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#myModal">Open Modal</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Import Stock Excel File</h4>
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
                        </div>

    
</body>
</html>
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>