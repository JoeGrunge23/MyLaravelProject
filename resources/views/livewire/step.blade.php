<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4"> Add steps if required</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-2 cursor-pointer"></span>
    </div>
    @foreach ($steps as $step)

    <div class="flex justify-center py-2">
        <input type="text" name="step[]" class="py-3  px-3 rounded border" placeholder="{{'Describe Step' . $step }}"/>
        <span wire:click="remove({{$loop->index }})" class = "fas fa-times text-red-500  p-2  cursor-pointer"></span>
    </div>

    @endforeach
    {{-- {{$steps}} --}}


</div>
