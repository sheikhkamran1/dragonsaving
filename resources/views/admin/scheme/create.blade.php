<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Scheme</h2>
                    <a href="{{ route('scheme.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('scheme.store') }}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title"
                                        value="{{ old('title') }}">
                                </div>
                            </div>
                            @error('title')
                                <?php
                                alert()->question('Sorry', 'Name Field is required');
                                ?>
                            @enderror

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="menu_id">Choose Parent Menu</label>
                                    <select id="menu_id" class="form-control" name="menu_id">
                                        @foreach ($menu as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('menu_id')
                                <?php
                                alert()->question('Sorry', 'Menu Field is required');
                                ?>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
