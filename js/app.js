document.addEventListener("DOMContentLoaded", () => {
    console.log("Modul Berita Berhasil Dimuat");
    
    // Efek interaksi sederhana saat berita diklik
    const newsItems = document.querySelectorAll('.news-item');
    newsItems.forEach(item => {
        item.addEventListener('click', () => {
            item.style.backgroundColor = '#f8f9fa';
            item.style.padding = '10px';
            item.style.borderRadius = '5px';
        });
    });
});
