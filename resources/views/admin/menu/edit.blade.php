<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Alter Menu</h2>
                    <a href="{{ route('menu.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name of the Menu <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ $menu->name }}">
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
                                        value="{{ $menu->menu_order }}">
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
                                        value="{{ $menu->url }}">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
