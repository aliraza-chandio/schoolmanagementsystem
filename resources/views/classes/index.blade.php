@extends('layouts.app')
 
@section('title') Classes @endsection
@section('content')


<!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Classes <small>View</small></h3>
          </div>

          <div class="title_right">
            <div class="col-md-3 col-sm-3   form-group float-right top_search">
              <a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Class</a>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
              <div class="x_title">
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Sr. no</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($classes as $class)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $class->title }}</td>
                        <td>{{ $class->status }}</td>
                        <td>
                            
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $classes->links() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- /page content -->

@endsection