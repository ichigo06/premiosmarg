<div>
    <div class="pb-3">
        <div wire:ignore>
            <input   wire:ignore id="typeclient2"  name="id_consumers_sales" value="1" type="hidden">
            <select wire:model="selectedCustomers" class="select2 form-control select-type2"  id="selectedCustomers">
                <option value="0">Seleccionar cliente MARG</option>
            @foreach($consumers as $consumer)
                <option value="{{ $consumer->id }}">{{ $consumer->cliente }}</option>
            @endforeach 
            </select>
        </div>
    </div>
    <form class="form-control-marg" action="{{ url('/sales') }}" method="post">
            {{ csrf_field() }}
        @if(!is_null($users))
        <div class="pb-3"> 
                <div>
                    Fecha de venta
                    <input type="date" class="date-picker-official">
                </div>
                @foreach($users as $user)
                    <div class="line-before">
                        @if($errors->has('id_consumers_sales'))
                            <span class="error text-danger">{{$errors->first('id_consumers_sales') }}</span>
                        @endif
                        <div>
                            <input   type="hidden" name="id_consumers_sales[]" value="{{ $user->id_consumers }}">{{ $user->consumers->cliente }}
                        </div>
                        <div>
                            <input type="hidden" value="{{ $user->id }}" name="id_users_sales[]">{{ $user->name }}
                        @if($errors->has('create_at'))
                            <span class="error text-danger">{{$errors->first('create_at') }}</span>
                        @endif 
                        </div>
                        <div>
                            <input type="hidden" class="date-picker" name="created_at[]">
                        </div>
                        <div>
                            @if($errors->has('venta'))
                                <span class="error text-danger">{{$errors->first('venta') }}</span>
                            @endif  
                            <input type="text" name="venta[]" placeholder="Venta del usuario" value=""> 
                        </div>
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
            .line-before {
                position: relative;
                margin-bottom: 20px;
            }
            .line-before::before { 
                content: "";
                position: absolute;
                bottom: 0;
                width: 96%;
                background: #2A81B4;
                padding: 2px;
            }
        </style>
</div>
        
