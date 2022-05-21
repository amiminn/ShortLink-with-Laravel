@extends('layout.main') @section('content')

<div class="container-fluid px-5 py-3">
    <div class="row">
        <div class="col-md-7 my-2 text-center">
            <div class="card-up">
                <img class="card-img" style="width: 380px; height: 380px; border-radius: 50%" src="{{ asset('img/bocil.jpg') }} " alt="Image with a photo of clouds. " />
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
                        <input type="text" id="srt" class="form-control mb-2" autocomplete="off" placeholder="ur link " />
                        <h5 class="text-center">
                            <i class="fas fa-chevron-circle-down"></i>
                        </h5>
                        <input type="text" id="link" class="form-control mb-2" autocomplete="off" placeholder="ur customize link " />
                        <div class="text-center">
                            <button id="sub" class="btn btn-primary">generate</button>
                        </div>
                    </form>

                    <hr />
                    
                    {{-- callback response --}}
                    <div id="respon" hidden class="alert " role="alert ">
                        A simple success alert with
                        <a href="# " class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    {{-- callback response --}}

                    <div class="md-form input-group mb-3">
                        <input type="text " value="https://tinyurl.com/app/ " class="form-control" placeholder="Recipient 's username" aria-label="Recipient's username " aria-describedby="MaterialButton-addon2 " />
                        <div class="input-group-append">
                            <button class="btn btn-md btn-secondary m-0 px-3" type="button " id="MaterialButton-addon2 ">
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

</script>
@endpush