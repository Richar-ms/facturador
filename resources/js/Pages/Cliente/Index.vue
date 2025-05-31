<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const page = usePage()

//console.log(page.props.clientes);

const descargarPdf = () => {

    window.open(route('cliente.exportarPdf'), '_blank')
}

</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flex">
                    <div class="p-4 m-2">
                        <Link
                            :href="route('cliente.create')"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Nuevo
                        </Link>
                    </div>

                    <div class="p-4 m-2">
                        <button
                            @click="descargarPdf" 
                            class="bg-blue-500 text-white px-4 rounded"
                        >
                            Descargar PDF
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Nombres</th>
                                <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Primer Apellido</th>
                                <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Segundo Apellido</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr v-for="cliente in page.props.clientes" :key="cliente.id" class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-4">{{ cliente.nombres }}</td>
                                <td class="py-3 px-4">{{ cliente.pri_ape }}</td>
                                <td class="py-3 px-4">{{ cliente.seg_ape }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>