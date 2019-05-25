@extends('layout.app')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Crew</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Nama</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Position</th>
                </tr>
                @foreach($crew as $crew)
                <tr>
                  <td>{{ $crew->id }}</td>
                  <td>{{ $crew->name }}</td>
                  <td>{{ $crew->phone }}</td>
                  <td>{{ $crew->email }}</td>
                  <td>{{ $crew->position }}</td>
                  <td>
                      <a href="{{route('crew.delete',['id'=> $crew->id])}}" class="btn btn-danger" onclick="return confirm('Delete this Data?')">Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</section>

@endsection