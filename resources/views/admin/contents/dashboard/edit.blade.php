@extends('admin.edit')
@section('edit')   
                  <div class="row">
                        
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Elements</h4>
                                </div>
                                <div class="card-content">
                                    <form method="get" action="/" class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">With help</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                    <span class="help-block">A block of help text that breaks onto a new line.</span>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Placeholder</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="placeholder" class="form-control">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Disabled</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="Disabled input here..." disabled="" class="form-control">
                                                </div>
                                            </div>
                                        </fieldset>                                     

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Checkboxes and radios</label>
                                                <div class="col-sm-10">
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">
                                                            First checkbox
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">
                                                            Second checkbox
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                        <label for="radio1">
                                                             First Radio
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <input type="radio" name="radio1" id="radio2" value="option2">
                                                        <label for="radio2">
                                                            Second Radio
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group">
                                               <label class="col-sm-2 control-label">Inline checkboxes</label>
                                               <div class="col-sm-10">
                                                   <div class="checkbox checkbox-inline">
                                                       <input id="checkbox50" type="checkbox">
                                                       <label for="checkbox50">
                                                          1st Checkbox
                                                       </label>
                                                   </div>
                                                   <div class="checkbox checkbox-inline">
                                                       <input id="checkbox51" type="checkbox">
                                                       <label for="checkbox51">
                                                           b
                                                       </label>
                                                   </div>
                                                   <div class="checkbox checkbox-inline">
                                                       <input id="checkbox52" type="checkbox">
                                                       <label for="checkbox52">
                                                           c
                                                       </label>
                                                   </div>
                                               </div>
                                            </div>
                                        </fieldset>

                                       

                                        <fieldset>
                                            <div class="form-group has-success">
                                                <label class="col-sm-2 control-label">Input with success</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="Success" class="form-control"/>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group has-error">
                                                <label class="col-sm-2 control-label">Input with error</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="Error" class="form-control"/>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group column-sizing">
                                                <label class="col-sm-2 control-label">Column sizing</label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text" placeholder=".col-md-5" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Input groups</label>
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" placeholder="Username" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">$</span>
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Textarea</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Here can be your nice text" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

    @section('scripts')
    
        <script type="text/javascript">
            $(document).ready(function(){
                 $('#frmEmployee').validate();

                demo.initOverviewDashboard();
                demo.initCirclePercentage();

            });
        </script>

    @endsection

@endsection