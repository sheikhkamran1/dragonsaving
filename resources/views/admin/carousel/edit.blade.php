<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Carousel</h2>
                    <a href="{{ route('carousel.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('carousel.update',$carousel->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ $carousel->title }}">
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Choose Pic For Carosels</label>
                                        <input id="image" class="form-control-file" type="file" name="image">
                                    </div>
                                </div>

                            <div class="col-md-6">
                                <img src="{{ asset($carousel->image) }}" alt="" width="120">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
