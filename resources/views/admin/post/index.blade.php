<x-admin-template>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2>Posts</h2>
                    <a href="{{ route('post.create') }}" class="btn btn-outline-primary">Add Post</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped datatables">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Menu</th>
                                {{-- <th>Content</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($post as $item)
                                <tr>
                                    <td class="border border-1">{{ $item->id }}</td>
                                    <td class="border border-1">{{ $item->title }}</td>
                                    <td class="border border-1">{{ $item->menu->name }}</td>
                                    {{-- <td class="border border-1"><a href="{{ route('post.show', $item->id) }}"><i class="fa fa-eye"
                                        aria-hidden="true"></i></a></td> --}}
                                    {{-- <td class="border border-1">{!! Str::words($item->content, 20, '...') !!}</td> --}}
                                    <td class="border border-1">
                                        <form action="{{ route('post.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('post.edit', $item->id) }}"
                                                class="badge badge-primary">Edit</a>
                                            <a href="{{ route('service.show', $item->id) }}"
                                                class="badge badge-success">Preview</a>
                                            <button type="submit" class="badge badge-danger text-light">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-admin-template>


{{--
<div class="card-body">
    <table class="table table-striped" id="table-2">
        <thead>
          <tr>
            <th class="text-center pt-3">
              <div class="custom-checkbox custom-checkbox-table custom-control">
                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                  class="custom-control-input" id="checkbox-all">
                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
              </div>
            </th>
            <th>Task Name</th>
            <th>Progress</th>
            <th>Members</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-1" class="text-center pt-2">
              <div class="custom-checkbox custom-control">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                  id="checkbox-1">
                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
              </div>
            </td>
            <td class="border border-1">Create a mobile app</td>
            <td class="border border-1" class="align-middle">
              <div class="progress progress-xs">
                <div class="progress-bar width-per-70"></div>
              </div>
            </td>
            <td class="border border-1">
              <img alt="image" src="assets/img/users/user-5.png" width="35">
            </td>
            <td class="border border-1">2018-01-20</td>
            <td class="border border-1">
              <div class="badge badge-success badge-shadow">Completed</div>
            </td>
            <td class="border border-1"><a href="#" class="btn btn-primary">Detail</a></td>
          </tr>
          <tr>
            <td class="border border-1" class="text-center pt-2">
              <div class="custom-checkbox custom-control">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                  id="checkbox-2">
                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
              </div>
            </td>
            <td class="border border-1">Redesign homepage</td>
            <td class="border border-1" class="align-middle">
              <div class="progress progress-xs">
                <div class="progress-bar width-per-60"></div>
              </div>
            </td>
            <td class="border border-1">
              <img alt="image" src="assets/img/users/user-1.png" width="35">
              <img alt="image" src="assets/img/users/user-3.png" width="35">
              <img alt="image" src="assets/img/users/user-4.png" width="35">
            </td>
            <td class="border border-1">2018-04-10</td>
            <td class="border border-1">
              <div class="badge badge-info badge-shadow">Todo</div>
            </td>
            <td class="border border-1"><a href="#" class="btn btn-primary">Detail</a></td>
          </tr>
          <tr>
            <td class="border border-1" class="text-center pt-2">
              <div class="custom-checkbox custom-control">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                  id="checkbox-3">
                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
              </div>
            </td>
            <td class="border border-1">Backup database</td>
            <td class="border border-1" class="align-middle">
              <div class="progress progress-xs">
                <div class="progress-bar bg-warning width-per-70"></div>
              </div>
            </td>
            <td class="border border-1">
              <img alt="image" src="assets/img/users/user-1.png" width="35">
              <img alt="image" src="assets/img/users/user-2.png" width="35">
            </td>
            <td class="border border-1">2018-01-29</td>
            <td class="border border-1">
              <div class="badge badge-warning badge-shadow">In Progress</div>
            </td>
            <td class="border border-1"><a href="#" class="btn btn-primary">Detail</a></td>
          </tr>
          <tr>
            <td class="border border-1" class="text-center pt-2">
              <div class="custom-checkbox custom-control">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                  id="checkbox-4">
                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
              </div>
            </td>
            <td class="border border-1">Input data</td>
            <td class="border border-1" class="align-middle">
              <div class="progress progress-xs">
                <div class="progress-bar bg-success width-per-40"></div>
              </div>
            </td>
            <td>
              <img alt="image" src="assets/img/users/user-2.png" width="35">
              <img alt="image" src="assets/img/users/user-5.png" width="35">
              <img alt="image" src="assets/img/users/user-4.png" width="35">
              <img alt="image" src="assets/img/users/user-1.png" width="35">
            </td>
            <td>2018-01-16</td>
            <td>
              <div class="badge badge-success badge-shadow">Completed</div>
            </td>
            <td><a href="#" class="btn btn-primary">Detail</a></td>
          </tr>
        </tbody>
      </table>
</div> --}}
