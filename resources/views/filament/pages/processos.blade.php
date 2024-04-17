<x-filament-panels::page>
    <div>
        <form wire:submit.prevent="getProcesso" >
        <label class="flex gap-2">
            <span></span>
            <input type="text" name="cnj" wire:model="cnj" class="w-full rounded-lg focus:border-primary focus:border-2" placeholder="Digite o CNJ para efetuar pesquisa do Processo"/>
            <button type="submit" class="bg-primary p-2 text-bold text-xl rounded-lg">Pesquisar</button>
        </label>
        </form>

        @foreach($data as $row)
            <span class="text-2xl font-black">{{$row}}</span>
        @endforeach
    </div>

</x-filament-panels::page>
