<div wire:init="loadPosts">
    @if (count($products))
    
    <div class="glider-contain">
        <ul class="glider-{{$category->id}}">
            @foreach ($products as $product)
                <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                    <article>

                        <figure>
                            <img class="h-48 w-full object-cover object-center rounded-t-lg" src="{{Storage::url($product->images->first()->url)}}" alt="">
                        </figure>

                        <div class="py-4 px-4">
                            <h1 class="text-lg font-semibold">
                                <a href="{{route('products.show', $product)}}">
                                    {{Str::limit($product->name, 20)}}
                                </a>
                            </h1>
                            <p class="font-bold text-trueGray-700">U$S {{ $product->price }}</p>
                        </div>

                    </article>
                </li>
            @endforeach
        </ul>
      
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots mt-2"></div>
      </div>

    @else
    <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-indigo-500"></div>
    </div>	
    @endif

    </div>
