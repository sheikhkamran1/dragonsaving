<x-admin-template>
      <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Gallery</h2>
                    <a href="{{ route('gallery.create') }}" class="btn btn-outline-primary">Add gallery</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($gallery as $item )
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset($item->featured_image) }}" class="img-fluid" alt="{{ $item->title }}">
                                        <h6 class="mt-4">{{ $item->name }}</h6>
                                        <form action="{{ route('gallery.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('gallery.edit', $item->id) }}"
                                                class="badge badge-primary">Edit</a>
                                            <button type="submit" class="badge badge-danger text-light">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin-template>
