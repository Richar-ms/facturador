<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';


const form = useForm({
    nombres: '',
    pri_ape: '',
    seg_ape: '',
    docu_num: ''
})

const page = usePage()
//const success = computed(() => page.props.flash.success) 
//console.log('success: ',success);


const createCliente = () => {
    //console.log('valores clientes:', form);

    form.post(route('cliente.store'), {
        onSuccess: (response) => {
            console.log('Respondiendo desde el lado del servidor',response);
        }
    })
}

</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12 bg-gray-100 min-h-screen">
            <div class="mx-auto max-w-xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-lg rounded-lg p-8">

                    <!-- Botón de regreso -->
                    <div class="mb-6">
                        <Link 
                            :href="route('cliente.index')" 
                            class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded transition"
                        >
                            ← Volver al inicio
                        </Link>
                    </div>

                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Registrar Cliente</h2>

                    <form @submit.prevent="createCliente" class="space-y-6">
                        <!-- Campos del formulario (igual que antes) -->
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="nombres">Nombres</label>
                            <input 
                                type="text"
                                id="nombres"
                                v-model="form.nombres"
                                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                required
                                autocomplete="off"
                            >
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="pri_ape">Apellido Paterno</label>
                            <input 
                                type="text"
                                id="pri_ape"
                                v-model="form.pri_ape"
                                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                required
                                autocomplete="off"
                            >
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="seg_ape">Apellido Materno</label>
                            <input 
                                type="text"
                                id="seg_ape"
                                v-model="form.seg_ape"
                                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                required
                                autocomplete="off"
                            >
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="docu_num">DNI</label>
                            <input 
                                type="text"
                                id="docu_num"
                                v-model="form.docu_num"
                                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                required
                                autocomplete="off"
                            >
                        </div>

                        <!-- Botón Guardar -->
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow transition"
                            >
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>