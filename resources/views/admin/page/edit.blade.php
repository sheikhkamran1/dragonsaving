<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Pages</h2>
                    <a href="{{ route('page.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('page.update',$page->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Title<span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ $page->name }}">
                                </div>
                            </div>
                            @error('name')
                                <?php
                                alert()->question('Sorry', 'Name Field is required');
                                ?>
                            @enderror

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="menu_id">Choose Parent Menu</label>
                                    <select id="menu_id" class="form-control" name="menu_id">
                                        @foreach ($menu as $item)
                                            <option value="{{ $item->id }}"{{ $item->id == $page->menu_id ? 'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('menu_id')
                                <?php
                                alert()->question('Sorry', 'Menu Field is required');
                                ?>
                            @enderror


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="meta_word">Meta Word</label>
                                    <textarea id="meta_word" class="form-control" name="meta_word" rows="3">{{ $page->meta_word }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea id="meta_description" class="form-control" name="meta_description" rows="10">{{ $page->meta_description }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Page Content</label>
                                    <textarea id="content" class="form-control summernote" name="content" rows="10">{{ $page->content }}</textarea>
                                </div>
                            </div>
                            @error('content')
                                <?php
                                alert()->question('Sorry', 'Content Field is required');
                                ?>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
