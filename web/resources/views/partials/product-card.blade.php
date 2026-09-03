<article class="w-full bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-space-xs">
<div class="relative w-full aspect-square rounded-lg bg-[#FAF6F0] overflow-hidden">
@if($product->image)
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $product->name }}" src="{{ $product->image }}"/>
@else
<div class="w-full h-full flex items-center justify-center text-surface-dim"><span class="material-symbols-outlined text-[64px]">fastfood</span></div>
@endif
<div class="absolute top-2 left-2 flex flex-col gap-1">
@if($product->badge)
<span class="px-2 py-0.5 rounded bg-primary text-on-primary font-label-sm text-label-sm uppercase tracking-wider font-bold">{{ $product->badge }}</span>
@endif
<span class="px-2 py-0.5 rounded bg-secondary text-on-secondary font-label-sm text-label-sm uppercase font-bold flex items-center gap-0.5">
<span class="material-symbols-outlined text-[12px]">verified</span> Halal
</span>
</div>
</div>
<div class="flex items-center justify-between text-body-sm text-on-surface-variant mt-space-2xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">{{ $product->category->name }}</span>
@if($product->weight_label)
<span class="font-label-sm text-label-sm flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">scale</span> {{ $product->weight_label }}</span>
@endif
</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-1">{{ $product->name }}</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">{{ $product->description }}</p>
</div>
<div class="mt-space-md pt-space-xs flex flex-col gap-space-xs">
<div class="flex items-baseline justify-between">
<span class="font-title-lg text-title-lg text-primary font-bold">{{ $product->formatted_price }}</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">{{ $product->usd_price }}</span>
</div>
<a class="w-full inline-flex items-center justify-center gap-space-2xs bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded-lg font-label-md text-label-md transition-all shadow-sm" href="{{ $product->wa_url }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span> Tanya via WhatsApp
</a>
<a class="w-full py-space-2xs text-center font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('product.detail', $product) }}">Lihat Detail</a>
</div>
</article>
