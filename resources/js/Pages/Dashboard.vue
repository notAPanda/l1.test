<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    user: {
        type: Object,
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
                            Czy to działa czy to nie działa?
                        </p>
                        <div class="flex items-center gap-x-6 mt-6">
                            <img
                                class="h-16 w-16 rounded-full"
                                :src="user.profile_photo_url"
                                alt=""
                            />
                            <div>
                                <h3
                                    class="text-base font-semibold leading-7 tracking-tight text-gray-900"
                                >
                                    {{ user.name }}
                                </h3>
                                <p
                                    class="text-sm font-semibold leading-6 text-indigo-600"
                                >
                                    {{ user.email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
