<x-layout>
    <div class="space-y-10">
        
        <section class="text-center pt-5">
            <h1 class="font-bold text-4xl">
                BORA LA COMPRAR UM CHAÇO
            </h1>

            <form action="" method="POST" class="mt-6">
                <input type="text" name="" id="" class="rounded-xl bg-white/10 border-white/10 px-5 py-4 w-full max-w-xl" placeholder="MERCEDES CLASS S AMG 4MATIC deixa estar é mt caro...">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Carrões vroom vroom 🚗🌠⚡</x-section-heading>
            
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                
                <x-car-card :$tags/>

                <x-car-card :$tags/>

                <x-car-card :$tags/>
            </div>    
        </section>
    
        <section>
    
            <x-section-heading>Marcas</x-section-heading>

            <div class="mt-6">

                @foreach ($brands as $brand)
                    <x-brand-tag :$brand size="small"/>                
                @endforeach

            </div>

        </section>
    
        <section>
            <x-section-heading>Acabadinhos de sair do forno</x-section-heading>

           <div class="mt-6 space-y-6">
                @foreach ($cars as $car)
                    <x-car-card-extended :$car :$tags></x-car-card-extended>                
                @endforeach
            </div>

        </section>
    </div>
</x-layout>