<section class="w-full md:w-2/3 flex flex-col items-center px-3">
@foreach($articles as $id=>$article)
    <article class="flex flex-col shadow my-4">
        <a href="{{ route('articleDetail',['id'=>$id,'categoryId'=>$catId]) }}" class="hover:opacity-75">
            <img src="https://source.unsplash.com/collection/1346951/1000x500?sig={{ $id }}">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="{{ route('category',['id'=>$catId]) }}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $article['category'] }}</a>
            <a href="{{ route('articleDetail',['id'=>$id,'categoryId'=>$catId]) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $article['name'] }}</a>
            <p class="text-sm pb-3">{{ $article['date'] }}</p>
            <a href="{{ route('articleDetail',['id'=>$id,'categoryId'=>$catId]) }}" class="pb-6">{{ $article['anons'] }}</a>
            <a href="{{ route('articleDetail',['id'=>$id,'categoryId'=>$catId]) }}" class="uppercase text-gray-800 hover:text-black">Подробнее <i class="fas fa-arrow-right"></i></a>
        </div>
    </article>
@endforeach
    <div class="flex items-center py-8">
        <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
        <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
        <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
    </div>
</section>
