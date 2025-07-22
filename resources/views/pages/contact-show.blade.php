<x-layout title="Contact Page">
    <x-header />
    <x-main>
        <section>
            <div
                class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-gradient-to-br from-slate-950 to-slate-800 text-white">

                <!-- Left: Image -->
                <div class="flex items-center justify-center p-8">
                    <img src="{{ asset('/images/contact/contact-us.webp') }}" alt="Contact support illustration"
                        class="rounded-lg shadow-lg max-h-[500px] w-full object-contain">
                </div>

                <!-- Right: Form -->
                <div class="flex items-center justify-center p-10">
                    <form method="POST" action="{{ route('contact.send') }}" class="w-full max-w-md space-y-6">
                        @csrf
                        <div class="text-center">
                            <h2 class="text-3xl font-bold mb-2">Get in <span class="text-primary">Touch</span></h2>
                            <p class="text-gray-300">We’d love to hear from you. Fill out the form below and we’ll get
                                back to you soon.</p>
                        </div>

                        <div>
                            @error('first_name')
                                <span class="py-2 px-4 bg-red-400 text-slate-100">{{ message }}</span>
                            @enderror
                            <label for="first_name" class="block text-sm font-medium text-gray-200 mb-1">First
                                Name</label>
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full px-4 py-2 rounded-lg bg-slate-900 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div>
                            @error('email')
                                <span class="py-2 px-4 bg-red-400 text-slate-100">{{ message }}</span>
                            @enderror
                            <label for="email" class="block text-sm font-medium text-gray-200 mb-1">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 rounded-lg bg-slate-900 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div>
                            @error('message')
                                <span class="py-2 px-4 bg-red-400 text-slate-100">{{ message }}</span>
                            @enderror
                            <label for="message" class="block text-sm font-medium text-gray-200 mb-1">Your
                                Message</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-4 py-2 rounded-lg bg-slate-900 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-400 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <x-footer />
    </x-main>
</x-layout>
