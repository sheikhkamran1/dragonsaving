<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Events</h2>
                    <a href="{{ route('event.create') }}" class="btn btn-outline-primary">Add Event</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            {{-- <th>Content</th> --}}
                            <th>Action</th>
                        </tr>

                        @foreach ($event as $item)
                            <tr>
                                <td class="border border-1">{{ $item->id }}</td>
                                <td class="border border-1"><img src="{{ asset($item->image )}}" alt="" width="140"></td>
                                <td class="border border-1">{{ $item->title }}</td>
                                {{-- <td class="border border-1"><a href="{{ route('event.show', $item->id) }}"><i class="fa fa-eye"
                                            aria-hidden="true"></i></a></td>
                                <td class="border border-1">{!! Str::words($item->description, 20, '...') !!}</td> --}}
                                <td class="border border-1">
                                    <form action="{{ route('event.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('event.edit', $item->id) }}"
                                            class="badge badge-primary">Edit</a>
                                            <a href="{{ route('event.show', $item->id) }}" class="badge badge-success">Preview</a>
                                        <button type="submit" class="badge badge-danger text-light">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>
