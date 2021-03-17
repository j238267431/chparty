@extends('layouts.main')
@section('content')
    <img src="{{asset('img/decor/products/1.png')}}" alt="">
    <div style="display: flex" class="container_ch">
        <div>
            <h1 class="product_header">Все услуги</h1>
                @forelse($categories as $category)
                    <a href="{{route('products.show', ['category' => $category->category_name])}}"><li class="product_li">{{$category->category_name}}</li></a>
                @empty
                    категорий нет
                @endforelse
            </ul>
        </div>
        <div>
            <div style="margin-left: 100px;">
                @forelse($categories as $category)
                    <div>
                        <h1 class="product_header">{{$category->category_name}}</h1>
                        <div class="sector_three">
                            <?php $count=1; ?>
                            @foreach($products as $product)
                                @if($product->category_name == $category->category_name && $count <= 3)
                                    <?php $count++; ?>
                                    <a href="#">
                                        <div style="margin-right: 32px" class="sector_three_block">
                                            <div><img style="width: 236px; height: 168px;" src="{{\Illuminate\Support\Facades\Storage::disk('uploads')->url($product->images)}}" alt=""></div>
                                            <div class="sector_three_header">{{$product->category_name}}</div>
                                            <div class="sector_three_text">{{$product->description}}</div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @empty
                            предложений нет
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@stop
