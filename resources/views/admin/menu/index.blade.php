<x-admin-template>
        <section>
            <div class="container">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h2>Menus</h2>
                        <a href="{{ route('menu.create') }}" class="btn btn-outline-primary">Add menu</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($menu as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ $item->url ? $item->url  : 'You Have No Link'}}</td>
                                    <td>
                                        <form action="{{ route('menu.destroy',$item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        <a href="{{ route('menu.edit',$item->id) }}" class="badge badge-primary">Edit</a>
                                            <button type="submit" class="badge btn bg-danger text-light">Delete</button>
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
