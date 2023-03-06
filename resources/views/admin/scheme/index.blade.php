<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Scheme</h2>
                    <a href="{{ route('scheme.create') }}" class="btn btn-outline-primary">Add Scheme</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>slug</th>
                            <th>Menu</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($scheme as $item)
                            <tr>
                                <td class="border border-1">{{ $item->id }}</td>
                                <td class="border border-1">{{ $item->name }}</td>
                                <td class="border border-1">{{ $item->slug }}</td>
                                <td class="border border-1">{{ $item->menu_id }}</td>
                                <td class="border border-1">
                                    <form action="{{ route('scheme.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('scheme.edit', $item->id) }}"
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
