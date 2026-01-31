<script setup>
import Card from "@/Shared/Portfolio/Components/Card.vue";

defineProps({
    experiences: {
        type: Array,
        default: () => []
    }
})
</script>

<template>
    <Card id="experience">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 text-center">
                <span class="border-b-4 border-primary pb-1">Work Experience</span>
            </h2>

            <div v-if="experiences && experiences.length > 0" class="relative border-l border-slate-700 ml-3 md:ml-6 space-y-12">
                <div v-for="experience in experiences" :key="experience.id" class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary border-4 border-dark"></div>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                        <h3 class="text-xl font-bold text-white">{{ experience.title }}</h3>
                        <span class="text-sm font-mono text-primary bg-primary/10 px-2 py-1 rounded">
                            {{ experience.formated_date }}
                        </span>
                    </div>
                    <p class="text-lg text-slate-400 mb-2">{{ experience.location }}</p>
                    <p class="text-slate-400 mb-4 max-w-2xl">
                        {{ experience.description }}
                    </p>
                </div>
            </div>

            <div v-else class="flex flex-col items-center justify-center py-16 px-4 border-2 border-dashed border-slate-700 rounded-xl bg-slate-800/20 text-center">
                <div class="bg-slate-800 p-4 rounded-full mb-4">
                    <svg class="w-8 h-8 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">No Experience Added</h3>
                <p class="text-slate-400 max-w-sm">
                    This section is currently empty. New professional milestones will appear here.
                </p>
            </div>

        </div>
    </Card>
</template>

