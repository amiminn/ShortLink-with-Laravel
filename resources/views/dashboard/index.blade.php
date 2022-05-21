@extends('layout.main') @section('content')
<div class="container-fluid px-5 py-3">
  <div class="row">
      <div class="col-md-7 my-2 text-center">
          <div class="card-up">
              <img class="card-img" style="max-width: 380px; max-height: 380px; border-radius: 50%" src="{{ asset('img/bocil.jpg') }} " alt="Image with a photo of clouds. " />
          </div>
          <h2 class="text-white my-2">
              <i class="fas fa-link"></i> a Simple Custom Short Link
          </h2>
      </div>

      <div class="col-md-5 my-2">
          <h2 class="text-white text-center">
              Buat linkmu bervariasi <i class="fas fa-level-down"></i>
          </h2>
          <div class="card">
              <div class="card-body">
                  <form>
                      <input type="text" id="link" class="form-control mb-2" autocomplete="off" placeholder="ur link " />
                      <h5 class="text-center">
                          <i class="fas fa-chevron-circle-down"></i>
                      </h5>
                      <input type="text" id="srt" class="form-control mb-2" autocomplete="off" placeholder="ur customize link " />
                      <small class="form-text text-muted mb-4 url"></small>
                      <div class="text-center">
                          <button id="sub" class="btn btn-primary">generate</button>
                      </div>
                  </form>

                  <hr />
                  
                  {{-- callback response --}}
                  <div id="respon" hidden  class="alert " role="alert ">
                  <div class="status"></div>
                  <div class="open">Open link : <a target="blank" id="trgt"></a></div>
                  </div>
                  {{-- callback response --}}

                  <div class="md-form input-group mb-3">
                      <input type="text " class="form-control resLink" />
                      <div class="input-group-append">
                          <button class="btn btn-md btn-secondary m-0 px-3 btnLink" type="button ">
                              copy
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <hr class="bg-white" />
  <h2 class="text-white"><i class="fas fa-cogs"></i> cara kerja</h2>
  <h2 class="text-white"><i class="fas fa-code"></i> simpel development</h2>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(()=>{
  // call function
  realTime()
  copy()


  // start
  function realTime(){    
    $('#srt').keyup(()=>{
      const srt = $('#srt').val()
      $('.url').html(`{{ env('APP_URL') }}:8000/e-${srt}`)
    })
  }

  function copy(){
    const copyText = $('.resLink')
    $('.btnLink').click(()=>{
      copyText.select();
      document.execCommand('copy');
      $('.btnLink').html(`<i class="fas fa-check"></i>`)
    })
  }

  $('form').submit((event)=>{
    event.preventDefault()
    const linknya = $('#link').val();
    const srtnya = $('#srt').val();
    $('#sub').html('...').removeClass('btn-primary').addClass('btn-info')
    const url = 'http://127.0.0.1:8000/api/srt'
    $.post(url, {
      link: linknya,
      srt: srtnya
    }, (response, status)=>{
      $('#sub').html('generate').removeClass('btn-info').addClass('btn-primary')
      console.log(status);
      if(status == 'success'){
        $('.status').html(`Status : <b>${status}</b>`)
        $("#trgt").attr("href", `{{ env('APP_URL') }}:8000/e-${response.data.srt}`).html(`<i class="fas fa-arrow-up-right-from-square"></i> {{ env('APP_URL') }}:8000/e-${response.data.srt}`)
        $('#respon').removeAttr('hidden').addClass('alert-success')
        $('.resLink').val(`{{ env('APP_URL') }}:8000/e-${response.data.srt}`)
      }else{
        $('#respon').removeAttr('hidden').addClass('alert-danger')
      }
      console.log(response.data);
    })
  })

})
</script>
@endpush