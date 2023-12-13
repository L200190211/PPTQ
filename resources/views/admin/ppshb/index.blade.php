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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="galery">
                                                <?php $i = 1; ?>
                                                @foreach ($data as $datas)
                                                    <tr>
                                                        <th scope="row" style="width: 2%;">{{ $i++ }}</th>
                                                        <td>
                                                            {{-- data null --}}
                                                            @if (is_null($datas->pasphoto))
                                                                <div class="sampul">
                                                                    <div id="prev"
                                                                        style="background-image: url(/img/dummy/ppshb.png);">
                                                                    </div>
                                                                </div>
                                                                {{-- data available --}}
                                                            @elseif (File::exists(public_path('img/berkas/' . $datas->pasphoto)))
                                                                <div class="sampul">
                                                                    <div id="prev"
                                                                        style="background-image: url(/img/berkas/{{ $datas->pasphoto }})">
                                                                    </div>
                                                                </div>
                                                                {{-- file not found --}}
                                                            @else
                                                                <div class="sampul">
                                                                    <div id="prev"
                                                                        style="background-image: url(/img/dummy/ppshb.png);">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td>{{ $datas->user->name }}</td>
                                                        <td>
                                                            {{ isset($datas->user->asal_sekolah) ? $datas->user->asal_sekolah : 'NULL' }}
                                                        </td>
                                                        <td class="center-action">
                                                            <a href="/ppshb/view/{{ $datas->user->id }}"
                                                                class="btn btn-icon icon-left btn-warning">
                                                                <i class="far fa-eye"></i>View</a>
                                                            <a href="/team/editteam/{{-- $datas->id --}}"
                                                                class="btn btn-icon icon-left btn-primary">
                                                                <i class="far fa-edit"></i>Edit</a>
                                                            <a href="/delteam/{{-- $datas->id --}}" class="btn btn-danger">
                                                                <i class="fas fa-times"></i> Delete</a>
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
        new DataTable('#example');
    </script>
@endsection
