@extends('layouts.app')
 
@section('title') Edit Teachers @endsection
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

                       <form class="form-horizontal form-label-left"  action="{{ route('teachers.update',$teacher->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Name</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="text" required name="name" class="form-control" placeholder="Name" value="{{ $teacher->name }}">
                            </div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Email</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="email" required name="email" class="form-control" placeholder="Email" value="{{ $teacher->email }}">
                            </div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="text" required name="phone_no" class="form-control" placeholder="Phone no" value="{{ $teacher->phone_no }}">
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Classes</label>
                            <div class="col-md-9 col-sm-9 ">
                               <select class="form-control" required name="class_id">
                                  <option>Please Select</option>
                                  <option value="1" @if($teacher->class_id == 1) selected @endif >Class one</option>
                                  <option value="2" @if($teacher->class_id == 2) selected @endif >Class two</option>
                                  <option value="3" @if($teacher->class_id == 3) selected @endif >Class three</option>
                                  <option value="4" @if($teacher->class_id == 4) selected @endif >Class four</option>
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