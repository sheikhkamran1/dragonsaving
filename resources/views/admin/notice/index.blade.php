<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Notice</h2>
                    <a href="{{ route('notice.create') }}" class="btn btn-outline-primary">Add Notice</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($notice as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset($item->image) }}" class="img-fluid"
                                            alt="{{ $item->subject }}">
                                        <h6 class="mt-4">{{ $item->subject }}</h6>
                                        <form action="{{ route('notice.destroy', $item->id) }}" method="post">
                                            <a href="{{ route('notice.edit', $item->id) }}"
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
