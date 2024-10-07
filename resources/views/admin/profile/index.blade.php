@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>create profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Create profile</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create profile</h2>
      <p class="section-lead">
        On this page you can create a new post and fill in all fields.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>profile</h4>
            </div>

            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-lable">Avatar</label>
                            <input type="file" name="image" id="image-upload">
                        </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div id="image-preview-2" class="image-preview">
                                <label for="image-upload-2" id="image-lable-2">Banner</label>
                                <input type="file" name="image" id="image-upload-2">
                            </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
<script>
    $.uploadPreview({
  input_field: "#image-upload",   // Default: .image-upload
  preview_box: "#image-preview",  // Default: .image-preview
  label_field: "#image-label",    // Default: .image-label
  label_default: "Choose File",   // Default: Choose File
  label_selected: "Change File",  // Default: Change File
  no_label: false,                // Default: false
  success_callback: null          // Default: null
});
  </script>

<script>
    $.uploadPreview({
  input_field: "#image-upload-2",   // Default: .image-upload
  preview_box: "#image-preview-2",  // Default: .image-preview
  label_field: "#image-label-2",    // Default: .image-label
  label_default: "Choose File",   // Default: Choose File
  label_selected: "Change File",  // Default: Change File
  no_label: false,                // Default: false
  success_callback: null          // Default: null
});
  </script>
@endpush
