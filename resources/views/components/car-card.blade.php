@props(['tags'])

<x-panel class="bg-[url('https://picsum.photos/seed/10/450/250')] flex flex-col text-center ">    
    
    <div class="self-start text-sm">
        Nome do Stand
    </div>
    
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-800 transition-colors duration-300 text-xl">Modelo do Carro</h3>
    
        <p class="text-sm mt-5">Preço do Carro</p>
    </div>
    
    <div class="flex justify-center mt-auto">
    
        @foreach ($tags as $tag)
            <x-tag>{{$tag->name}}</x-tag>
        @endforeach

    </div>
</x-panel>