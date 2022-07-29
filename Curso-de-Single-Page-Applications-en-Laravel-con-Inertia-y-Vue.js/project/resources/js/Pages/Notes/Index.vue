<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link} from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia'
defineProps({notes: Array});
const valor = ref(null)
const buscar = () => { 
    let q= valor.value;
    Inertia.get(route('notes.index', {q}), {}, {preserveState: true});
};
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="p3-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Listadop de notas</h3>
                            <p class="text-sm text-gray-600">Toma el registro correcto y ejecuta cualquier funcion
                                (ver,editar)</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <div class="flex justify-between">
                                <input type="text" class="form-input rounded-md shadow-sm" placeholder="buscar..." v-model="valor" @keyup="buscar">

                                <Link :href="route('notes.create')"
                                    class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">
                                Crear
                                </Link>

                            </div>
                            <hr class="my-6">

                            <tr v-for="note in notes">
                                <td class="border px-4 py-2">
                                    {{ note.excerpt }}
                                </td>
                                <td class="px-4 py-2">

                                    <Link :href="route('notes.show', note.id)">
                                    Ver
                                    </Link>

                                </td>
                                <td class="px-4 py-2">
                                    <Link :href="route('notes.edit', note.id)">
                                    Editar
                                    </Link>

                                </td>


                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
