@extends('template')

@section('content')
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="{{ route('category',['id'=>$catId]) }}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $article['category'] }}</a>
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $article['name'] }}</p>
                <p class="text-sm pb-8">
                    {{ $article['date'] }}
                </p>
                <p class="pb-3">{{ $article['descr'] }}</p>
            </div>
        </article>

        <div class="w-full flex pt-6">
            @if($id != 0)
            @php $prevId = $id - 1; @endphp
            <a href="{{ route('articleDetail',['id'=>$prevId,'categoryId'=>$catId]) }}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Пред.</p>
            </a>
            @endif
            @php $nextId = $id + 1; @endphp
            <a href="{{ route('articleDetail',['id'=>$nextId,'categoryId'=>$catId]) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">След. <i class="fas fa-arrow-right pl-1"></i></p>
            </a>
        </div>

    </section>
@endsection

@push('h1')
    <h1 class="w-full mb-10 text-3xl font-bold">{{ $article['name'] }}</h1>
@endpush
