@extends('template.template')
@section('title',$title)
@section('content')

<!-- Info boxes -->
        
        <div class="row">
          <div class="col-md-12">
           <div class="card card-default color-palette-box">
			<div class="card-body">
			<a href="/info/add" class="btn btn-primary btn-sm">Tambah Info</a>
			</div>
			<!-- /.card-body -->
			</div>
           </div>
            <!-- /.card -->
          </div>
        <div class="row">
          <div class="col-md-12">
           <div class="card card-default color-palette-box">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tag"></i>
			  {{$title}} @isset($kategori) - {{$kategori->nama}} @endisset @isset($tag) - {{$tag->name}} @endisset
              
            </h3>
          </div>
          <div class="card-body">
			<?php 
			if($data){
				foreach($data as $val){ ?>
				<a href="/info/{{$val->kode}}"><b>Kode</b> : {{$val->kode}}</a> 
				<br>
				<small>Kata kunci :
				@foreach($val->tags as $tag)
					<a href="/tags/{{$tag->name}}">{{$tag->name}}</a>, 
				@endforeach
				</small>
				<br>
				
				<small><a href="/kategori/{{$val->kategori->nama}}">{{$val->kategori->nama}}</a>, {{$val->created_at->diffForHumans()}} </small><br>
				<b>Judul</b> : {{$val->judul}} <br>
				<b>Isi</b> : {{Str::limit($val->isi,80,'.....')}} <br>
				
				<b>Dibuat pada</b> : {{$val->created_at}}<br>
				
				<form action="/info/{{$val->kode}}/delete" method="post">
				@csrf
				@method('delete')
				<a href="/info/{{$val->kode}}/edit" class="btn btn-warning btn-xs">Edit</a> 
				<button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Are you sure?');">Delete</button>
				</form>
				<hr>
			<?php 
				}
			} ?>
			{{$data->links()}}
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