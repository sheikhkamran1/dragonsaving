<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Gallery</h2>
                    <a href="{{ route('gallery.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">Url <span class="text-danger">(Optional)</span></label>
                                    <input id="url" class="form-control" type="text" name="url" value="{{ old('url') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="featured_image">Featured Image <span class="text-danger">*</span></label>
                                    <input id="featured_image" class="form-control-file" type="file" name="featured_image">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
