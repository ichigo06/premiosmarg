@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pb-3 text-center">
                        <h2>Avances de los usuarios</h2>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-6 order-2">
                    <div class="pb-3 text-center">
                        <div class="select-month">
                            <div wire:click="selectEnero">
                                <input wire:ignore type="button" value="Enero"></input>
                            </div>
                            <div wire:click="selectFebrero">
                                <input wire:ignore type="button" value="Febrero"></input>
                            </div>
                            <div wire:click="selectMarzo">
                                <input wire:ignore type="button" value="Marzo"></input>
                            </div>
                            <div wire:click="selectAbril">
                                <input wire:ignore type="button" value="Abril"></input>
                            </div>
                            <div wire:click="selectMayo">
                                <input wire:ignore type="button" value="Mayo"></input>
                            </div>
                            <div wire:click="selectJunio">
                                <input wire:ignore type="button" value="Junio"></input>
                            </div>
                            <div wire:click="selectJulio">
                                <input wire:ignore type="button" value="Julio"></input>
                            </div>
                            <div wire:click="selectAgosto">
                                <input wire:ignore type="button" value="Agosto"></input>
                            </div>
                            <div wire:click="selectSeptiembre">
                                <input wire:ignore type="button" value="Septiembre"></input>
                            </div>
                            <div wire:click="selectOctubre">
                                <input wire:ignore type="button" value="Octubre"></input>
                            </div>
                            <div wire:click="selectNoviembre">
                                <input wire:ignore type="button" value="Noviembre"></input>
                            </div>
                            <div wire:click="selectDiciembre">
                                <input wire:ignore type="button" value="Diciembre"></input>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-6 order-1">
                    <div class="pb-3">
                        @if($errors->has('id_consumers_sales'))
                            <span class="error text-danger">{{$errors->first('id_consumers_sales') }}</span>
                        @endif
                        <div wire:ignore>
                            <input   wire:ignore id="typeclient2"  name="" value="1" type="hidden">
                            <select  wire:model ="selectedRuc" class="select2 form-control"  id="selectedCustomers">
                                <option value="0">Seleccionar cliente MARG</option>
                            @foreach($consumers as $consumer)
                                <option value="{{ $consumer->id }}">{{ $consumer->cliente }}</option>
                            @endforeach 
                            </select>
                        </div>
                        <div class="date_information pt-4">
                            @foreach($ruc as $item)
                            <div class="line-before">
                                @php
                                    $suma = 0;
                                    $suma2 =  0;
                                @endphp
                                <strong>Cliente:<strong><span>  {{ $item->name }} <br>
                                <strong>DNI:<strong> <span>  {{ $item->dni }} </span> <br>
                                    @foreach($item->sales as $items)
                                    @php
                                        $suma+=$items->venta;
                                    @endphp 
                                    @endforeach
                                    @foreach($item->objective as $items)
                                    @php
                                        $suma2+=$items->objective;
                                    @endphp 
                                    @endforeach
                                <strong>Ingresos:<strong><span>  {{ $suma }} <br>
                                <strong>Objetivo:<strong><span>  {{ $suma2 }} <br>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function(){
            $('.select2').select2();
            $('.select2').on('change' , function(){
                @this.set('selectedRuc' , this.value);
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
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .line-before::before { 
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            background: #2A81B4;
            padding: 2px;
        }
    </style>
</div>
@endrole