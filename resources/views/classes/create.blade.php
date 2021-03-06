@extends('layouts.app')
 
@section('title') Create Teachers @endsection
@section('content')
  <!-- page content -->
    <div class="right_col" role="main">
       <div class="">
          <div class="page-title">
             <div class="title_left">
                <h3>Create Class</h3>
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
                      <form class="form-horizontal form-label-left" action="/classes/store" method="POST">
                        @csrf
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Title</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="text" required name="title2" class="form-control" placeholder="Title">
                            </div>
                         </div>
                         <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Status</label>
                            <div class="col-md-9 col-sm-9 ">
                               <input type="text" required name="status" class="form-control" placeholder="Status">
                            </div>
                         </div>
                         <div class="ln_solid"></div>
                         <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
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