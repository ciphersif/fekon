@extends('template.template')
@section('title',$title)
@section('content')

<!-- Info boxes -->
        
        <div class="row">
          <div class="col-md-12">
           <div class="card card-default color-palette-box">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tag"></i>
              Tambah Informasi
            </h3>
          </div>
          <div class="card-body">
			<div class="card card-primary">
<!-- 00000000000000000000000000000000000000000000000000000000000000000000000000 -->

            
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/info/create" method="post">
				@csrf
				@include('info.partials.form')
              </form>
			  
			  
			  
<!-- 00000000000000000000000000000000000000000000000000000000000000000000000000 -->
            </div>
			
          </div>
          <!-- /.card-body -->
        </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      
@endsection()