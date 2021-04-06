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
              Color Palette
            </h3>
          </div>
          <div class="card-body">
			
            <b>Kode</b> : {{$data->kode}} <br>
			<small>Kata kunci :
			@foreach($data->tags as $tag)
				<a href="/tags/{{$tag->name}}">{{$tag->name}}</a> 
			@endforeach
			</small><br>
            <b>Judul</b> : {{$data->judul}} <br>
            <b>Isi</b> : {{$data->isi}} <br>
            <b>Dibuat pada</b> : {{$data->created_at}}<hr>
			<a href="/info" class="btn btn-primary btn-sm">Kembali</a>
            <!-- /.row -->
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