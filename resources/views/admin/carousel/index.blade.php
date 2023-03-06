<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Carousels</h2>
                    <a href="{{ route('carousel.create') }}" class="btn btn-outline-primary">Add Carousels</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($carousel as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset($item->image) }}" class="img-fluid"
                                            alt="{{ $item->title }}">
                                        <h6 class="mt-4">{{ $item->title }}</h6>
                                        <form action="{{ route('carousel.destroy', $item->id) }}" method="post">

                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('carousel.edit', $item->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
