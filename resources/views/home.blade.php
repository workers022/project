
    
        

            <div class="row">
            <!--row starts-->

            <div class="col-md-12">
               
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                           Role
                        </h3>
                </div>

                <div class="panel-body">
                        <form class="form-horizontal" action="{{ url('rolepost') }}" method="post">

                            <!-- CSRF Token -->
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- Name input-->
                              
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Role </label>
                                    <div class="col-md-9">
                                        <input id="rolename" name="rolename" type="text" placeholder="Enter the role name" class="form-control"></div>
                                </div>
                               
                                <!-- Form actions -->
                                
                        </form>
                    </div>
                </div>
               



            </div>
            <!--md-12 ends-->
        </div>


 
