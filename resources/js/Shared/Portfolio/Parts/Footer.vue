<script setup>

</script>

<template>
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
                                <label for="email"
                                       class="block text-sm font-medium text-slate-300 mb-2">Email</label>
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
</template>

