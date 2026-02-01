<!-- MODAL DE CONTACTO -->
<div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center px-4">
    <div style="background: var(--Gradient-Morados, linear-gradient(0deg, #282D7D 0%, #504696 100%));" class=" rounded-[30px] p-[40px] md:p-[60px] max-w-[500px] w-full relative">
        <!-- Botón cerrar -->
        <button onclick="closeModal()" class="absolute top-[20px] right-[20px] w-[40px] h-[40px] rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 flex items-center justify-center transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <!-- Título -->
        <h2 class="text-white text-[24px] md:text-[28px] font-medium text-center mb-[40px]">Contáctanos y recibe atención de un asesor</h2>

        <!-- Formulario -->
        <form action="<?=ruta('gracias')?>" method="POST" class="space-y-[20px]">
            <input type="hidden" name="landing_id" value="<?= htmlspecialchars($landing_id ?? 0) ?>">

            <!-- Nombre -->
            <input 
                type="text" 
                name="nombre" 
                placeholder="Nombre*"
                required
                class="w-full px-[20px] py-[16px] bg-transparent border-2 border-white rounded-[15px] text-white placeholder-white placeholder-opacity-90 focus:outline-none focus:border-opacity-100 transition-all"
            >

            <!-- Empresa -->
            <input 
                type="text" 
                name="empresa" 
                placeholder="Empresa*"
                required
                class="w-full px-[20px] py-[16px] bg-transparent border-2 border-white rounded-[15px] text-white placeholder-white placeholder-opacity-90 focus:outline-none focus:border-opacity-100 transition-all"
            >

            <!-- Número -->
            <input 
                type="tel" 
                name="tel" 
                placeholder="Número*"
                required
                pattern="[0-9]{10}"
                maxlength="10"
                title="Ingresa un teléfono de 10 dígitos"
                class="w-full px-[20px] py-[16px] bg-transparent border-2 border-white rounded-[15px] text-white placeholder-white placeholder-opacity-90 focus:outline-none focus:border-opacity-100 transition-all"
            >

            <!-- Mail -->
            <input 
                type="email" 
                name="email" 
                placeholder="Mail*"
                required
                class="w-full px-[20px] py-[16px] bg-transparent border-2 border-white rounded-[15px] text-white placeholder-white placeholder-opacity-90 focus:outline-none focus:border-opacity-100 transition-all"
            >

            <!-- Servicios -->
            <select 
                name="servicio"
                class="w-full px-[20px] py-[16px] bg-transparent border-2 border-white rounded-[15px] text-white focus:outline-none focus:border-opacity-100 transition-all appearance-none cursor-pointer"
                style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27white%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em;"
            >
                <option value="" class="text-[#504696]">Servicios*</option>
                <option value="1" class="text-[#504696]">Servicios de Automatización</option>
                <option value="2" class="text-[#504696]">Servicios Eléctricos</option>
                <option value="3" class="text-[#504696]">Servicios Mecánicos</option>
            </select>

            <!-- Botón Enviar -->
            <div class="flex justify-center pt-[20px]">
                <button 
                    type="submit"
                    class="bg-[#504696] text-white font-semibold text-[18px] px-[60px] py-[14px] rounded-full hover:bg-white hover:text-[#504696] transition-all border-2 border-[#504696]"
                >
                    ¡Enviar!
                </button>
            </div>
        </form>
    </div>
</div>

<script src="<?=importAsset('scripts/popup-form.js')?>"></script>
