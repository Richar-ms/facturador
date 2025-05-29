<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';


const page = usePage()

console.log(page.props.clientes);


</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <ul v-for="cliente in page.props.clientes">
                    <li>{{ cliente.nombres }}</li>
                    <li>{{ cliente.pri_ape }}</li>
                    <li>{{ cliente.seg_ape }}</li>
                </ul>
            </div>
        </div>
    </AuthenticatedLayout>
</template>