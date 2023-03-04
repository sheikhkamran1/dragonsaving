<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Notice</h2>
                    <a href="{{ route('notice.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('notice.update',$notice->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input id="subject" class="form-control" type="text" name="subject" value="{{ $notice->subject }}">
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Choose Image</label>
                                        <input id="image" class="form-control-image" type="file" name="image">
                                    </div>
                                </div>

                            <div class="col-md-6">
                                <img src="{{ asset($notice->image) }}" alt="" width="120">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
