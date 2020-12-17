<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Request Modal</h4>
              </div>
  <form id="frmTasks" name="frmTasks" class="form-horizontal" method="post" action="{{url('save_subscriber')}}">
                @csrf
              <div class="modal-body">
                 
                            <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Request Id</label>
                                   
                                       <input type="text" class="form-control has-error" id="id" name="sub_id" placeholder="id" readonly="">
                                  
                                </div>

                                  <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Request Location</label>
                                   
                                       <input type="text" class="form-control has-error" id="location" name="location" placeholder="id" readonly="">
                                  
                                </div>


                                 <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Request Id</label>
                             
                                       <input type="text" class="form-control has-error" id="date" name="date" placeholder="date" readonly="">
                                  
                                </div>

  

                                 <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Company Name</label>
                              
                                       <input type="text" class="form-control has-error" id="company_id" name="company_id" placeholder="Company name" readonly="">
                                   
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Estate/Flat Name</label>
                                       <input type="text" class="form-control has-error"  required="" name="estate" placeholder="Estate" >
                                   
                                </div>

                                 <div class="form-group error">
                                    <label for="inputTask" class=" control-label">House Number</label>
                                       <input type="text" class="form-control has-error" required=""  name="house" placeholder="67" >
                                   
                                </div>

                                 <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Road/Street</label>
                                       <input type="text" class="form-control has-error"  required="" name="street" placeholder="opp Langata high ...etc" >
                                   
                                </div>


                               {{--  <div class="form-group error">
                                    <label for="inputTask" class=" control-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file">
                                    </div>
                                </div> --}}

                

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
              </div>
          </form>
            </div>
            <!-- /.modal-content -->
          </div>
      </div>