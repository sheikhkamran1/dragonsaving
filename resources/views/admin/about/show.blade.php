<x-admin-template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Content</h2>
                    <a href="{{ route('about.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $about->title }}</h5>
                    <p class="card-text">{!!  $about->description  !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-template>
