<script setup>
import {ref} from "vue";

const isMobileMenuOpen = ref(false);

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
}

</script>

<template>
    <nav class="fixed w-full z-50 bg-dark/90 backdrop-blur-sm border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold text-white"><span class="text-primary">&lt;</span>Dev<span
                        class="text-primary">/&gt;</span></a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#skills" class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Skills</a>
                        <a href="#experience" class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Experience</a>
                        <a href="#projects" class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                        <a href="#contact" class="bg-primary text-white hover:bg-sky-600 px-4 py-2 rounded-md text-sm font-medium transition-colors">Hire Me</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button @click="toggleMobileMenu" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path v-if="!isMobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div v-show="isMobileMenuOpen" class="md:hidden bg-card border-b border-slate-700">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" @click="isMobileMenuOpen = false" class="block hover:bg-slate-700 px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#skills" @click="isMobileMenuOpen = false" class="block hover:bg-slate-700 px-3 py-2 rounded-md text-base font-medium">Skills</a>
                <a href="#experience" @click="isMobileMenuOpen = false" class="block hover:bg-slate-700 px-3 py-2 rounded-md text-base font-medium">Experience</a>
                <a href="#projects" @click="isMobileMenuOpen = false" class="block hover:bg-slate-700 px-3 py-2 rounded-md text-base font-medium">Projects</a>
            </div>
        </div>
    </nav>
</template>

