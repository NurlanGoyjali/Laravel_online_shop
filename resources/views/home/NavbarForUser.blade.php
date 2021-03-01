<div class="panel panel-default">
    <div class="panel-heading">

        <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('review',Auth::id())}}" >Yorumlarım</a></h4>
        @if(Auth::user()->product_id != 2)

            <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.products',)}}" >Ürünlerim</a></h4>
            <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.product.create')}}" >Ürün Ekle</a></h4>

        @endif


        <h4 class="panel-title" style=" margin: 10% 0; padding: 3%; background:#7512;" ><a style="padding: 7%; background:#7512;"href="{{route('user.favory')}}" >Favorilerim</a></h4>



    </div>
</div>
