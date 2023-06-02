@extends('admin.master')

@section('title', 'ADD POSITION')

@section('content')
    <div class="container">

        <hr>

        <h1>ADD POSITION</h1>

        <hr>

        <form method="POST" enctype="multipart/form-data" action="{{ route('positions.store') }}">
            <div>
                @csrf

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME EN</span>
                    </div>
                    <input type="text" name="name_en" id="name_en" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME UA</span>
                    </div>
                    <input type="text" name="name_ua" id="name_ua" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME RU</span>
                    </div>
                    <input type="text" name="name_ru" id="name_ru" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">NAME DE</span>
                    </div>
                    <input type="text" name="name_de" id="name_de" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION EN</label>
                        <textarea class="form-control" name="description_en" id="description_en" style="height: 100px"></textarea>
                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION UA</label>
                        <textarea class="form-control" name="description_ua" id="description_ua" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION RU</label>
                        <textarea class="form-control" name="description_ru" id="description_ru" style="height: 100px"></textarea>
                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <label for="marmoset">DESCRIPTION DE</label>
                        <textarea class="form-control" name="description_de" id="description_de" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="software">SOFTWARE EN</label>
                        <textarea class="form-control" name="software_en" id="software_en" style="height: 100px"></textarea>
                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <label for="software">SOFTWARE UA</label>
                        <textarea class="form-control" name="software_ua" id="software_ua" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="software">SOFTWARE RU</label>
                        <textarea class="form-control" name="software_ru" id="software_ru" style="height: 100px"></textarea>
                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <label for="software">SOFTWARE DE</label>
                        <textarea class="form-control" name="software_de" id="software_de" style="height: 100px"></textarea>
                    </div>
                </div>

                <button class="btn btn-success">CREATE</button>

                <hr>
            </div>
        </form>

    </div> <!-- /container -->
@endsection
