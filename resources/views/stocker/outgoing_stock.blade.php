@include('layouts.app')
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
         @include('layouts.stocker_dashboard_sidebar')
        	<div class="container" style="margin-right: 100px;">
                <div class="row">
                    <div class="col-sm-12">
                    	<form action ="{{ url('/outgoing_stock') }}" method="POST" enctype="mulitpart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-box" style="margin-top:-55px;">
                                        <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>
                                        <div class="form-group m-b-20">
                                            <label>Product name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="e.g : Apple iMac" name="product_name">
                                        </div>

                                      	<div class="form-group m-b-20">
                                            <label>Product Code<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="e.g : #BIUBUIQ5464846846" name="voucher_number">
                                        </div>

                                        <div class="form-group m-b-20">
                                            <label>Quantity Out<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Unit Price" name="quantity_out">
                                        </div>

                                        <div class="form-group m-b-20">
                                            <label>Outgoing Stock Store Location<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter where the outgoing stock is going" name="outgoing_stock">
                                        </div>

                                        <div class="form-group m-b-10">
                                            <label>Comment</label>
                                            <textarea class="form-control" rows="3" placeholder="Please enter summary" name="comment"></textarea>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-12">
                                	<button class="btn btn-success btn-block" type="submit"> Create Now <i class="ffa-plus-square"></i></button>
                                </div>
                            }
                        </form>
                    </div>
                </div>
            </div>
            <footer>
        <p>CopyRight © 2017<a style="color:#0a93a6; text-decoration:none;" href="#"> Company Name</a>, All rights reserved 2017.</p>
    </footer>
    </section>
</section>
