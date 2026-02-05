<style>
    /* Sidebar Card Padding */
    .srinika-sidebar-card {
        background: #ffffff;
        padding: 30px !important;
        border-radius: 24px !important;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* Large Vertical Button Group */
    .srinika-sidebar-filters-large {
        display: flex;
        flex-direction: column;
        /* Buttons okadanti kindha okati vastayi */
        gap: 12px;
        margin-top: 15px;
    }

    .s-large-btn {
        width: 100%;
        padding: 14px 20px;
        font-size: 0.95rem;
        font-weight: 700;
        text-align: left;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        border-radius: 14px;
        color: #475569;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .s-large-btn i {
        font-size: 1.2rem;
        color: var(--electric-blue);
        transition: 0.3s;
    }

    /* Active State - Srinika Brand Color */
    .s-large-btn.active {
        background: var(--electric-blue);
        color: #ffffff;
        border-color: var(--electric-blue);
        box-shadow: 0 8px 20px rgba(14, 165, 233, 0.25);
    }

    .s-large-btn.active i {
        color: #ffffff;
    }

    .s-large-btn:hover:not(.active) {
        background: #f0f9ff;
        border-color: var(--electric-blue);
        transform: translateX(5px);
    }

    /* Item Animation */
    .s-item {
        display: block;
        animation: fadeIn 0.4s ease forwards;
    }

    .s-item.hidden {
        display: none;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>



<div class="ul-service-details-sidebar">
    <div class="ul-service-details-sidebar-widget srinika-sidebar-card">
        <span class="ul-service-details-sidebar-widget-title">
            <button class="s-large-btn " onclick="sidebarFilter('all', this)">
                <i class="fa-solid fa-grid-2"></i> All Services
            </button>
        </span>

        <div class="srinika-sidebar-filters-large">

            <button class="s-large-btn" onclick="sidebarFilter('audiology', this)">
                <i class="fa-solid fa-ear-listen"></i> Audiology
            </button>
            <button class="s-large-btn" onclick="sidebarFilter('speech', this)">
                <i class="fa-solid fa-comment-dots"></i> Speech Therapy
            </button>
            <button class="s-large-btn" onclick="sidebarFilter('hearing', this)">
                <i class="fa-solid fa-microchip"></i> Hearing Aids
            </button>
        </div>

        <hr class="my-3 opacity-10">

        <ul class="ul-service-details-sidebar-links" id="sidebar-service-list">
            <li><a class="dropdown-item" href="#">Pure Tone Audiometry</a></li>
            <li class="s-item audiology"><a href="#">Pure Tone Audiometry <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">Impedance Audiometry <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">BERA / OAE Test <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">Tinnitus Management <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">Pure Tone Audiometry <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">Impedance Audiometry <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">BERA / OAE Test <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item audiology"><a href="#">Tinnitus Management <i class="fa-solid fa-chevron-right"></i></a></li>


            <li class="s-item speech"><a href="#">Speech Assessment <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Autism / ADHD Care <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Stammering Therapy <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Voice Disorders <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Speech Assessment <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Autism / ADHD Care <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Stammering Therapy <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item speech"><a href="#">Voice Disorders <i class="fa-solid fa-chevron-right"></i></a></li>

            <li class="s-item hearing"><a href="#">BTE / RIC Models <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">Invisible (IIC) Aids <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">Rechargeable Aids <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">Aids Repair & Service <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">BTE / RIC Models <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">Invisible (IIC) Aids <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">Rechargeable Aids <i class="fa-solid fa-chevron-right"></i></a></li>
            <li class="s-item hearing"><a href="#">Aids Repair & Service <i class="fa-solid fa-chevron-right"></i></a></li>

        </ul>
    </div>
</div>

<script>
    function sidebarFilter(category, btn) {
        // 1. All buttons nundi active class teesi, click chesina button ki add cheyali
        const buttons = document.querySelectorAll('.s-large-btn');
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // 2. Anni list items select cheyali
        const items = document.querySelectorAll('.s-item');

        items.forEach(item => {
            if (category === 'all') {
                item.classList.remove('hidden');
            } else {
                // Category match ayithe chupinchu, lekapothe hide chey
                if (item.classList.contains(category)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            }
        });
    }
</script>