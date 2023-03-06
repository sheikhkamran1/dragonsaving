<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Services</h2>
                    <a href="{{ route('service.create') }}" class="btn btn-outline-primary">Add Service</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>scheme</th>
                            {{-- <th>Content</th> --}}
                            <th>Action</th>
                        </tr>

                        @foreach ($service as $item)
                            <tr>
                                <td class="border border-1">{{ $item->id }}</td>
                                <td class="border border-1">{{ $item->title }}</td>
                                <td class="border border-1">{{ $item->scheme->title }}</td>
                                <td class="border border-1"><a href="{{ route('service.show', $item->id) }}"><i
                                            class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td class="border border-1">
                                    <form action="{{ route('service.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('service.edit', $item->id) }}"
                                            class="badge badge-primary">Edit</a>
                                        <a href="{{ route('service.show', $item->id) }}"
                                            class="badge badge-success">Preview</a>
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
