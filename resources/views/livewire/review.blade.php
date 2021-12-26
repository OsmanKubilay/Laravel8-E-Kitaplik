<div>
    @if (session()->has('success '))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

        <form wire:submit.prevent="store">
            <div class="row mb-2">
                <div class="col-md-12 form-group">
                    <input wire:model="subject" type="text" class="form-control" placeholder="Subject">
                </div>
            </div>


            <div class="row mb-2">
                <div class="col form-group">
                    <textarea wire:model="review" class="form-control" placeholder="Your Review*"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Save"></button>
        </form>

</div>
