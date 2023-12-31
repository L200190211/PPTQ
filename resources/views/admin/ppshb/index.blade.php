@extends('layouts.admin')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Our Team</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Our Team</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Our Team</h2>
            <p class="section-lead">Grouping multiple images on one component.</p>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="card">
                                <div class="card-header space">
                                    <h4>Our Team</h4>
                                    <a href="{{ route('date', 1) }}" class="btn btn-icon icon-left btn-primary">
                                        <i class="far fa-edit"></i>Add Date Start - End</a>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-striped galery-t" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>School</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="galery">
                                            <?php $i = 1; ?>
                                            @foreach ($data as $datas)
                                            <tr>
                                                <th scope="row" style="width: 2%;">{{ 1 + $i++ }}</th>
                                                <td>
                                                    {{-- data null --}}
                                                    @if (is_null($datas->pasphoto))
                                                    <div class="sampul">
                                                        <div id="prev" style="background-image: url(/img/dummy/ppshb.png);">
                                                        </div>
                                                    </div>
                                                    {{-- data available --}}
                                                    @elseif (File::exists(public_path('img/berkas/' . $datas->pasphoto)))
                                                    <div class="sampul">
                                                        <div id="prev" style="background-image: url(/img/berkas/{{ $datas->pasphoto }})">
                                                        </div>
                                                    </div>
                                                    {{-- file not found --}}
                                                    @else
                                                    <div class="sampul">
                                                        <div id="prev" style="background-image: url(/img/dummy/ppshb.png);">
                                                        </div>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>{{ $datas->user->name }}</td>
                                                <td>
                                                    {{ isset($datas->user->asal_sekolah) ? $datas->user->asal_sekolah : 'NULL' }}
                                                </td>
                                                <td>
                                                    @if ($datas->user->status == 'Active')
                                                    <span class="badge badge-info">{{ $datas->user->status }}</span>
                                                    @else
                                                    <span class="badge badge-dark">{{ $datas->user->status }}</span>
                                                    @endif
                                                </td>
                                                <td><?php $a = isset($datas->pasphoto) ? 1 : 0 ?>
                                                    <?php $b = isset($datas->rapot) ? 1 : 0 ?>
                                                    <?php $c = isset($datas->ijazah) ? 1 : 0 ?>
                                                    <?php $d = isset($datas->skl) ? 1 : 0 ?>
                                                    <?php $e = isset($datas->kk) ? 1 : 0 ?>
                                                    <?php $f = isset($datas->akta) ? 1 : 0 ?>
                                                    <?php $g = isset($datas->kip) ? 1 : 0 ?>
                                                    <?php $h = isset($datas->surat_sedia) ? 1 : 0 ?>
                                                    <?php $i = isset($datas->surat_absah) ? 1 : 0 ?>
                                                    <?php $total = $a + $b + $c + $d + $e + $f + $g + $h + $i ?>
                                                    <?php $percent = number_format($total / 9 * 100, 0) ?>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar" role="progressbar" data-width="{{$percent}}%" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$percent}}%;">{{$percent}}%</div>
                                                    </div>
                                                </td>
                                                <td class="center-action">
                                                    <a href="/ppshb/view/{{ $datas->user->id }}" class="btn btn-icon icon-left btn-warning">
                                                        <i class="far fa-eye"></i>View</a>
                                                    @if ($datas->user->status == "Active")
                                                    <a href="/changepause/{{ $datas->user->id }}" class="btn btn-danger pause">
                                                        <i class="fas fa-pause"></i> Pause</a>
                                                    @else
                                                    <a href="/changeactive/{{ $datas->user->id }}" class="btn btn-success aktif">
                                                        <i class="fas fa-check"></i> Active</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
@section('scriptJS')
<script>
    $(document).ready(function() {
        $('.pause').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');

            Swal.fire({
                title: "Are you sure?",
                text: "Ganti status ke Pause",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak Jadi"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        });
        $('.aktif').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');

            Swal.fire({
                title: "Are you sure?",
                text: "Ganti status ke Active",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak Jadi"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        });
    });
    new DataTable('#example');
</script>
@endsection