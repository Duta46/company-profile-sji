@extends('layouts.app')
@section('title', 'Edit Testimoni')
@section('page-title')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0">
            Edit Testimoni
        </h1>
    </div>
@endsection
@push('styles')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="card card-docs flex-row-fluid mb-2">
        <div class="card-body fs-6 text-gray-700">
            <form action="{{ route('Testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body p-9">
                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="profile" class="fs-6 fw-bold mt-2 mb-3">Profile User</label>
                        </div>
                        <div class="col-lg">
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 h-15"
                                id="file_input" name="profile" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPG(MAX.
                                2MB).</p>
                            @if ($testimoni->profile)
                                <p>Current Image:</p>
                                <img src="{{ asset('storage/profile/' . $testimoni->profile) }}" alt="Current Image"
                                    width="20%" height="20%">
                            @else
                                <p>No Image Uploaded.</p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="name" class="fs-6 fw-bold mt-2 mb-3">Nama User</label>
                        </div>
                        <div class="col-lg">
                            <input type="text" name="name" class="form-control" value="{{ $testimoni->name }}"
                                placeholder="Input nama testimoni" />
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="description" class="fs-6 fw-bold mt-2 mb-3">Deskripsi</label>
                        </div>
                        <div class="col-lg">
                            <textarea name="description" id="description" class="form-control" value="{{ $testimoni->description }}"
                                placeholder="Input Deskripsi">
@if (old('description'))
{{ old('description') }}
@elseif(isset($testimoni))
{{ $testimoni->description }}
@endif
</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function initTinyMCE(selector) {
            tinymce.init({
                selector: selector,
                forced_root_block: 'p',
                force_br_newlines: true,
                formats: {
                    underline: {
                        inline: 'u'
                    } // Mengizinkan garis bawah
                }
            });
        }
        initTinyMCE('textarea#description');
    </script>
@endpush
