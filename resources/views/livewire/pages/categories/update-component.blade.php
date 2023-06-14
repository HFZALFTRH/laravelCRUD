<div>
    <div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <form wire:submit="update" autocomplete="off">
                <div class="mb-3">
                    <label class="from-label">name categories</label>
                        <input type="text" wire:model="name" class="from-control" name="example-text-input">
                    @error('name')
                    <span class="error">{{ $message }}</span>
                    @enderror

                    </div>
                    <button class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>


</div>
