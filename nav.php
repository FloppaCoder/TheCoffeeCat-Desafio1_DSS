<nav class="bg-[#98694d] p-4">
    <div class="flex justify-between items-center">
        <div class="flex items-center text-zinc-50 font-bold text-2xl">
            <img src="img/logoSinFondo.png" alt="loguito" class="w-[3.5rem] mr-2">
            TheCoffeeCat
        </div>
        
        <!-- Menú en escritorio -->
        <ul class="hidden md:flex flex-row items-center gap-4 text-lg text-zinc-50">
            <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md cursor-pointer">Inicio</li>
            <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md cursor-pointer">Catálogo</li>
            <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md cursor-pointer">Contacto</li>
        </ul>
        
        <!-- Botón del menú hamburguesa -->
        <button id="menu-toggle" class="md:hidden text-zinc-50 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
    
    <!-- Menú desplegable en móviles -->
    <ul id="menu" class="hidden flex flex-col items-center gap-4 text-lg text-zinc-50 bg-[#98694d] w-full mt-2 py-2 md:hidden">
        <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md cursor-pointer">Inicio</li>
        <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md cursor-pointer">Catálogo</li>
        <li class="hover:bg-[#553d3a] px-3 py-2 rounded-md cursor-pointer">Contacto</li>
    </ul>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>
