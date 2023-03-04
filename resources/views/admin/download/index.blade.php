<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Download</h2>
                    <a href="{{ route('download.create') }}" class="btn btn-outline-primary">Add Downloads</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($download as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset($item->file) }}" class="img-fluid"
                                            alt="{{ $item->subject }}">
                                        <h6 class="mt-4">{{ $item->subject }}</h6>
                                        <form action="{{ route('download.destroy', $item->id) }}" method="post">
                                            <a href="{{ route('download.edit', $item->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            @csrf
                                            @method('delete')
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
