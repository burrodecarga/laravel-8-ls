<div>
    @livewire('user-skills-form')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="caja90 p-4">
           <h2 class="text-orange-900 text-xl sm:text-2xl font-bold">Particular Skills</h2>
           @livewire('knowledge-table')
        </div>

        <div class="caja90 p-4">
                    <h2 class="text-orange-900 text-xl sm:text-2xl font-bold">General Skills</h2>

    @livewire('skills-table')
     </div>
</div>
</div>
