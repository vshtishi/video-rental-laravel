@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <h2 class="text-center mb-5">Add new product</h2>
            <form method="POST" enctype="multipart/form-data" id="new-product" action="" >
                @csrf
                <div class="row flex-wrap">
                    <div class="col-sm-6 mb-2">
                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                             alt="preview image" class="mb-5 img-fluid img-thumbnail">
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title" class="h4">Title:</label><br>
                            <input type="text" name="title" id="title" placeholder="Title here..." class="col-xl-12">
                        </div>
                        <div class="form-group">
                            <label for="description" class="h4">Description:</label><br>
                            <textarea name="description" id="description" placeholder="Description here..." rows="10" class="col-xl-12"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="year" class="h4">Year of release:</label><br>
                            <input type="number" name="year" id="year" min="1900" max="2021" class="col-xl-12" placeholder="Year of release here...">
                        </div>
                        <div class="form-group">
                            <label for="categories" class="h4">Categories:</label><br>
                            <select name="categories[]" id="categories" class="col-xl-12">
                                <option value="option1">Category 1</option>
                                <option value="option2">Category 2</option>
                                <option value="option3">Category 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rental" class="h4">Rental Price:</label><br>
                            <input type="number" name="rental" id="rental" min="0" class="col-xl-12" placeholder="Rental price here...">
                        </div>
                        <div class="form-group">
                            <label for="unit" class="h4">Unit Price:</label><br>
                            <input type="number" name="unit" id="unit" min="0" class="col-xl-12" placeholder="Unit price here...">
                        </div>
                        <div class="form-group">
                            <label for="trailerURL" class="h4">Trailer URL:</label><br>
                            <input type="text" name="trailerURL" id="trailerURL" placeholder="Trailer URL here..." class="col-xl-12">
                        </div>
                        <div class="form-group">
                            <label for="video" class="h4">Upload video:</label><br>
                            <input type="file" name="video" placeholder="Choose video" id="video">
                            @error('video')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary float-right ml-3" id="submit">Submit</button>
                        <button type="submit" class="btn btn-secondary float-right" id="cancel">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </main>
@endsection
@section('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
