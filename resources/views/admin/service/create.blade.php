<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Services</h2>
                    <a href="{{ route('service.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title"
                                        value="{{ old('title') }}">
                                        @error('title')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="scheme_id">Choose Parent Service</label>
                                    <select id="scheme_id" class="form-control" name="scheme_id">
                                        @foreach ($schemes as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('scheme_id')
                                    <div>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="meta_word">Meta Word</label>
                                    <textarea id="meta_word" class="form-control" name="meta_word" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea id="meta_description" class="form-control" name="meta_description" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">service Content</label>
                                    <textarea id="content" class="form-control summernote" name="content" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="featured_image">Featured Image <span class="text-danger">*</span></label>
                                        <input id="featured_image" class="form-control-file" type="file" name="featured_image">
                                    </div>
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
