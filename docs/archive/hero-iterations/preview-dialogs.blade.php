<dialog id="menu-dialog" class="contact-dialog" aria-labelledby="menu-dialog-title" @click="if ($event.target === $el) closeDialog($el)">
    <div class="dialog-content">
        <button type="button" class="dialog-close" @click="closeDialog($el.closest('dialog'))" aria-label="Close menu preview"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m5 5 14 14M19 5 5 19"/></svg></button>
        <h2 id="menu-dialog-title">Something for<br>every appetite.</h2>
        <p>Tandoori, curries, street food and more. Browse the supplied dine-in menu proof.</p>
        <p class="source-note">Print proof: prices, options and availability need restaurant confirmation. This is a design preview.</p>
        <a class="button-primary" href="{{ route('menu-proof') }}" target="_blank" rel="noopener">Open menu proof <x-arrow /><span class="sr-only">(PDF, opens in a new tab)</span></a>
    </div>
</dialog>
<dialog id="catering-dialog" class="contact-dialog" aria-labelledby="catering-dialog-title" @click="if ($event.target === $el) closeDialog($el)">
    <div class="dialog-content">
        <button type="button" class="dialog-close" @click="closeDialog($el.closest('dialog'))" aria-label="Close catering details"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m5 5 14 14M19 5 5 19"/></svg></button>
        <h2 id="catering-dialog-title">More around<br>the table.</h2>
        <p>The printed menu advertises catering. Call to discuss your gathering and confirm the available arrangements.</p>
        <a class="dialog-phone" href="tel:+19055541819">905 554 1819 <x-arrow /></a>
        <p class="source-note">Telephone from the supplied print proof; current details need restaurant confirmation.</p>
    </div>
</dialog>
<dialog id="visit-dialog" class="contact-dialog" aria-labelledby="visit-dialog-title" @click="if ($event.target === $el) closeDialog($el)">
    <div class="dialog-content">
        <button type="button" class="dialog-close" @click="closeDialog($el.closest('dialog'))" aria-label="Close visit details"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m5 5 14 14M19 5 5 19"/></svg></button>
        <h2 id="visit-dialog-title">Find us<br>in Markham.</h2>
        <address>160 New Delhi Drive<br>Markham, ON L3S 0B5</address>
        <a class="dialog-phone" href="tel:+19055541819">905 554 1819 <x-arrow /></a>
        <p class="source-note">Address and telephone from the supplied menu proof. Hours and current location details await restaurant confirmation.</p>
    </div>
</dialog>
