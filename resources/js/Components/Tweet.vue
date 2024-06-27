<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import HeartOutline from 'vue-material-design-icons/HeartOutline.vue';
import ChartBar from 'vue-material-design-icons/ChartBar.vue';
import MessageOutline from 'vue-material-design-icons/MessageOutline.vue';
import Sync from 'vue-material-design-icons/Sync.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';
import TrashCanOutline from 'vue-material-design-icons/TrashCanOutline.vue';

const props = defineProps({
  tweet: {
    type: Object,
    required: true
  }
});

let openOptions = ref(false);
</script>

<template>
  <div class="min-w-[60px] ">
    <img class="rounded-full m-2 mt-3" width="50" :src="props.tweet.image">
  </div>
  <div class="p-2 w-full">
    <div class="font-extrabold flex items-center justify-between mt-0.5 mb-1.5">
      <div class="flex items-center">
        <div>{{ props.tweet.name }}</div>
        <span class="font=[300] text-[14px] text-gray-500 pl-2">{{ props.tweet.handle }}</span>
      </div>
      <div class="hover:bg-gray-800 rounded-full cursor-pointer relative">
        <button type="button" class="block p-2" @click="openOptions = !openOptions">
          <DotsHorizontal />
        </button>
      </div>
    </div>

    <div class="p-3 text-right">{{ props.tweet.tweet }}</div>
    <div v-if="props.tweet.file">
      <div v-if="!props.tweet.is_video" class="rounded-xl w-full">
        <img :src="props.tweet.file" class="mt-2 object-fill rounded-xl w-full">
      </div>
      <div v-else>
        <video class="rounded-xl" :src="props.tweet.file" controls></video>
      </div>
    </div>
  </div>
</template>
