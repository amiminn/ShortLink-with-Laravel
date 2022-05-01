@extends('layout.main')
@section('content')
    
  <div class="container mt-1">  
    
        <form class="exe mb-3">
          <div class="form-outline mb-3">
            <input type="text" id="yourLink" class="form-control" autocomplete="off" />
            <label class="form-label" for="yourLink">Your link is here</label>
          </div>
         <div class="mb-3">
          <label class="visually-hidden" for="targetLink">Short Link</label>
          <div class="input-group ">
            <div class="input-group-text">{{ env('APP_URL') }}/e-</div>
            <input type="text" class="form-control" id="targetLink" autocomplete="off" placeholder="Short Link" />
          </div>
         </div>
          <button id="shorter" class="btn btn-primary btn-block btn-in">Shorter</button>
        </form>

        <div class="d-none"id="responnya">
        <hr>
        {{-- callback --}}
        <div class="card">
          <div class="card-body">
            response : <span class="response">-</span><br>
            Short link : <span class="shortLink">-</span><br>
            Target link : <span class="targetLink">-</span>
          </div>
        </div>
        </div>

        <hr>

        <div class="card">
          <table class="table table-strippet">
            <thead>
              <tr>
                <th>no</th>
                <th>short</th>
                <th>link</th>
              </tr>
            </thead>
            <tbody id="isinya">
            </tbody>
          </table>
        </div>
    
    
  </div>  
  
@endsection
@push('scripts')
    
<script>
  $(document).ready(()=>{

            $('#shorter').click(()=>{
              $('#shorter').html('load..')
              .removeClass('btn-primary')
              .addClass('btn-info')
            })
            $('.exe').submit((event)=>{
              event.preventDefault();
              const vFrom = $('#yourLink').val();
              const vTo = $('#targetLink').val();
              const url = 'http://localhost:8000/api/srt';
              $.post(url, {
                srt: vTo,
                link: vFrom
              }, (data, status)=>{
                $('.response').html(status)
                $('.shortLink').html('{{ env('APP_URL') }}:8000/e-' + data.data.srt)
                $('.targetLink').html(data.data.link)
                $('#yourLink').val('');
                $('#targetLink').val('');
                $('#shorter').html('shorter')
                .removeClass('btn-info')
                .addClass('btn-primary');
                $('#responnya').removeClass('d-none')
                getData()
              })
            })

            function getData(){
              const url = 'http://localhost:8000/api/srt';
              $.get(url, (response, status)=>{
                const all = response.data;
                let html = '';
                let no = 0;
                all.map(dt =>{
                  html += `<tr><td>${no + 1}</td><td>${dt.srt}</td><td>${dt.link}</td></tr>`
                  no++
                })

                $('#isinya').html(html)

              })
            }
            
            getData()

        })
    </script>
@endpush