<x-admin-template>
    <section>
      <div class="container">
          <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                  <h2>Offers</h2>
                  <a href="{{ route('offers.create') }}" class="btn btn-outline-primary">Add Offers</a>
              </div>

              <div class="card-body">
                  <div class="row">
                      @foreach ($offers as $item )
                          <div class="col-md-4">
                              <div class="card">
                                  <div class="card-body">
                                      <img src="{{ asset($item->featured_image) }}" class="img-fluid" alt="{{ $item->title }}">
                                      <h6 class="mt-4">{{ $item->title }}</h6>
                                      <form action="{{ route('offers.destroy', $item->id) }}" method="post">
                                          @csrf
                                          @method('delete')
                                          <a href="{{ route('offers.edit', $item->id) }}"
                                              class="badge badge-primary">Edit</a>
                                          <button type="submit" class="badge badge-danger text-light">Delete</button>
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
