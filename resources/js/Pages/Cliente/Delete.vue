<script setup>
import { useForm } from '@inertiajs/vue3';
import { useRoute } from 'vue-router';

const route = useRoute();
const form = useForm();

const deleteCliente = () => {
  if (confirm('¿Estás seguro de que deseas eliminar este cliente?')) {
    form.delete(route('cliente.destroy', route.params.id), {
      onSuccess: () => {
        alert('Cliente eliminado con éxito');
        // Redirigir a la lista de clientes o realizar otra acción
      },
      onError: () => {
        alert('Hubo un error al eliminar el cliente');
      },
    });
  }
};
</script>

<template>
  <div class="confirmation-dialog">
    <h2>Eliminar Cliente</h2>
    <p>¿Estás seguro de que deseas eliminar este cliente?</p>
    <button @click="deleteCliente" class="btn btn-danger">Eliminar</button>
    <button @click="$router.push({ name: 'cliente.index' })" class="btn btn-secondary">Cancelar</button>
  </div>
</template>

<style scoped>
.confirmation-dialog {
  /* Estilos para el cuadro de confirmación */
}
</style>