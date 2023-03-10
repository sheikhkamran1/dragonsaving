<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Menu</h2>
                    <a href="{{ route('menu.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('menu.store') }}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name Of The Menu <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ old('name') }}">
                                </div>
                            </div>
                            @error('name')
                                <?php
                                alert()->question('Sorry', 'Name Field is required');
                                ?>
                            @enderror

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_order">Menu Order <span class="text-danger">*</span></label>
                                    <input id="menu_order" class="form-control" type="number" name="menu_order"
                                        value="{{ old('menu_order') }}">
                                </div>
                            </div>
                            @error('menu_order')
                                <?php
                                alert()->error('Sorry', 'menu_order Field is required');
                                ?>
                            @enderror

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">Url <span class="text-danger">(Optional)</span></label>
                                    <input id="url" class="form-control" type="text" name="url"
                                        value="{{ old('url') }}">
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
