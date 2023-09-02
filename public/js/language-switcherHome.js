const langElements = {
    id: {
        'home-link': 'Beranda',
                'blog-link': 'Blog',
                'competition-link': 'Lomba',
                'about-link': 'Tentang',
                'daftar-link': 'Daftar',
                'register-link': 'Daftar', // Change 'daftar-link' to 'register-link'
                'masuk-link': 'Masuk',
                'head-link': 'Teruskan Kembangkan Skill-Mu & Siap Jadi Talenta Digital',
                'quotes1':'Membaca dapat meningkatkan koneksi neuron dalam otak, membantu meningkatkan daya ingat, dan memperkuat kemampuan kognitif, sehingga secara keseluruhan dapat membuat Anda lebih cerdik dan pintar.',
                'quotes2':'Aktivitas membaca melibatkan proses berpikir kritis dan analitis, memaksa otak untuk bekerja lebih keras, dan mengasah kemampuan pemecahan masalah, sehingga dapat mengembangkan kecerdasan intelektual.',
                'quotes3':'Selain itu, membaca juga membuka pintu wawasan baru, memperluas pengetahuan, dan meningkatkan pemahaman tentang berbagai topik, yang pada gilirannya dapat membantu Anda menjadi individu yang lebih berpengetahuan dan berpikiran terbuka.',
                'selengkapnya-link':'selengkapnya',
                'quotes4':'Keberhasilan dimulai dari',
                'quotes5':'tekad untuk mencoba, kesabaran untuk berusaha, dan <br> keyakinan untuk tidak pernah menyerah.',
                'perintah-link':'Temukan Postingan dan Info terbaru lewat instaragam Student Union ISB',
                'footer-desc-link' :'DSD hadir dengan konten untuk membantu meningkatkan kontrol diri, mengurangi kecemasan dan memberikan saran praktis untuk mengatasi gejala-gejala kecemasan.',
                'contact-button-link' : 'Hubungi Kami',
                'footer-subtitle-link':  'Layanan',
                "anime-link" :'Anime',
                "Jurnal-link" :'Jurnal Online ',
                "Komunitas-link" :'Komuntias',
                "Blog-link" :'Blog',
                'panduan-link':'Bantuan dan Panduan',
                "Syarat-link" : 'Syarat dan Ketentuan',
                "Kebijakan-link" :'Kebijakan Privasi',
                "Bantuan-link" : 'Bantuan',
                "Tentang-link" : 'Tentang Kami',


            },
    en: {
        'home-link': 'HomePage',
                'blog-link': 'Blog',
                'competition-link': 'Competition',
                'about-link': 'About',
                'daftar-link': 'Register',
                'register-link': 'Register', // Change 'daftar-link' to 'register-link'
                'masuk-link': 'Login',
                'head-link': 'Keep Developing Your Skills & Ready to be Digital Talents',
                'quotes1':'Reading can increase the connection of neurons in the brain, help improve memory, and strengthen cognitive abilities, so that overall it can make you smarter and smarter.',
                'quotes2':'Reading activities involve critical and analytical thinking processes, forcing the brain to work harder, and sharpen problem-solving skills, so that it can develop intellectual intelligence.',
                'quotes3':'In addition, reading also opens the door to new insights, expands knowledge, and increases understanding of various topics, which in turn can help you become a more knowledgeable and open-minded individual.',
                'selengkapnya-link':'Read More',
                'quotes4':'Success starts from',
                'quotes5':'the determination to try, the patience to try, and <br> the confidence to never give up.',
                'perintah-link':'Find the latest posts and info via instagram Student Union ISB',
                'footer-desc-link' :'DSD comes with content to help improve self-control, reduce anxiety and provide practical advice for dealing with anxiety symptoms.',
                'contact-button-link' : 'Contact Us',
                'footer-subtitle-link':  'Services',
                "anime-link" :'Anime',
                "Jurnal-link" :'Online Journal',
                "Komunitas-link" :'Community',
                "Blog-link" :'Blog',
                'panduan-link':'Help and Guide',
                "Syarat-link" : 'Terms and Conditions',
                "Kebijakan-link" :'Privacy Policy',
                "Bantuan-link" : 'Help',
                "Tentang-link" : 'About Us',
                
    },
};

const changeLanguage = (lang) => {
    const elements = langElements[lang];
    if (elements) {
        for (const id in elements) {
            const element = document.querySelector(`.${id}`);
            if (element) {
                element.textContent = elements[id];
            }
        }
    }
};

document.addEventListener('DOMContentLoaded', () => {
    const langLinks = document.querySelectorAll('.change-lang');
    langLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const selectedLang = link.getAttribute('data-lang');
            changeLanguage(selectedLang);
        });
    });
});
