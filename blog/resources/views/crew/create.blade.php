@extends('layout.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <h3>Form Tambah Crew</h3>
               </div>
               <form class="form-horizontal" action="{{ route('crew.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                    <label class="control-label col-sm-2">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                    </div>
                    </div>
                   
                    <div class="form-group">
                    <label class="control-label col-sm-2">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Enter Name">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2">Position:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="position" placeholder="Enter Name">
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Tambah</button>
                    </div>
                    </div>
                    </form> 
           </div>
        </div>
    </div>
</section>
@endsection