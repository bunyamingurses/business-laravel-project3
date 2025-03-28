@extends("layouts.admin.index")
@section("style")
    <link href="{{ asset("assets/adminAssets/vendor/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet">
@endsection

@section("content")

    @if(session("status"))
        <div class="alert alert-info"> {{ session("status") }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projeler Tablosu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="carouselTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Başlık</th>
                        <th>Başlık İngilizce</th>
                        <th>Galeri</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Başlık</th>
                        <th>Başlık İngilizce</th>
                        <th>Galeri</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>

                    </tfoot>
                    <tbody>

                    @foreach($project as $projectWrite)
                        <tr>
                            <td><img src="{{ asset("imageAvif/project/")."/".$projectWrite->imagesAvif }}" width="200px" alt=""></td>
                            <td>{{ $projectWrite->title }}</td>
                            <td>{{ $projectWrite->titleEnglish }}</td>
                            <td>
                                <a href="{{ route("admin.project.gallery.index",["id"=>$projectWrite->id]) }}" class="btn btn-primary"><span class="fa fa-images"></span></a>
                            </td>
                            <td>{{ $projectWrite->created_at }}</td>
                            <td>
                                <a href="{{ route("admin.project.edit",["id"=>$projectWrite->id]) }}" class="btn btn-success"><span class="fa fa-edit"></span></a>
                                <a href="{{ route("admin.project.destroy",["id"=>$projectWrite->id]) }}" class="btn btn-danger"><span class="fa fa-trash-alt"></span></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <!-- Page level plugins -->
    <script src="{{ asset("assets/adminAssets/vendor/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/adminAssets/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>
    <script>
        $("#carouselTable").dataTable()
    </script>
@endsection
