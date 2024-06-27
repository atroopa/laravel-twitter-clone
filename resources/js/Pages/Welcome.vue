<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TwitterLayout from '@/Layouts/TwitterLayout.vue';
</script>

<template>
    <Head title="Welcome" />

    <TwitterLayout>
        <div class="text-white">
            <Tweet/>
            <div class="border-b border-b-gray-800 mt-2"></div>
        </div>
    </TwitterLayout>

</template>
