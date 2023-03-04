<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Alter Profile</h2>
                    <a href="{{ route('profile.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('profile.update',$profile->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ $profile->name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City <span class="text-danger">*</span></label>
                                    <input id="city" class="form-control" type="text" name="city" value="{{ $profile->city }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">Street <span class="text-danger">*</span></label>
                                    <input id="street" class="form-control" type="text" name="street" value="{{ $profile->street }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_1">contact_1 <span class="text-danger">*</span></label>
                                    <input id="contact_1" class="form-control" type="text" name="contact_1" value="{{ $profile->contact_1 }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_2">contact_2 <span class="text-danger">(Optional)</span></label>
                                    <input id="contact_2" class="form-control" type="text" name="contact_2" value="{{ $profile->contact_2 }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">email <span class="text-danger">*</span></label>
                                    <input id="email" class="form-control" type="text" name="email" value="{{ $profile->email }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reg_no">reg_no <span class="text-danger">(Optional)</span></label>
                                    <input id="reg_no" class="form-control" type="text" name="reg_no" value="{{ $profile->reg_no }}">
                                </div>
                            </div><br>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Logo<span class="text-danger">(Optional)</span></label>
                                    <input id="logo" class="form-control-file" type="file" name="logo">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="{{ asset($profile->logo) }}" alt="" width="100">
                            </div><hr>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="aniversary_image">Aniversary Image<span class="text-danger">*</span></label>
                                    <input id="aniversary_image" class="form-control-file" type="file" name="aniversary_image">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="{{ asset($profile->aniversary_image) }}" alt="" width="100">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
