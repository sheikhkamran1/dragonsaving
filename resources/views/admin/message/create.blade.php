<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Message</h2>
                    <a href="{{ route('message.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ old('name') }}" placeholder="eg.Ram,Shyam">
                                </div>
                            </div>
                            @error('name')
                                <?php
                                alert()->question('Sorry', 'Menu Name Field is required');
                                ?>
                            @enderror

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Post<span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title"
                                        value="{{ old('title') }}" placeholder="eg.Chairman,CEO etc.">
                                </div>
                            </div>
                            @error('title')
                                <?php
                                alert()->question('Sorry', 'Title Field is required');
                                ?>
                            @enderror

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Content<span class="text-danger">*</span></label>
                                    <textarea id="content" class="form-control summernote" name="content" rows="3"></textarea>
                                </div>
                            </div>
                            @error('content')
                                <?php
                                alert()->question('Sorry', 'Content Name Field is required');
                                ?>
                            @enderror

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Upload Image<span class="text-danger">*</span></label>
                                    <input id="image" class="form-control-file" type="file" name="image">
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
