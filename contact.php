<?php 
$pageTitle = 'Contact Us';
include 'includes/header.php'; 

$formSubmitted = false;
$formError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $to = "Info@Kingsparrowgroups.Com"; 
        $email_subject = "New Contact Form Submission: $subject";
        
        $email_body = "You have received a new message from the King Sparrow Group website contact form.\n\n".
                      "Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
                      
        $headers = "From: noreply@kingsparrowgroups.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send the email. The @ suppresses errors if local XAMPP doesn't have sendmail configured.
        @mail($to, $email_subject, $email_body, $headers);
        
        $formSubmitted = true;
    } else {
        $formError = true;
    }
}
?>

<!-- Page Header -->
<section class="relative pt-32 pb-20 md:pt-40 md:pb-28 bg-[#0B1120] overflow-hidden min-h-[50vh] lg:min-h-[60vh] flex flex-col justify-center border-b border-gray-800">
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-20%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-[#1e3a8a]/10 blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[40vw] h-[40vw] bg-[#a91c22]/10 blur-[120px] rounded-full mix-blend-screen"></div>
    </div>

    <div class="container-custom relative z-10 text-center max-w-4xl mx-auto pt-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#111827] border border-gray-800 mb-6 shadow-sm" data-aos="fade-down">
            <span class="w-2 h-2 rounded-full bg-[#f7931e] animate-pulse"></span>
            <span class="text-[#e0f2fe] text-[10px] font-black uppercase tracking-[0.3em]">Get In Touch</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-white tracking-tighter leading-[1.1] font-display mb-6" data-aos="fade-up" data-aos-delay="100">
            Let's Start a <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#a91c22] to-[#f7931e]">Project</span>
        </h1>
        
        <p class="text-lg text-gray-400 font-medium leading-relaxed mx-auto max-w-2xl mb-8" data-aos="fade-up" data-aos-delay="150">
            Our global team is ready to assist you with your digital transformation journey. Connect with us today to discuss your next big idea.
        </p>

        <div class="flex items-center justify-center gap-3 text-gray-500 text-sm font-bold uppercase tracking-wider" data-aos="fade-up" data-aos-delay="200">
            <a href="index.php" class="hover:text-white transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <span class="text-[#f7931e]">Contact Us</span>
        </div>
    </div>
</section>

<?php include 'includes/components/contact-form.php'; ?>

<?php include 'includes/footer.php'; ?>
