<!-- Bottom Navigation for Mobile -->
<div class="fixed bottom-4 left-4 right-4 z-50 md:hidden flex justify-center">
    <div class="button-container flex items-center justify-around bg-primary-500 w-[280px] h-[50px] rounded-xl shadow-[0_5px_15px_rgba(0,0,0,0.35),5px_10px_15px_rgba(219,39,119,0.5)]">
        <!-- Home Button -->
        <a href="{{ route('home') }}" class="button w-[40px] h-[40px] rounded-full bg-transparent flex items-center justify-center text-white hover:-translate-y-1 transition-all duration-300">
            <svg class="icon w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
            </svg>
        </a>
        
        <!-- Products Button -->
        <a href="{{ route('products.index') }}" class="button w-[40px] h-[40px] rounded-full bg-transparent flex items-center justify-center text-white hover:-translate-y-1 transition-all duration-300">
            <svg class="icon w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20 7h-3V6a4 4 0 0 0-4-4h-2a4 4 0 0 0-4 4v1H4a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1zM9 6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1H9V6zm9 13a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h6v1a1 1 0 0 0 2 0V9h2v10z"/>
            </svg>
        </a>
               
        <!-- Categories Button -->
        <a href="{{ route('categories.index') }}" class="button w-[40px] h-[40px] rounded-full bg-transparent flex items-center justify-center text-white hover:-translate-y-1 transition-all duration-300">
            <svg class="icon w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
            </svg>
        </a>
        
        <!-- Help/WhatsApp Button -->
        <a href="https://wa.me/917510573841" target="_blank" class="button w-[40px] h-[40px] rounded-full bg-transparent flex items-center justify-center text-white hover:-translate-y-1 transition-all duration-300">
            <svg class="icon w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
            </svg>
        </a>
    </div>
</div>
