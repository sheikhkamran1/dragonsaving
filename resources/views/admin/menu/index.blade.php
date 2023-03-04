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
                                <th>Menu Order</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($menu as $item)
                                <tr>
                                    <td class="border border-1">{{ $item->id }}</td>
                                    <td class="border border-1">{{ $item->name }}</td>
                                    <td class="border border-1">{{ $item->menu_order }}</td>
                                    <td class="border border-1 w-75">{{ $item->url ? $item->url  : 'You Have No Link'}}</td>
                                    <td class="border border-1 w-25">
                                        <form action="{{ route('menu.destroy',$item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        <a href="{{ route('menu.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="submit" class="btn bg-danger btn-sm text-light">Delete</button>
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
