@extends('template')

@section('content')
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <div class="w-full grid grid-cols-3 gap-3">
        @foreach($categories as $id=>$cat)
            <article class="flex flex-col shadow my-4">
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="{{ route('category',['id'=>$id]) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $cat }}</a>
                </div>
            </article>
        @endforeach
        </div>
    </section>

@endsection

@push('h1')
    <h1 class="w-full mb-10 text-3xl font-bold">Категории</h1>
@endpush
