<style>
    /* Default (mobile first) */
    .site-logo {
        height: 40px;   /* small on mobile */
        width: auto;
    }

    /* Tablet & Laptop */
    @media (min-width: 768px) {
        .site-logo {
            height: 40px;  /* bigger on laptops */
        }
    }

    /* Large screens (big desktops) */
    @media (min-width: 1200px) {
        .site-logo {
            height: 60px; /* even larger if needed */
        }
    }
    .whatsapp-btn {
        background: white;
        color: blue;
        padding: 10px 14px;
        border-radius: 50%;
        font-size: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: 0.3s;
    }
</style>