<x-app-layout>
    <header class="flex justify-between bg-slate-200 items-center p-4">
        <h4 class="text-2xl">Débitos</h4>

        <x-form.button />
    </header>


    <section id="create-form" class="bg-slate-400 p-5">
        <form>
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <x-form.input.text label='Descrição'/>

                <x-form.input.float-value label='Valor' />

                <x-form.input.range />

                <x-form.select label='Descrição' :select-data="[2]" />

                <x-form.select label='Descrição' :select-data="[2]" />
            </div>
        </form>
    </section>
</x-app-layout>
