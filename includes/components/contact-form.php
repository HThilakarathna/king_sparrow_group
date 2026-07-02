<!-- Contact Section -->
<section class="py-24 bg-[#050B14] relative overflow-hidden">
    <div class="container-custom relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">
            
            <!-- Contact Info -->
            <div class="lg:col-span-5" data-aos="fade-right">
                <div class="bg-[#111827] rounded-[2.5rem] p-10 md:p-12 text-white relative overflow-hidden h-full shadow-2xl border border-gray-800">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-brand-maroon/5 blur-[80px] rounded-full"></div>
                    
                    <h3 class="text-2xl font-black font-display mb-10 relative z-10">Contact Information</h3>
                    
                    <div class="space-y-8 relative z-10">
                        <div class="flex items-start gap-5 group">
                            <div class="w-12 h-12 rounded-full bg-gray-800/50 border border-gray-700 flex items-center justify-center shrink-0 group-hover:bg-brand-blue transition-colors">
                                <i data-lucide="map-pin" class="w-5 h-5 text-brand-blue group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-black uppercase tracking-widest text-brand-blue mb-1">Headquarters</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">Market Road Meeravodai -05<br>Oddamavadi, Batticaloa<br>Sri Lanka — 3042</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-5 group">
                            <div class="w-12 h-12 rounded-full bg-gray-800/50 border border-gray-700 flex items-center justify-center shrink-0 group-hover:bg-brand-blue transition-colors">
                                <i data-lucide="phone" class="w-5 h-5 text-brand-blue group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-black uppercase tracking-widest text-brand-blue mb-1">Phone</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">+94 75 055 0660</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-5 group">
                            <div class="w-12 h-12 rounded-full bg-gray-800/50 border border-gray-700 flex items-center justify-center shrink-0 group-hover:bg-brand-blue transition-colors">
                                <i data-lucide="mail" class="w-5 h-5 text-brand-blue group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-black uppercase tracking-widest text-brand-blue mb-1">Email</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">info@kingsparrowgroups.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="lg:col-span-7 flex flex-col justify-center" data-aos="fade-left">
                <h3 class="text-3xl font-black text-white tracking-tight mb-8">Send Us a Message</h3>
                
                <?php if (isset($formSubmitted) && $formSubmitted): ?>
                    <div class="bg-green-900/20 border border-green-800 rounded-2xl p-6 mb-8 flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-green-900/50 flex items-center justify-center shrink-0 mt-0.5 border border-green-800">
                            <i data-lucide="check" class="w-4 h-4 text-green-400"></i>
                        </div>
                        <div>
                            <h4 class="text-green-400 font-bold mb-1">Thank you!</h4>
                            <p class="text-green-500 text-sm">Your message has been successfully sent. Our team will contact you shortly.</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($formError) && $formError): ?>
                    <div class="bg-red-900/20 border border-red-800 rounded-2xl p-6 mb-8 flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-red-900/50 flex items-center justify-center shrink-0 mt-0.5 border border-red-800">
                            <i data-lucide="alert-circle" class="w-4 h-4 text-red-400"></i>
                        </div>
                        <div>
                            <h4 class="text-red-400 font-bold mb-1">Error!</h4>
                            <p class="text-red-500 text-sm">Please fill out all required fields with valid information before submitting.</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <form action="contact.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="text-xs font-black uppercase tracking-widest text-gray-400">Full Name</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe" 
                                class="w-full px-5 py-4 bg-[#0B1120]/50 border border-gray-800 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all text-sm font-medium text-white placeholder:text-gray-600">
                        </div>
                        
                        <div class="space-y-2">
                            <label for="email" class="text-xs font-black uppercase tracking-widest text-gray-400">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="john@company.com" 
                                class="w-full px-5 py-4 bg-[#0B1120]/50 border border-gray-800 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all text-sm font-medium text-white placeholder:text-gray-600">
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label for="subject" class="text-xs font-black uppercase tracking-widest text-gray-400">Subject</label>
                        <input type="text" id="subject" name="subject" required placeholder="Software Consultation" 
                            class="w-full px-5 py-4 bg-[#0B1120]/50 border border-gray-800 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all text-sm font-medium text-white placeholder:text-gray-600">
                    </div>
                    
                    <div class="space-y-2">
                        <label for="message" class="text-xs font-black uppercase tracking-widest text-gray-400">Message</label>
                        <textarea id="message" name="message" required placeholder="How can we help you?" rows="5"
                            class="w-full px-5 py-4 bg-[#0B1120]/50 border border-gray-800 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all text-sm font-medium text-white placeholder:text-gray-600 resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full md:w-auto">
                        Send Message <i data-lucide="send" class="w-4 h-4 ml-1"></i>
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>
