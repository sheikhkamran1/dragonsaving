<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Posts</h2>
                    <a href="{{ route('post.create') }}" class="btn btn-outline-primary">Add Post</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Menu</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($post as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->menu->name }}</td>
                                <td><a href="{{ route('post.show', $item->id) }}"><i class="fa fa-eye"
                                            aria-hidden="true"></i></a></td>
                                {{-- <td>{!! Str::words($item->content, 20, '...') !!}</td> --}}
                                <td>
                                    <form action="{{ route('post.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('post.edit', $item->id) }}"
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
