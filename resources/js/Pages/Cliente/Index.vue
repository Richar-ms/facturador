<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const page = usePage()

const descargarPdf = () => {
    window.open(route('cliente.exportarPdf'), '_blank')
}
</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12 bg-gray-100 min-h-screen">
            <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">

                <!-- Botones -->
                <div class="flex justify-between mb-6">
                    <Link
                        :href="route('cliente.create')"
                        class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded shadow transition"
                    >
                        + Nuevo Cliente
                    </Link>

                    <button
                        @click="descargarPdf"
                        class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded shadow transition"
                    >
                        Descargar PDF
                    </button>
                </div>

                <!-- Tabla -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Nombres</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Primer Apellido</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Segundo Apellido</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr 
                                v-for="cliente in page.props.clientes" 
                                :key="cliente.id" 
                                class="hover:bg-gray-100 transition"
                            >
                                <td class="px-6 py-4 whitespace-nowrap">{{ cliente.nombres }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ cliente.pri_ape }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ cliente.seg_ape }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>