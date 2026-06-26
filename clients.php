<?php 
$pageTitle = 'Key Clients';
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 md:pt-40 md:pb-28 bg-[#0B1120] overflow-hidden min-h-[50vh] lg:min-h-[60vh] flex flex-col justify-center border-b border-gray-800">
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-20%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-[#1e3a8a]/10 blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[40vw] h-[40vw] bg-[#a91c22]/10 blur-[120px] rounded-full mix-blend-screen"></div>
    </div>

    <div class="container-custom relative z-10 text-center max-w-4xl mx-auto pt-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#111827] border border-gray-800 mb-6 shadow-sm" data-aos="fade-down">
            <span class="w-2 h-2 rounded-full bg-[#f7931e] animate-pulse"></span>
            <span class="text-[#e0f2fe] text-[10px] font-black uppercase tracking-[0.3em]">Our Network</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-white tracking-tighter leading-[1.1] font-display mb-6" data-aos="fade-up" data-aos-delay="100">
            Key <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#a91c22] to-[#f7931e]">Clients</span>
        </h1>
        
        <p class="text-lg text-gray-400 font-medium leading-relaxed mx-auto max-w-2xl mb-8" data-aos="fade-up" data-aos-delay="150">
            We are proud to work with clients across diverse industries, building long-term partnerships through trust, quality, and reliable digital solutions that help businesses grow and succeed.
        </p>

        <div class="flex items-center justify-center gap-3 text-gray-500 text-sm font-bold uppercase tracking-wider mb-10" data-aos="fade-up" data-aos-delay="200">
            <a href="index.php" class="hover:text-white transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <span class="text-[#f7931e]">Key Clients</span>
        </div>
        
        <div class="flex flex-col items-center justify-center pt-8 border-t border-gray-800 max-w-md mx-auto" data-aos="fade-up" data-aos-delay="250">
            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-4">Trusted By 1000+ Businesses</p>
            <div class="flex items-center justify-center gap-4">
                <div class="flex -space-x-4">
                    <img class="w-12 h-12 rounded-full border-2 border-[#0B1120] shadow-sm object-cover" src="https://i.pravatar.cc/150?img=1" alt="User 1">
                    <img class="w-12 h-12 rounded-full border-2 border-[#0B1120] shadow-sm object-cover" src="https://i.pravatar.cc/150?img=2" alt="User 2">
                    <img class="w-12 h-12 rounded-full border-2 border-[#0B1120] shadow-sm object-cover" src="https://i.pravatar.cc/150?img=3" alt="User 3">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/components/clients-grid.php'; ?>

<?php include 'includes/footer.php'; ?>
