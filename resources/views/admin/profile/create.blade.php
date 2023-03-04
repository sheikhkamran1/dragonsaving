<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Company Profile</h2>
                    <a href="{{ route('profile.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City <span class="text-danger">*</span></label>
                                    <input id="city" class="form-control" type="text" name="city" value="{{ old('city') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">Street <span class="text-danger">*</span></label>
                                    <input id="street" class="form-control" type="text" name="street" value="{{ old('street') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_1">contact_1 <span class="text-danger">*</span></label>
                                    <input id="contact_1" class="form-control" type="tel" name="contact_1" value="{{ old('contact_1') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_2">contact_2 <span class="text-danger">(Optional)</span></label>
                                    <input id="contact_2" class="form-control" type="tel" name="contact_2" value="{{ old('contact_2') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">email <span class="text-danger">*</span></label>
                                    <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reg_no">reg_no <span class="text-danger">(Optional)</span></label>
                                    <input id="reg_no" class="form-control" type="text" name="reg_no" value="{{ old('reg_no') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Logo<span class="text-danger">(Optional)</span></label>
                                    <input id="logo" class="form-control-file" type="file" name="logo">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="aniversary_image">Aniversary Image<span class="text-danger">*</span></label>
                                    <input id="aniversary_image" class="form-control-file" type="file" name="aniversary_image">
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
