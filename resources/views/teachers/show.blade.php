@extends('layouts.app')
 
@section('title') Teachers @endsection
@section('content')
  <!-- page content -->
    <div class="right_col" role="main">
       <div class="">
          <div class="page-title">
             <div class="title_left">
                <h3>Form Elements</h3>
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
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Name</label>
                            <div class="col-md-9 col-sm-9 ">{{ $teacher->name }}</div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Email</label>
                            <div class="col-md-9 col-sm-9 ">{{ $teacher->email }}</div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                            <div class="col-md-9 col-sm-9 ">{{ $teacher->phone_no }}</div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Classes</label>
                            <div class="col-md-9 col-sm-9 ">{{ $teacher->class_id }}</div>
                         </div>

                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  <!-- /page content -->
@endsection