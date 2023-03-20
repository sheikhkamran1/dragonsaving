<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Offers</h2>
                    <a href="{{ route('offers.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('offers.update', $offers->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title"
                                        value="{{ $offers->title }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="featured_image">Featured Image <span
                                            class="text-danger">*</span></label>
                                    <input id="featured_image" class="form-control-file" type="file"
                                        name="featured_image">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="{{ asset($offers->featured_image) }}" alt="" width="200">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
