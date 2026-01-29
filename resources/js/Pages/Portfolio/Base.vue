<script setup>
import {ref} from "vue";
import Skills from "@/Shared/Portfolio/Parts/Skills.vue";

defineProps({
    stacks: {
        type: Array
    }
});

const isMobileMenuOpen = ref(false);

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
}

</script>

<template>
    <div class="bg-dark text-slate-300 font-sans antialiased selection:bg-primary selection:text-white">
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
                    I'm a Full Stack Developer specializing in building (and occasionally designing) exceptional digital
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
                        <p><span class="text-purple-400">const</span> <span class="text-yellow-300">developer</span> = {
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

    <skills :stacks="stacks" />

    <section id="experience" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 text-center"><span class="border-b-4 border-primary pb-1">Work Experience</span>
            </h2>

            <div class="relative border-l border-slate-700 ml-3 md:ml-6 space-y-12">

                <div class="relative pl-8 md:pl-12">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary border-4 border-dark"></div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                        <h3 class="text-xl font-bold text-white">Senior Software Engineer</h3>
                        <span
                            class="text-sm font-mono text-primary bg-primary/10 px-2 py-1 rounded">2022 - Present</span>
                    </div>
                    <p class="text-lg text-slate-400 mb-2">Tech Solutions Inc.</p>
                    <p class="text-slate-400 mb-4 max-w-2xl">
                        Leading the frontend team in migrating a legacy monolithic application to a microservices
                        architecture using React and Next.js. Improved page load speed by 40%.
                    </p>
                    <ul class="list-disc list-inside text-sm text-slate-500 space-y-1">
                        <li>Mentored 3 junior developers</li>
                        <li>Implemented CI/CD pipelines</li>
                        <li>Reduced technical debt by 25%</li>
                    </ul>
                </div>

                <div class="relative pl-8 md:pl-12">
                    <div
                        class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-slate-600 border-4 border-dark"></div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                        <h3 class="text-xl font-bold text-white">Full Stack Developer</h3>
                        <span class="text-sm font-mono text-slate-500 bg-slate-800 px-2 py-1 rounded">2020 - 2022</span>
                    </div>
                    <p class="text-lg text-slate-400 mb-2">Creative Agency</p>
                    <p class="text-slate-400 mb-4 max-w-2xl">
                        Developed and maintained client websites using the MERN stack. Collaborated closely with
                        designers to implement pixel-perfect UIs.
                    </p>
                </div>

                <div class="relative pl-8 md:pl-12">
                    <div
                        class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-slate-600 border-4 border-dark"></div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                        <h3 class="text-xl font-bold text-white">Junior Developer</h3>
                        <span class="text-sm font-mono text-slate-500 bg-slate-800 px-2 py-1 rounded">2018 - 2020</span>
                    </div>
                    <p class="text-lg text-slate-400 mb-2">StartUp Hub</p>
                    <p class="text-slate-400 mb-4 max-w-2xl">
                        Assisted in building RESTful APIs using Python and Flask. Wrote automated tests to ensure code
                        quality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-20 bg-card/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 text-center"><span class="border-b-4 border-primary pb-1">Featured Projects</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="group bg-card rounded-xl overflow-hidden border border-slate-700 hover:border-primary transition-all hover:shadow-lg hover:shadow-primary/10">
                    <div class="h-48 bg-slate-700 relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center text-slate-500">
                            <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-white">E-Commerce Platform</h3>
                            <div class="flex space-x-3">
                                <a href="#" class="text-slate-400 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm mb-4">A full-featured shopping cart application with payment
                            processing and admin dashboard.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">Next.js</span>
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">Stripe</span>
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">Tailwind</span>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-card rounded-xl overflow-hidden border border-slate-700 hover:border-primary transition-all hover:shadow-lg hover:shadow-primary/10">
                    <div class="h-48 bg-slate-700 relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center text-slate-500">
                            <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-white">Task Management App</h3>
                            <div class="flex space-x-3">
                                <a href="#" class="text-slate-400 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm mb-4">A Kanban-style task manager allowing drag-and-drop
                            organization.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">React</span>
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">Redux</span>
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">Firebase</span>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-card rounded-xl overflow-hidden border border-slate-700 hover:border-primary transition-all hover:shadow-lg hover:shadow-primary/10">
                    <div class="h-48 bg-slate-700 relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center text-slate-500">
                            <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-white">AI Chat Interface</h3>
                            <div class="flex space-x-3">
                                <a href="#" class="text-slate-400 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm mb-4">A wrapper for OpenAI API providing a clean chat
                            interface.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">OpenAI API</span>
                            <span class="px-2 py-1 bg-slate-800 text-xs rounded text-primary border border-slate-700">Node.js</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-12 text-center">
                <a href="https://github.com" target="_blank"
                   class="inline-flex items-center text-primary hover:text-white transition-colors">
                    View more on GitHub
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-dark border-t border-slate-800 py-12">
        <section id="contact" class="py-20 bg-dark border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white mb-12 text-center"><span
                    class="border-b-4 border-primary pb-1">Get In Touch</span></h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-semibold text-white mb-4">Let's talk about your project</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed">
                            I'm currently available for freelance work and open to full-time opportunities.
                            Drop me a message using the form, and I'll get back to you within 24 hours.
                        </p>

                        <div class="flex flex-col space-y-4">
                            <div class="flex items-center text-slate-300">
                                <svg class="w-6 h-6 mr-4 text-primary" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>San Francisco, CA (Open to Remote)</span>
                            </div>
                            <div class="flex items-center text-slate-300">
                                <svg class="w-6 h-6 mr-4 text-primary" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>Available for Freelance</span>
                            </div>
                        </div>

                        <div class="flex space-x-6 mt-8">
                            <a href="#" class="text-slate-400 hover:text-white transition-colors">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <a href="#" class="text-slate-400 hover:text-white transition-colors">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="bg-card p-8 rounded-2xl border border-slate-700 shadow-xl">
                        <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST" class="space-y-6">

                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name</label>
                                <input type="text" name="name" id="name" required
                                       class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-white transition-all placeholder-slate-500"
                                       placeholder="John Doe">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                                <input type="email" name="email" id="email" required
                                       class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-white transition-all placeholder-slate-500"
                                       placeholder="john@example.com">
                            </div>

                            <div>
                                <label for="message"
                                       class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                                <textarea name="message" id="message" rows="4" required
                                          class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-white transition-all placeholder-slate-500 resize-none"
                                          placeholder="I'd like to hire you for..."></textarea>
                            </div>

                            <button type="submit"
                                    class="w-full bg-gradient-to-r from-primary to-purple-600 text-white font-bold py-3 px-4 rounded-lg hover:opacity-90 transition-opacity focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-slate-900">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-slate-800 text-center">
                <p class="text-slate-600 text-sm">
                    &copy; 2024 DevPortfolio. Built with Tailwind CSS.
                </p>
            </div>
        </section>
    </footer>
    </div>
</template>

<style>
/* Global smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Custom Scrollbar */
::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: #0f172a; }
::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: #475569; }
</style>
