@include('layouts.app')
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
         @include('layouts.seller_dashboard_sidebar')
        	<div class="container" style="margin-right: 100px;">
                <div class="row">
                    <div class="col-sm-12">
                    	<form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-box" style="margin-top:-55px;">
                                        <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>
                                        <div class="form-group m-b-20">
                                            <label>Product name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="e.g : Apple iMac">
                                        </div>

                                      	<div class="form-group m-b-20">
                                            <label>Categories <span class="text-danger">*</span></label>
                                            <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option>Select</option>
                                                <optgroup label="Shopping">
                                                    <option value="SH1">Shopping 1</option>
                                                    <option value="SH2">Shopping 2</option>
                                                    <option value="SH3">Shopping 3</option>
                                                    <option value="SH4">Shopping 4</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <label>Unit Price<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Unit Price">
                                        </div>

                                        <div class="form-group m-b-20">
                                            <label>Total Price<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Total Price">
                                        </div>

                                        <div class="form-group m-b-10">
                                            <label>Comment</label>
                                            <textarea class="form-control" rows="3" placeholder="Please enter summary"></textarea>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-12">
                                	<button class="btn btn-success btn-block" type="submit"> Create Now <i class="ffa-plus-square"></i></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer>
        <p>CopyRight © 2017<a style="color:#0a93a6; text-decoration:none;" href="#"> Company Name</a>, All rights reserved 2017.</p>
    </footer>
    </section>
</section>
