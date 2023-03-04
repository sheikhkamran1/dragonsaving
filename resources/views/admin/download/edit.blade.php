<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Alter Download</h2>
                    <a href="{{ route('download.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('download.update',$download->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input id="subject" class="form-control" type="text" name="subject" value="{{ $download->subject }}">
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Choose Pic For Carosels</label>
                                        <input id="file" class="form-control-file" type="file" name="file">
                                    </div>
                                </div>

                            <div class="col-md-6">
                                <img src="{{ asset($download->file) }}" alt="" width="120">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
