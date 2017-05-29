@include('layouts.app')
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        @include('layouts.stocker_dashboard_sidebar')
        	<div class="container" style="margin-right: 100px;">
                <div class="row">
                    <div class="col-sm-12">
                    	<div class="text-center">
                    		<h1>Hey There {{ Auth::user()->fname }}</h1>
                    		<p class="h1">Welcome To Eureka Stock System Dashboard</p>
                    		<p class="h1">For More Info click the panels below</p>
                    	</div>
                    	<div class="col-lg-4">
							<div class="panel panel-border panel-custom">
								<div class="panel-body">
									<p>
										<h1 class="text-center">
											<div class="popup" onclick="myFunction1()">Content
											  <p class="popuptext" id="myPopup1">
											  On the Left of your Screen you can access the Content's ToolBar
											  </p >
											</div>
										</h1>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-border panel-custom">
								<div class="panel-body">
									<p>
										<h1 class="text-center">
											<div class="popup" onclick="myFunction2()">Users
											  <p class="popuptext" id="myPopup2">
											  On the Left of your Screen you can access the User's ToolBar
											  </p >
											</div>
										</h1>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-border panel-custom">
								<div class="panel-body">
									<p>
										<h1 class="text-center">
											<div class="popup" onclick="myFunction3()">System
											  <p class="popuptext" id="myPopup3">
											  On the Left of your Screen you can access the System's ToolBar
											  </p >
											</div>
										</h1>
									</p>
								</div>
							</div>
						</div>
        				<script>
						// When the user clicks on div, open the popup
						function myFunction1() {
						    var popup = document.getElementById("myPopup1");
						    popup.classList.toggle("show");
						}
						</script>
						<script>
						// When the user clicks on div, open the popup
						function myFunction2() {
						    var popup = document.getElementById("myPopup2");
						    popup.classList.toggle("show");
						}
						</script>
						<script>
						// When the user clicks on div, open the popup
						function myFunction3() {
						    var popup = document.getElementById("myPopup3");
						    popup.classList.toggle("show");
						}
						</script>
					</div>
				</div>
			</div>

        <footer>
        <p>CopyRight © 2017<a style="color:#0a93a6; text-decoration:none;" href="#"> Company Name</a>, All rights reserved 2017.</p>
    	</footer>
        </section>
    </section>

