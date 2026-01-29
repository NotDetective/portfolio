<script setup>
defineProps({
    stacks: {
        type: Array,
        default: () => []
    }
})
</script>

<template>
    <section id="skills" class="py-20 bg-card/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 text-center">
                <span class="border-b-4 border-primary pb-1">My Tech Stack</span>
            </h2>

            <div v-if="stacks && stacks.length > 0" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div v-for="stack in stacks" :key="stack.name" class="bg-card p-6 rounded-xl border border-slate-700 hover:border-primary/50 transition-colors">
                    <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        {{ stack.name }}
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span v-for="capability in stack.capabilities" :key="capability.name" class="px-3 py-1 bg-slate-700 rounded-full text-sm">
                            {{ capability.name }}
                        </span>
                    </div>
                </div>
            </div>

            <div v-else class="flex flex-col items-center justify-center py-16 px-4 border-2 border-dashed border-slate-700 rounded-xl bg-slate-800/20 text-center">
                <div class="bg-slate-800 p-4 rounded-full mb-4">
                    <svg class="w-8 h-8 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">No Tech Stack Found</h3>
                <p class="text-slate-400 max-w-sm">
                    Skills haven't been added to the portfolio yet. Check back soon to see what I'm working with.
                </p>
            </div>

        </div>
    </section>
</template>

<style scoped>
/* No specific styles needed, tailwind handles it */
</style>
