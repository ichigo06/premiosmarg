<footer>

</footer>
@livewireScripts
@yield('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script>
$('.form-marg-client').select2();
$(function(){
  	$(document).on('change','.select-type',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#typeclient').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});
$(function(){
  	$(document).on('change','.select-type2',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#typeclient2').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});

$(function(){
  	$(document).on('change','.select-type3',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#typeclient3').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});
$(function(){
  	$(document).on('change','.select-type4',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#typeclient4').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});
$(function(){
  	$(document).on('change','.select-type5',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#typeclient5').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});

$(function(){
  	$(document).on('change','.date-picker-official',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('.date-picker').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});

let buttongenerate = document.querySelector('#sendText');

if(buttongenerate) {
  buttongenerate.addEventListener('click' , clickgenerate);
}

function clickgenerate() {
  let generate = document.querySelector('#dni').value;
  let password = document.querySelector('#password');
   password.value = generate;
}

let selectmonth = document.querySelectorAll(".select-month input");
selectmonth.forEach(item =>{
  item.addEventListener("click",_ =>{
    selectmonth.forEach(button =>{
      button.classList.remove("active-month");
    })
    item.classList.toggle("active-month");
  })
})
</script>
</body>