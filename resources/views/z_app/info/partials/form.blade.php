           
                <div class="card-body">
                  <div class="form-group">
                    <label>Kode : </label> 
                    <input type="text" name="kode" <?php echo $submit == 'Update'?'readonly':''; ?> value="{{old('kode') ?? $info->kode}}" class="form-control"  placeholder="Kode">
					@error('kode') <div class="text-danger mt-2">{{$message}}</div>@enderror
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
					
                    <select type="text" name="kategori"  class="form-control"  >
						<option disabled selected>- Pilih -</option>
					@foreach($kategoris as $kategori)
						<option {{$kategori->id == $info->kategori_id ? 'selected':''}}  value="{{$kategori->id}}">{{$kategori->nama}}</option>
					@endforeach
						
					</select>
					@error('kategori') <div class="text-danger mt-2">{{$message}}</div>@enderror
                  </div>
                  <div class="form-group">
                    <label>Tag</label>
					
                    <select type="text" name="tags[]" class="form-control select2"  multiple>
						
					@foreach($info->tags as $tag)
						<option selected value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
						
					@foreach($tags as $tag)
						<option value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
						
					</select>
					@error('tags') <div class="text-danger mt-2">{{$message}}</div>@enderror
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" value="{{old('judul') ?? $info->judul}}" class="form-control"  placeholder="Judul">
					@error('judul') <div class="text-danger mt-2">{{$message}}</div>@enderror
                  </div>
                  <div class="form-group">
                    <label >Isi</label>
                   <textarea name="isi" class="form-control" rows="3" >{{old('isi') ?? $info->isi}}</textarea>
				   @error('isi') <div class="text-danger mt-2">{{$message}}</div>@enderror
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">{{$submit}}</button>
				  <a href="/info" class="btn btn-primary btn-sm">Kembali</a>
                </div>
				
				
@section('body')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
		placeholder: "- Pilih -"
	})

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
@endsection
				