document.addEventListener('DOMContentLoaded', function () {
    const chatForm = document.getElementById('chatForm');
    const chatInput = document.getElementById('chatInput');
    const chatMessages = document.getElementById('chatMessages');
    const promptCards = document.querySelectorAll('.prompt-card');
    const btnNewChat = document.getElementById('btnNewChat');

    // Mengambil nomor WA dari window objek Blade
    const targetWa = window.waNumber || '6281234567890';

    // Fungsi Render Bubble Chat
    function appendBubble(role, text) {
        const bubble = document.createElement('div');
        bubble.classList.add('chat-bubble');
        bubble.classList.add(role === 'user' ? 'chat-bubble-user' : 'chat-bubble-model');
        bubble.textContent = text;

        chatMessages.appendChild(bubble);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Process Redirect ke WhatsApp
    function handleSendToWhatsApp(message) {
        if (!message.trim()) return;

        // Render bubble user di UI lokal
        appendBubble('user', message);

        // Format pesan WhatsApp
        const waTemplate = `Halo Asisten Konservator Arsip Care, saya ingin berkonsultasi mengenai:\n\n"${message}"`;
        const encodedText = encodeURIComponent(waTemplate);
        const waUrl = `https://wa.me/${targetWa}?text=${encodedText}`;

        // Kosongkan input
        chatInput.value = '';

        // Tampilkan bubble konfirmasi dari sistem
        setTimeout(() => {
            appendBubble('model', 'Mengarahkan Anda ke WhatsApp Konservator untuk melanjutkan obrolan...');
        }, 300);

        // Buka WhatsApp di tab baru
        setTimeout(() => {
            window.open(waUrl, '_blank');
        }, 800);
    }

    // Event Submit Form
    if (chatForm) {
        chatForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const message = chatInput.value.trim();
            handleSendToWhatsApp(message);
        });
    }

    // Event Klik Quick Prompt
    promptCards.forEach(card => {
        card.addEventListener('click', function () {
            const promptText = this.querySelector('p').innerText;
            handleSendToWhatsApp(promptText);
        });
    });

    // Event Obrolan Baru
    if (btnNewChat) {
        btnNewChat.addEventListener('click', function () {
            chatMessages.innerHTML = '';
            chatInput.value = '';
            chatInput.focus();
        });
    }
});
