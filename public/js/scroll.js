// Intersection Observer untuk mengaktifkan animasi saat elemen masuk ke layar
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        root: null,  // Menggunakan viewport sebagai root
        threshold: 0.5  // Trigger animasi saat 50% elemen terlihat
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Ambil elemen dan tambahkan kelas animasi yang sesuai
                const element = entry.target;
                const animationClass = element.getAttribute('data-animate');
                element.classList.add(animationClass);  // Menambahkan kelas animasi
                observer.unobserve(element);  // Hentikan pengamatan setelah animasi dijalankan
            }
        });
    }, observerOptions);

    // Pilih elemen dengan kelas animate-on-scroll untuk diamati
    const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
    elementsToAnimate.forEach(element => observer.observe(element));
});
