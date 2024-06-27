<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Tweet from '@/Components/Tweet.vue';
import TwitterLayout from '@/Layouts/TwitterLayout.vue';
</script>

<template>
  <Head title="Welcome" />

  <TwitterLayout>
    <div class="text-white">
      <div class="flex">
        <Tweet :tweet="{
          name: 'omid hajavi',
          handle: '@omidhajavi',
          image: 'https://randomuser.me/api/portraits/men/61.jpg',
          tweet: 'اگر شاکی در حضور قاضی به متهم حمله کند جرم آن چیست ؟',
          file: '/videos/attack.mp4',
          is_video: true,
          comments: '35',
          retweets: '54',
          likes: '88',
          analytics: '81'
        }"/>
      </div>
      <div class="border-b border-b-gray-800 mt-2"></div>
    </div>
  </TwitterLayout>
</template>
