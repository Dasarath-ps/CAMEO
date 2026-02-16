<<<<<<< HEAD
<!--<div class="chatbot">
  <div class="chat-header">Tech Fest Bot 🤖</div>
  <div class="chat-messages" id="chatMessages"></div>
  <div class="chat-input">
    <input type="text" id="userInput" placeholder="Ask about events, prizes..." />
    <button onclick="sendMessage()">Send</button>
  </div>
</div>
 Floating Chat Button -->
<button id="chatToggle" class="fixed bottom-6 right-6 w-14 h-14 rounded-full bg-cyan-400 text-black text-2xl shadow-lg hover:scale-110 transition-all z-50">
    💬
</button>
<!-- Chat Window -->
<div id="chatWindow" class="fixed bottom-24 right-6 w-80 bg-black/90 backdrop-blur-xl border border-cyan-400/30 rounded-2xl shadow-2xl p-4 hidden z-50">

    <!-- Header -->
    <div class="flex justify-between items-center mb-3 border-b border-white/10 pb-2">
        <h3 class="text-cyan-400 font-bold">Fest Assistant</h3>
        <button id="closeChat" class="text-slate-400 hover:text-white">✖</button>
    </div>

    <!-- Messages -->
    <div id="chatMessages" class="h-60 overflow-y-auto text-sm text-slate-300 mb-3 space-y-1">
        <p><b>Bot:</b> Hello! Ask me about events 🚀</p>
    </div>

    <!-- Input -->
    <div class="flex gap-2">
        <input 
            id="userInput" 
            type="text" 
            placeholder="Type a message..." 
            class="flex-1 bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-sm text-white focus:outline-none"
            onkeypress="if(event.key==='Enter') sendMessage()"
        >
        <button onclick="sendMessage()" class="px-4 bg-cyan-400 text-black rounded-lg text-sm font-bold">
            Send
        </button>
    </div>

</div>

=======
<!--<div class="chatbot">
  <div class="chat-header">Tech Fest Bot 🤖</div>
  <div class="chat-messages" id="chatMessages"></div>
  <div class="chat-input">
    <input type="text" id="userInput" placeholder="Ask about events, prizes..." />
    <button onclick="sendMessage()">Send</button>
  </div>
</div>
 Floating Chat Button -->
<button id="chatToggle" class="fixed bottom-6 right-6 w-14 h-14 rounded-full bg-cyan-400 text-black text-2xl shadow-lg hover:scale-110 transition-all z-50">
    💬
</button>
<!-- Chat Window -->
<div id="chatWindow" class="fixed bottom-24 right-6 w-80 bg-black/90 backdrop-blur-xl border border-cyan-400/30 rounded-2xl shadow-2xl p-4 hidden z-50">

    <!-- Header -->
    <div class="flex justify-between items-center mb-3 border-b border-white/10 pb-2">
        <h3 class="text-cyan-400 font-bold">Fest Assistant</h3>
        <button id="closeChat" class="text-slate-400 hover:text-white">✖</button>
    </div>

    <!-- Messages -->
    <div id="chatMessages" class="h-60 overflow-y-auto text-sm text-slate-300 mb-3 space-y-1">
        <p><b>Bot:</b> Hello! Ask me about events 🚀</p>
    </div>

    <!-- Input -->
    <div class="flex gap-2">
        <input 
            id="userInput" 
            type="text" 
            placeholder="Type a message..." 
            class="flex-1 bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-sm text-white focus:outline-none"
            onkeypress="if(event.key==='Enter') sendMessage()"
        >
        <button onclick="sendMessage()" class="px-4 bg-cyan-400 text-black rounded-lg text-sm font-bold">
            Send
        </button>
    </div>

</div>

>>>>>>> 9cbf00501787b6805e108586ce3cf4674d688d9f
