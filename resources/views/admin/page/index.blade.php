<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>pages</h2>
                    <a href="{{ route('page.create') }}" class="btn btn-outline-primary">Add page</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($page as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->menu->name }}</td>
                                <td><a href="{{ route('page.show', $item->id) }}"><i class="fa fa-eye"
                                            aria-hidden="true"></i></a></td>
                                {{-- <td>{!! Str::words($item->content, 20, '...') !!}</td> --}}
                                <td>
                                    <form action="{{ route('page.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('page.edit', $item->id) }}"
                                            class="badge badge-primary">Edit</a>
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
