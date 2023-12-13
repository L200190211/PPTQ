@extends('layouts.admin')
@section('scriptCSS')
    <style>
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: -10px auto 50px;

            .avatar-edit {
                position: absolute;
                top: 100% !important;
                z-index: 1;
                margin: 10px auto 50px;

                input {
                    display: none;

                    +label {
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        margin-bottom: 0;
                        border-radius: 100%;
                        background: #FFFFFF;
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all .2s ease-in-out;

                        &:hover {
                            background: #f1f1f1;
                            border-color: #d6d6d6;
                        }

                        &:after {
                            content: "\f040";
                            font-family: 'FontAwesome';
                            color: #757575;
                            position: absolute;
                            top: 10px;
                            left: 0;
                            right: 0;
                            text-align: center;
                            margin: auto;
                        }
                    }
                }
            }

            .avatar-preview {
                width: 192px;
                height: 192px;
                position: relative;
                border-radius: 0%;
                border: 2px solid #F8F8F8;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);

                >div {
                    width: 100%;
                    height: 100%;
                    border-radius: 0%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                }
            }
        }
    </style>
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('team') }}">Team</a></div>
                    <div class="breadcrumb-item">Add Team</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, {{ substr(Auth::user()->username, 0, strpos(Auth::user()->username, ' ')) }}
                </h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Simple Summernote</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                          <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric">
                              <option>Tech</option>
                              <option>News</option>
                              <option>Political</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                          <div class="col-sm-12 col-md-7">
                            <textarea class="summernote-simple"></textarea>
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                          <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Publish</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
    </div>
@endsection
@section('scriptJS')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
@endsection
