<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Message</h2>
                    <a href="{{ route('message.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('message.update',$message->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ $message->name }}">
                                </div>
                            </div>
                            @error('name')
                                <?php
                                alert()->question('Sorry', 'Menu Name Field is required');
                                ?>
                            @enderror

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ $message->title }}">
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
                                    <textarea id="content" class="form-control summernote" name="content" rows="3">{{ $message->content }}</textarea>
                                </div>
                            </div>
                            @error('content')
                                <?php
                                alert()->question('Sorry', 'Content Name Field is required');
                                ?>
                            @enderror

                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>
                          </div>

                            <div class="col-md-6">
                            <img src="{{ asset($message->image) }}" alt="" width="120">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
