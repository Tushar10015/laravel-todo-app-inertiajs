<template>
    <AuthenticatedLayout>
        <div class="flex flex-col items-center p-10">
            <h1 class="text-2xl font-bold">Create Todo</h1>

            <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
                <!-- Added card styling -->
                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <label class="block">Title</label>
                        <input
                            v-model="form.title"
                            class="border rounded px-2 py-1 w-full"
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block">Description</label>
                        <textarea
                            v-model="form.description"
                            class="border rounded px-2 py-1 w-full"
                        ></textarea>
                    </div>
                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded"
                    >
                        Create
                    </button>
                </form>
            </div>
            <!-- End of card styling -->
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue"; // Import the layout

export default {
    components: {
        AuthenticatedLayout, // Register the layout component
    },
    data() {
        return {
            form: {
                title: "",
                description: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post("/todos", this.form);
        },
    },
};
</script>
