<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif



    <form class="review-form" wire:submit.prevent="store"  style="float: right;">
        @csrf
        <span>
            <input required wire:model="subject" type="text" placeholder="Subject"/>
            @error('subject') <span class="text-danger">{{$message}}</span>@enderror</span>
        <textarea required class="input" wire:model="review" placeholder="Your review" ></textarea>
        @error('subject') <span class="text-danger">{{$message}}</span>@enderror

        @auth
            <input re type="submit" class="btn btn-success" value="Gönder"></input>
        @else
            <a href="/login" class="primary-btn">Yorum yapmak için nesaj yaz</a>
        @endauth

    </form>
</div>
