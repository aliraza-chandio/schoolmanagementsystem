@extends('layouts.app')
 
@section('title') Create Teachers @endsection
@section('content')
  <!-- page content -->
    <div class="right_col" role="main">
       <div class="">
          <div class="page-title">
             <div class="title_left">
                <h3>Create Teacher</h3>
             </div>
             <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                   <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                      </span>
                   </div>
                </div>
             </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
             <div class="col-md-12 ">
                <div class="x_panel">
                   <div class="x_title">
                      <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                      <br />
                      <form class="form-horizontal form-label-left" action="{{ route('teachers.store') }}" method="POST">
                        @csrf
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Name</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="text" required name="name" class="form-control" placeholder="Name">
                            </div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Email</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="email" required name="email" class="form-control" placeholder="Email">
                            </div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="text" required name="phone_no" class="form-control" placeholder="Phone no">
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Password</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="password" required name="password" class="form-control" placeholder="Password">
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Classes</label>
                            <div class="col-md-9 col-sm-9 ">
                               <select class="form-control" required name="class_id">
                                  <option>Please Select</option>
                                  <option value="1">Class one</option>
                                  <option value="2">Class two</option>
                                  <option value="3">Class three</option>
                                  <option value="4">Class four</option>
                               </select>
                            </div>
                         </div>
                         <div class="ln_solid"></div>
                         <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                               <button type="button" class="btn btn-primary">Cancel</button>
                               <button type="reset" class="btn btn-primary">Reset</button>
                               <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  <!-- /page content -->
@endsection