<script setup>
import Skills from "@/Shared/Portfolio/Parts/Skills.vue";
import Experience from "@/Shared/Portfolio/Parts/Experience.vue";
import Header from "@/Shared/Portfolio/Parts/Header.vue";
import Project from "@/Shared/Portfolio/Parts/Project.vue";
import Footer from "@/Shared/Portfolio/Parts/Footer.vue";

defineProps({
    stacks: {
        type: Array
    },
    experiences: {
        type: Array
    },
    projects : {
        type: Array
    }
});


</script>

<template>
    <div class="bg-dark text-slate-300 font-sans antialiased selection:bg-primary selection:text-white">
        <Header/>

        <section id="home" class="min-h-screen flex items-center pt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-primary font-semibold tracking-wider uppercase text-sm">Software Developer</span>
                    <h1 class="mt-4 text-5xl md:text-7xl font-bold text-white tracking-tight">
                        Building digital <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-purple-500">experiences.</span>
                    </h1>
                    <p class="mt-6 text-lg text-slate-400 max-w-lg">
                        I'm a Full Stack Developer specializing in building (and occasionally designing) exceptional
                        digital
                        experiences. Currently, I'm focused on building accessible, human-centered products.
                    </p>
                    <div class="mt-8 flex gap-4">
                        <a href="#projects"
                           class="px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-sky-600 transition-colors shadow-lg shadow-primary/25">
                            View Work
                        </a>
                        <a href="#contact"
                           class="px-6 py-3 border border-slate-600 text-white font-semibold rounded-lg hover:border-slate-400 hover:bg-slate-800 transition-all">
                            Contact Me
                        </a>
                    </div>
                </div>
                <div class="hidden md:block relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-primary to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <div
                        class="relative bg-card rounded-lg p-6 border border-slate-700 font-mono text-sm leading-6 overflow-hidden">
                        <div class="flex space-x-2 mb-4">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="text-slate-300">
                            <p><span class="text-purple-400">const</span> <span class="text-yellow-300">developer</span>
                                = {
                            </p>
                            <p class="pl-4">name: <span class="text-green-400">'John Doe'</span>,</p>
                            <p class="pl-4">role: <span class="text-green-400">'Full Stack Engineer'</span>,</p>
                            <p class="pl-4">skills: [<span class="text-green-400">'React'</span>, <span
                                class="text-green-400">'Node'</span>, <span class="text-green-400">'AWS'</span>],</p>
                            <p class="pl-4">hardWorker: <span class="text-primary">true</span>,</p>
                            <p class="pl-4">hireable: <span class="text-primary">function</span>() {</p>
                            <p class="pl-8"><span class="text-purple-400">return</span> <span
                                class="text-primary">true</span>;</p>
                            <p class="pl-4">}</p>
                            <p>};</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <skills :stacks="stacks"/>

        <experience :experiences="experiences"/>

        <Project :projects="projects" />

        <Footer/>
    </div>
</template>

<style>
/* Global smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #0f172a;
}

::-webkit-scrollbar-thumb {
    background: #334155;
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: #475569;
}
</style>
