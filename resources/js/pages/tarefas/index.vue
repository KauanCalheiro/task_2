<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';

import { type BreadcrumbItem, type SharedData, type User } from '@/types';
import { ref } from 'vue';

defineProps();

interface Tarefa {
    id: number;
    descricao: string;
    data_criacao: string;
    data_prevista: string | null;
    data_encerramento: string | null;
    situacao: string;
}

const page = usePage<SharedData>();

const tarefas = ref<Tarefa[]>(page.props.tarefas as Tarefa[]);
</script>

<template>
    <div class="w-full p-16 bg-white dark:bg-gray-800 rounded-lg shadow">
        <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-600">
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-700">
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">ID</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Descrição</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Data Criação</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Data Prevista</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Data Encerramento</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Situação</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="tarefa in tarefas" :key="tarefa.id" class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-800 dark:even:bg-gray-700">
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ tarefa.id }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ tarefa.descricao }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ tarefa.data_criacao }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ tarefa.data_prevista || 'N/A' }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ tarefa.data_encerramento || 'N/A' }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ tarefa.situacao }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
