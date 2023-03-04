<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Message</h2>
                    <a href="{{ route('message.create') }}" class="btn btn-outline-primary">Add Message</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($message as $item )
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body align-items-center">
                                        <img src="{{ asset($item->image) }}" class="img-fluid" alt="{{ $item->title }}" width="120">
                                        <h6 class="mt-4">{{ $item->name }}({{ $item->title }})</span></h6><hr>
                                        <p>{!! $item->content !!}</p>
                                        <form action="{{ route('message.destroy',$item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        <a href="{{ route('message.edit',$item->id) }}" class="badge badge-primary">Edit</a>
                                            <button class="badge badge-danger">Delete</button>
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
