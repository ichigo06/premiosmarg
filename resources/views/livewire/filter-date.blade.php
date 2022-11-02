@role('Vendedor')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-4" wire:ignore>
                    <h2 class="pb-3" wire:ignore>Objetivos del mes</h2>
                    <div class='selectBox' wire:ignore>
                        <span class='selected' wire:ignore></span>
                        <span class='selectArrow' wire:ignore>&#9660</span>
                        <div class="selectOptions"  wire:ignore>
                            <span  wire:ignore class="selectOption" value="Option 1">
                                <input  style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Seleccionar Mes"></input>
                            </span>
                            <span  wire:ignore class="selectOption" value="Option 1">
                                <input wire:click="selectEnero" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Enero"></input>
                            </span>
                            <span wire:ignore class="selectOption" value="Option 2">
                                <input wire:click="selectFebrero"  style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Febrero"></input>
                            </span> 
                            <span  wire:ignore class="selectOption" value="Option 3">
                                <input  wire:click="selectMarzo"  style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Marzo"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 4">
                                <input wire:click="selectAbril" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Abril"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 5">
                                <input wire:click="selectMayo" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Mayo"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 6">
                                <input wire:click="selectJunio" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Junio"></input>
                            </span>
                            <span  wire:ignore class="selectOption" value="Option 7">
                                <input wire:click="selectJulio" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Julio"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 8">
                                <input wire:click="selectAgosto" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Agosto"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 9">
                                <input wire:click="selectSeptiembre" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Septiembre"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 10">
                                <input wire:click="selectOctubre" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Octubre"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 11">
                                <input wire:click="selectNoviembre" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Noviembre"></input>
                            </span>
                            <span wire:ignore  class="selectOption" value="Option 12">
                                <input wire:click="selectDiciembre" style="width:100%; background:#0d6efd; border: 0px; display: flex; justify-content: center; color: #ffffff" type="button" value="Diciembre"></input>
                            </span>
                        </div>
                    </div>
                    <div class="select-month">
                        
                    </div>
                </div>
                <div class="col-12 col-md-6" wire:ignore> 
                    <img width="100%" src="{{ asset('img/ventasincrementadas.jpg') }}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="date_information">
                        Local: <span>{{ Auth::user()->consumers->cliente }}</span>
                    </div>
                    <div class="date_information">
                        Mi identificación: <span> {{ Auth::user()->dni }}</span>
                    </div>
                    <div class="date_information">
                        Mis ingresos: <span> S/. {{ $monto }}</span>
                    </div>
                    <div class="date_information">
                        Objetivo del mes: <span>S./ {{ $objective }}</span> 
                    </div>
                    <div class="date_information">
                        Premio Marg: <span> Canasta Marg</span> 
                    <div class="date_information">
                        Tu avance del mes:
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: @if ($objective) {{ $monto*100/$objective }} @endif%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">S/. {{ $monto }}</div>
                    </div>
                    <div class="date_information">
                        Tu objetivo del mes:
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> S./ {{ $objective }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        div.selectBox {
            position:relative;
            display:inline-block;
            cursor:default;
            text-align:left;
            line-height:30px;
            clear:both;
            color:#888;
        }
        span.selected {
            width:167px;
            text-indent:20px;
            border:1px solid #ccc;
            border-right:none;
            border-top-left-radius:5px;
            border-bottom-left-radius:5px;
            background:#fff;
            overflow:hidden;
        }
        span.selectArrow {
            width:30px;
            border-right:1px solid #ccc;
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
            border-top-right-radius:5px;
            border-bottom-right-radius:5px;
            text-align:center;
            font-size:10px;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
            background:#fff;
        }
        
        span.selectArrow,span.selected {
            position:relative;
            float:left;
            height:30px;
            z-index:1;
        }
        div.selectOptions {
            position:absolute;
            top:28px;
            left:0;
            width:198px;
            border:1px solid #ccc;
            border-bottom-right-radius:5px;
            border-bottom-left-radius:5px;
            overflow:hidden;
            background:#fff;
            padding-top:2px;
            display:none;
        }
            
        span.selectOption {
            display:block;
            width:100%;
            line-height:20px;
            padding:5px 10%;
        }
        
        span.selectOption:hover {
            color:#f6f6f6;
            background:#000; 
        /*     opacity:0.5; */
        }       
    </style>
    <script>
        
            document.addEventListener('livewire:load', function(){
                

                $('div.selectBox').each(function() {
                    $(this).children('span.selected,span.selectArrow').click(function() {
                    if ($(this).parent().children('div.selectOptions').css('display') == 'none') {
                        $(this).parent().children('div.selectOptions').css('display', 'block');
                    } else {
                        $(this).parent().children('div.selectOptions').css('display', 'none');
                    }
                    });

                    $(this).children('span.selected').html($(this).children('div.selectOptions').children('span.selectOption:first').html());
                    $(this).attr('value', $(this).children('div.selectOptions').children('span.selectOption:first').attr('value'));

                    $(this).find('span.selectOption').click(function() {
                    $(this).parent().css('display', 'none');
                    $(this).closest('div.selectBox').attr('value', $(this).attr('value'));
                    $(this).parent().siblings('span.selected').html($(this).html());
                    });
                });
                
                $('.selectOption input').on('click' , function(){
                    @this.set('selectEnero' , this.value);
                })
            })
    </script>
</div>
@endrole