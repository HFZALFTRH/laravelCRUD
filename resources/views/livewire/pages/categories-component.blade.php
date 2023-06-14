<div>
    <a href="{{route('categories.create')}}" class="btn btn-success">create a new</a>
    <div class="mt-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div class="col-lg-12 nt-3">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>name</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allCategories as $item)
                        <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $item->name }}</td>

                          <td class="d-flex gap-1">
                            <a href="#" wire:click.prevant="{{route('categories.update', $item->id)}}"   class="btn btn-yellow">Edit</a>
                            <a href="#" class="btn btn-red">Delete</a>
                          </td>
                        </tr>
                        <tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>
