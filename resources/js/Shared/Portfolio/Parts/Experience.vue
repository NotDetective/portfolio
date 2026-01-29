<script setup>
defineProps({
    experiences: {
        type: Array,
        default: () => []
    }
})
</script>

<template>

    {

    <section id="experience" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 text-center"><span class="border-b-4 border-primary pb-1">Work Experience</span>
            </h2>

            <div class="relative border-l border-slate-700 ml-3 md:ml-6 space-y-12">

                <div v-for="experience in experiences" class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary border-4 border-dark"></div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                        <h3 class="text-xl font-bold text-white">{{ experience.title }}</h3>
                        <span
                            class="text-sm font-mono text-primary bg-primary/10 px-2 py-1 rounded">{{ experience.formated_date }} </span>
                    </div>
                    <p class="text-lg text-slate-400 mb-2">{{ experience.location }}</p>
                    <p class="text-slate-400 mb-4 max-w-2xl">
                        {{ experience.description }}
                    </p>
<!--                    <ul class="list-disc list-inside text-sm text-slate-500 space-y-1">-->
<!--                        <li>Mentored 3 junior developers</li>-->
<!--                        <li>Implemented CI/CD pipelines</li>-->
<!--                        <li>Reduced technical debt by 25%</li>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>
    </section>
</template>

