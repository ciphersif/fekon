 <x-slot name="header">

       <div class="col-sm-6">
         <h1 class="m-0 text-dark">{{ __('CRUD') }}</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">CRUD</a></li>
         </ol>
       </div><!-- /.col -->
     
 </x-slot>

<table class="table">
<tr>
<th>nama</th>
<th>email</th>
<th>phone</th>
<th>photo</th>
</tr>
@foreach($datas as $data)
<tr>
<td>{{$data->nama}}</td>
<td>{{$data->email}}</td>
<td>{{$data->phone}}</td>
<td>{{$data->photo}}</td>
</tr>
@endforeach
</table>
	