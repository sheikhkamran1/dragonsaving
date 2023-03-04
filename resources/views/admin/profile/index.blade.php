<x-admin-template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if (!empty($profile))
                        <h3 class=" mx-4 my-1">profile</h3>
                        @else
                        <a href="{{ route('profile.create') }}" class="btn btn-primary m-1">Add profile</a>
                        @endif
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Reg no.</th>
                                <th>Action</th>
                            </tr>

                            @if (!empty($profile))
                            <tr>
                                <td><img src=" {{ asset($profile->logo) }} " width="32" alt=""></td>
                                <td> {{ $profile->name }} </td>
                                <td> {{ $profile->address }} </td>
                                <td> {{ $profile->contact_1 }}/{{ $profile->contact_2 }} </td>
                                <td> {{ $profile->email }} </td>
                                <td> {{ $profile->reg_no }} </td>
                                <td>
                                    <form action="{{ route('profile.destroy', $profile->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('profile.edit', $profile->id) }}"
                                            class="btn btn-primary m-2">Edit</a>
                                        <button type="submit" class="btn btn-danger text-light">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-template>
