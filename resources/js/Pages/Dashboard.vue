<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    users: {
        type: Array,
    },
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg"
                >
                    <div class="p-6 lg:p-8">
                        <h1 class="text-2xl">Hello there!</h1>
                        <p
                            class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed"
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Ad adipisci nesciunt sint deleniti recusandae,
                            cum excepturi neque possimus qui sapiente quibusdam
                            iusto itaque vitae, ab provident nam dignissimos.
                            Repudiandae, eos?
                        </p>
                        <ul class="mt-6 font-mono">
                            <li v-for="user in users">
                                {{ user.id }} - {{ user.email }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
