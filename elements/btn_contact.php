<style>
    .whatsapp-btn,
    .instagram-btn,
    .linkedin-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        transition: transform 0.3s ease;
    }

    .whatsapp-btn {
        background-color: #25D366;
    }

    .instagram-btn {
        background-color: #E4405F;
        bottom: 90px; /* Ajusta la posición del botón de Instagram */
    }

    .linkedin-btn {
        background-color: #0077B5;
        bottom: 160px; /* Ajusta la posición del botón de LinkedIn */
    }

    .whatsapp-btn i,
    .instagram-btn i,
    .linkedin-btn i {
        font-size: 30px;
        color: #ffffff;
    }

    .whatsapp-btn:hover,
    .instagram-btn:hover,
    .linkedin-btn:hover {
        transform: scale(1.1);
    }
</style>

<a href="https://wa.me/56995928447" class="whatsapp-btn" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-whatsapp"></i>
</a>

<a href="https://www.instagram.com/comoelajo/" class="instagram-btn" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-instagram"></i>
</a>

<a href="https://www.linkedin.com/company/comoelajo/" class="linkedin-btn" target="_blank" rel="noopener noreferrer">
    <i class="bi bi-linkedin"></i>
</a>
