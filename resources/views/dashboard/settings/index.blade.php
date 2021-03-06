@extends("dashboard.layouts.layout1")

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Go back to site</a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-body">
            <form action="{{ route('admin-panel.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Title <span style="color: red">*</span>
                            <input type="text" name="title" value="{{ $settings->title }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Subtitle
                            <input type="text" value="{{ $settings->subtitle}}" name="subtitle" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                            <canvas id= "canv1" ></canvas>

                            <p>
                                Logo (125x42)
                            <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <canvas id= "canv2" ></canvas>
                            <p>
                            Favicon
                            <input class="form-control-file border" type="file" multiple="false" name="favicon" accept="image/*" id=favinput onchange="upload_2()">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Description <span style="color: red">*</span>
                            <input type="text" name="description" value="{{ $settings->description}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Keywords
                            <input type="text" value="{{ $settings->keywords}}" name="keywords" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Author <span style="color: red">*</span>
                            <input type="text" name="author" value="{{ $settings->author}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Copyright
                            <input type="text" value="{{ $settings->copyright}}" name="copyright" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-md btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    </div>
<style>
    canvas {
        height: 100px;
        border-style: solid;
        border-width: 1px;
        border-color: black;
    }
</style>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
</script>
<script>
    function upload(){
        var imgcanvas = document.getElementById("canv1");
        var fileinput = document.getElementById("finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);

    }
    function upload_2(){
        var imgcanvas = document.getElementById("canv2");
        var fileinput = document.getElementById("favinput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);

    }

</script>
@endsection()
