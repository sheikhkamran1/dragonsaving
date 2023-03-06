<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Abouts</h2>
                    <a href="{{ route('about.create') }}" class="btn btn-outline-primary">Add About</a>
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

                        @foreach ($about as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ asset($item->image)}}" alt="" width="120"></td>
                                <td>{{ $item->title }}</td>
                                {{-- <td><a href="{{ route('about.show', $item->id) }}"><i class="fa fa-eye"
                                            aria-hidden="true"></i></a></td> --}}
                                {{-- <td>{!! Str::words($item->content, 20, '...') !!}</td> --}}
                                <td>
                                    <form action="{{ route('about.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('about.edit', $item->id) }}"
                                            class="badge badge-primary">Edit</a>
                                            <a href="{{ route('about.show', $item->id) }}" class="badge badge-success">Preview</a>
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
