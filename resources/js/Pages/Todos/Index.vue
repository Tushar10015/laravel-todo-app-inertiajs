<template>
    <AuthenticatedLayout>
        <div class="p-4 bg-white m-10">
            <h1 class="text-3xl font-bold mb-4">My Todos</h1>

            <a href="/todos/create" class="text-blue-500 mb-4">
                Create New Todo
            </a>

            <div class="flex shrink-0 items-center">
                <Link :href="route('dashboard')">
                    <ApplicationLogo
                        class="block h-9 w-auto fill-current text-gray-800"
                    />
                    Test Link
                </Link>
            </div>

            <ul class="space-y-4">
                <li
                    v-for="todo in todos"
                    :key="todo.id"
                    class="flex justify-between items-center p-4 border rounded-lg shadow-md"
                >
                    <div>
                        <h2 class="font-bold text-lg">{{ todo.title }}</h2>
                        <p class="text-gray-600">{{ todo.description }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a
                            :href="`/todos/${todo.id}/edit`"
                            class="text-blue-500 hover:underline"
                            >Edit</a
                        >
                        <button
                            @click="deleteTodo(todo.id)"
                            class="text-red-500 hover:underline"
                        >
                            Delete
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue"; // Import the layout
import { Link } from "@inertiajs/vue3";

export default {
    props: {
        todos: Array,
    },
    components: {
        AuthenticatedLayout, // Register the layout component
    },
    methods: {
        deleteTodo(id) {
            if (confirm("Are you sure you want to delete this todo?")) {
                Inertia.delete(`/todos/${id}`);
            }
        },
    },
};
</script>
