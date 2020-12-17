<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Company Modal</h4>
              </div>
  <form id="frmTasks" name="frmTasks" class="form-horizontal" method="post" action="{{url('update_company')}}">
                @csrf
              <div class="modal-body">
                 
                            <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Company Id</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control has-error" id="id" name="incident_id" placeholder="id" readonly="">
                                    </div>
                                </div>

                                 <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Company Name</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control has-error" id="company_name" name="company_name" placeholder="Company name"  readonly="">
                                    </div>
                                </div>

                                 <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Email Address</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control has-error" id="company_address" name="company_address" placeholder="Company address" >
                                    </div>
                                </div>


                                 <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Company  Phone </label>
                                    <div class="col-sm-9">
                                       <input type="number" class="form-control has-error" id="company_phone" name="company_phone" placeholder="Company phone" >
                                    </div>
                                </div>

                                 <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Company  Desc </label>
                                    <div class="col-sm-9">
                                       <textarea type="number" class="form-control has-error" id="company_desc" name="company_desc" placeholder="Company phone" rows="2"></textarea>
                                    </div>
                                </div>

                               {{--  <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Image</label>
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