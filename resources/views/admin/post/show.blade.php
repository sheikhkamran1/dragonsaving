<x-admin-template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Content</h2>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-template>
