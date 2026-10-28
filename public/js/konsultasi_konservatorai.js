document.addEventListener('DOMContentLoaded', function () {
    const chatForm = document.getElementById('chatForm');
    const chatInput = document.getElementById('chatInput');
    const chatMessages = document.getElementById('chatMessages');
    const promptCards = document.querySelectorAll('.prompt-card');
    const btnNewChat = document.getElementById('btnNewChat');
    const btnSend = document.getElementById('btnSend');

    // Array Penyimpanan History Chat Lokal
    let chatHistory = [];

    // Append Bubble ke Chat Window
    function appendBubble(role, text) {
        const bubble = document.createElement('div');
        bubble.classList.add('chat-bubble');
        bubble.classList.add(role === 'user' ? 'chat-bubble-user' : 'chat-bubble-model');
        bubble.textContent = text;

        chatMessages.appendChild(bubble);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        return bubble;
    }

    // Kirim Pesan ke Backend Laravel
    async function sendMessage(messageText) {
        if (!messageText.trim()) return;

        // Render Bubble User
        appendBubble('user', messageText);
        chatInput.value = '';
        chatInput.disabled = true;
        btnSend.disabled = true;

        // Indicator Loading AI
        const loadingBubble = appendBubble('model', 'Sedang memikirkan jawaban...');

        try {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const response = await fetch(window.routes.chatbotSend, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    message: messageText,
                    history: chatHistory
                })
            });

            const data = await response.json();

            // Hapus Indikator Loading
            chatMessages.removeChild(loadingBubble);

            if (data.reply) {
                appendBubble('model', data.reply);

                if (data.success) {
                    // Simpan ke Riwayat Obrolan Sesi Ini
                    chatHistory.push({ role: 'user', content: messageText });
                    chatHistory.push({ role: 'assistant', content: data.reply });
                }
            } else {
                appendBubble('model', 'Maaf, tidak menerima respons dari server.');
            }

        } catch (error) {
            chatMessages.removeChild(loadingBubble);
            appendBubble('model', 'ERR_CONNECTION: Gagal terhubung ke server chatbot.');
            console.error(error);
        } finally {
            chatInput.disabled = false;
            btnSend.disabled = false;
            chatInput.focus();
        }
    }

    // Event Listener Form Submit
    if (chatForm) {
        chatForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const message = chatInput.value.trim();
            sendMessage(message);
        });
    }

    // Event Listener Quick Prompts
    promptCards.forEach(card => {
        card.addEventListener('click', function () {
            const promptText = this.querySelector('p').innerText;
            sendMessage(promptText);
        });
    });

    // Event Listener Obrolan Baru
    if (btnNewChat) {
        btnNewChat.addEventListener('click', function () {
            chatMessages.innerHTML = '';
            chatHistory = [];
            appendBubble('model', 'Sesi obrolan telah diperbarui. Ada yang bisa saya bantu terkait restorasi dan preservasi arsip Anda?');
            chatInput.focus();
        });
    }
});
