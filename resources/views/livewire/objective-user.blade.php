<div>
    <div wire:ignore class="pb-3">
        <div wire:ignore>
            <input  id="typeclient2"  name="id_consumers_sales" value="1" type="hidden">
            <select wire:model="selectedCustomers" class="select2 form-control select-type2">
                <option value="0">Seleccionar cliente MARG</option>
            @foreach($consumers as $consumer)
                <option value="{{ $consumer->id }}">{{ $consumer->cliente }}</option>
            @endforeach 
            </select>
        </div>
    </div>
    <form class="form-control-marg" action="{{ url('/objective') }}" method="post">
            {{ csrf_field() }}
        @if(!is_null($users))
        <div class="pb-3"> 
                @foreach($users as $user)
                    <div>
                       <p class="m-0">{{ $user->consumers->cliente }}</p>
                    </div>
                    <div>
                        <input type="hidden" value="{{ $user->id }}" name="id_objective[]">{{ $user->name }}
                    </div>
                    <div>
                        @if($errors->has('objective'))
                            <span class="error text-danger">{{$errors->first('id_objective') }}</span>
                        @endif  
                        <input type="text" name="objective[]" placeholder="Objetivo del usuario" value=""> 
                    </div>
                @endforeach
            @endif
            <div>
                <input  class="button" type="submit" value="Agregar">
            </div>
        </form>
        <script>
            document.addEventListener('livewire:load', function(){
                $('.select2').select2();
                $('.select2').on('change' , function(){
                    @this.set('selectedCustomers' , this.value);
                })
            })
        </script>
        <style>
            .select2 {
                background: #2A81B4;
                padding: 20px;
                width: 100%;
                justify-content: center;
            }
        </style>
</div>

