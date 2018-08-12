<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Prime Auto Restoration</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href={{asset('css/material-dashboard.css')}} rel="stylesheet" />
        <link href={{asset('demo/demo.css')}} rel="stylesheet" />
        <meta name="_token" content="{!! csrf_token() !!}">
        {{-- <link type="text/css" rel="stylesheet" href={{asset('materialize/css/materialize.min.css')}} media="screen,projection"/> --}}
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image={{asset('img/sidebar-1.jpg')}}>
          <div class="logo">
              <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                  Prime Auto Restoration
              </a>
          </div>
          <div class="sidebar-wrapper">
              @include('layouts.sidebar')
          </div>
      </div>

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="addNewSupplierModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;">Add New Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(array('route'=>'supplier.store'))!!}
                <div class="modal-body" style="color:black;">
                    <label for="serviceName" style="color:black;">Supplier Name</label>
                    <input type="text" class="form-control" id="serviceName" name="name" placeholder="Enter name">
                    <br>

                    <label for="serviceName" style="color:black;">Address</label>
                    <input type="text" class="form-control" id="serviceName" name="address" placeholder="Enter address">
                    <br>

                    <label for="serviceName" style="color:black;">Contact Person</label>
                    <input type="text" class="form-control" id="serviceName" name="contactPerson" placeholder="Enter contact person">
                    <br>

                    <label for="serviceName" style="color:black;">Contact Number</label>
                    <input type="number" class="form-control" id="serviceName" name="contactNumber" placeholder="Enter contact #">
                    <br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-md btn-block text-uppercase waves-effect waves-light" style="background-color: #4c87ed; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);" type="submit">Submit</button>
                </div>
                {!!Form::close()!!}
            </div>
            </div>
        </div>
       <!--modal_ends_here 
        commented by: PrivateAirJET
        -->

        <!--modal_starts_here 
        commented by: PrivateAirJET
        -->
        <div id="editSupplierModal" class="modal" tabindex="-1" role="dialog">
           
        </div>
        <!--modal_ends_here 
        commented by: PrivateAirJET
        -->

      <div class="main-panel">
         <div class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title ">Suppliers
                              <button id="addNewServiceButton" data-toggle="modal" data-target="#addNewSupplierModal" type=" button" rel="tooltip" title="Add New Service" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                              <i class="material-icons">add_circle</i>
                              </button>
                           </h4>
                           <p class="card-category" style="color:white;"> Here is a list of all the suppliers</p>
                        </div>
                        
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table" id="dataTable" width="" height="150">
                                 <thead class="text-primary" style="font-size:20px;">
                                    <th><span class="fa fa-vcard" role="icon"></span> Name</th>
                                    <th><span class="fa fa-file-text" role="icon"></span> Address</th>
                                    <th><span class="fa fa-newspaper-o" role="icon"></span> Contact Person</th>
                                    <th><span class="fa fa-money" role="icon"></span> Contact Number</th>
                                 </thead>
                                 <tbody id="suppliers" style="font-size:20px;">
                                  @foreach($suppliers as $supplier)
                                      <tr>
                                          <td>{{$supplier->name}}</td>
                                          <td>{{$supplier->address}}</td>
                                          <td class="text-center">{{$supplier->contactPerson}}</td>
                                          <td class="text-center">{{$supplier->contactNumber}}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
      <!--general script section-->
      <script src={{asset('js/core/jquery.min.js')}}></script>
      <script src={{asset('js/core/popper.min.js')}}></script>
      <script src={{asset('js/core/bootstrap-material-design.min.js')}}></script>
      <script src={{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
      <script src={{asset('js/plugins/chartist.min.js')}}></script>
      <script src={{asset('js/plugins/bootstrap-notify.js')}}></script>
      <script src={{asset('js/material-dashboard.min.js')}}></script>
      <script src={{asset('demo/demo.js')}}></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
      {{-- <script type="text/javascript" src={{asset('materialize/js/materialize.min.js')}}></script> --}}

      <!--start custom script section-->
      {{-- <script type="text/javascript">
        $(document).on('click','#addNewServiceButton',function(){
            $('#addNewServiceModal').modal('open'); 
        });
      </script> --}}
      <!--end custom script section-->
     

</html>
