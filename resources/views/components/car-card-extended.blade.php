@props(['car', 'tags'])

<x-panel class="flex gap-x-6">
    <div>
        <x-stand-logo></x-stand-logo>
    </div>

    <div class="flex flex-col flex-1">
    
        <a href="#" class="self-start text-sm text-gray-500">
            {{$car->stand->name}}
        </a>

        <h3 class="font-bold text-lg group-hover:text-blue-500 transition-colors duration-300">{{ $car->model_name . " - " . $car->brand->name}}</h3>

        <p class="text-sm text-gray-500 mt-auto">{{ $car->price . "€"}}</p>

    </div>
    
    <div class=" flex px-10">
        <img src="https://picsum.photos/seed/10/400/100" class="rounded-xl" alt="">
    </div>

    <div class="grid grid-cols-4">
        @foreach ($car->tags as $tag)
            <x-tag size="small">{{ $tag->name }}</x-tag>        
        @endforeach
    </div>

</x-panel>