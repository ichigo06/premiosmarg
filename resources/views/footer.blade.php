<footer>

</footer>
@livewireScripts
@yield('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script>
    //creamos variableas array para cada departamento
var departamentos_Lima = ["Ancón", "Callao" , "Ate" , "Barranco" , "Breña" , "Carabayllo" , "Cercado de Lima" , "Chaclacayo" , "Chorrillos" , "Cienegilla" , "Comas" , "El agustino" , "Independencia" , "Jesus María" , "La molina" , "La victoria" , "Lince" , "Los olivos" , "Lurigancho" , "Lurín" , "Magdalena del mar" , "Miraflores" , "Pachacámac" , "Pucusana" , "Pueblo libre" , "Puente piedra" , "Punta hermosa" , "Punta negra" , "Rímac" , "San bartolo" , "San borja" , "San isidro" , "San Juan de Lurigancho" , "San Juan de Miraflores" , "San Luis" , "San Martin de Porres" , "San Miguel" , "Santa Anita" , "Santa María del Mar" , "Santa Rosa" , "Santiago de Surco" , "Surquillo" , "Villa el Salvador" , "Villa Maria del Triunfo"];var departamentos_Lima = ["Ancón", "Callao" , "Ate" , "Barranco" , "Breña" , "Carabayllo" , "Cercado de Lima" , "Chaclacayo" , "Chorrillos" , "Cienegilla" , "Comas" , "El agustino" , "Independencia" , "Jesus María" , "La molina" , "La victoria" , "Lince" , "Los olivos" , "Lurigancho" , "Lurín" , "Magdalena del mar" , "Miraflores" , "Pachacámac" , "Pucusana" , "Pueblo libre" , "Puente piedra" , "Punta hermosa" , "Punta negra" , "Rímac" , "San bartolo" , "San borja" , "San isidro" , "San Juan de Lurigancho" , "San Juan de Miraflores" , "San Luis" , "San Martin de Porres" , "San Miguel" , "Santa Anita" , "Santa María del Mar" , "Santa Rosa" , "Santiago de Surco" , "Surquillo" , "Villa el Salvador" , "Villa Maria del Triunfo"];
var departamentos_Amazonas = [""];
var departamentos_Ancash = [""];
var departamentos_Apurimac = [""];
var departamentos_Arequipa = [""];
var departamentos_Ayacucho = [""];
var departamentos_Cajamarca = [""];
var departamentos_Callao = [""];
var departamentos_Cusco = [""];
var departamentos_Huancavelica = [""];
var departamentos_Huanuco = [""];
var departamentos_Ica = [""];
var departamentos_Junin = [""];
var departamentos_La_Libertad = [""];
var departamentos_Lambayeque = [""];
var departamentos_Loreto = [""];
var departamentos_Madre_de_Dios = [""];
var departamentos_Moquegua = [""];
var departamentos_Pasco = [""];
var departamentos_Piura = [""];
var departamentos_Puno = [""];
var departamentos_San_Martin = [""];
var departamentos_Tacna = [""];
var departamentos_Tumbes = [""];
var departamentos_Ucayali = [""];


// let dpti = document.querySelector('.departament');
// dpti.addEventListener('change' , cambia_departamento)
function cambia_departamento(){
 //tomamos el valor del select departamento elegido
 var dpt
 dpt = document.getElementById('departamentos').value	
     mis_dptos = acentos(dpt)
     // verificamos si el Departamento está definido

if (mis_dptos!=0) { 
      	 //si estaba definido, entonces coloco las opciones del Departamento correspondiente. 
      	 //selecciono el array del departamento adecuado 
      	 mis_municipios=eval("departamentos_"+mis_dptos) 
      	  //calculo el numero de municipios 
      	 num_municipios = mis_municipios.length 
      	 //marco el número de municipios en el select 
      	 document.f1.minucipios.length = num_municipios 
      	 //para cada municipio del array, lo introduzco en el select 
      	 for(i=0;i<num_municipios;i++){ 
         	 document.f1.minucipios.options[i].value=mis_municipios[i] 
         	 document.f1.minucipios.options[i].text=mis_municipios[i] 
      	 }	
   	    }else{ 
      	 //si no había municipio seleccionado, elimino los municipios del select 
      	 document.f1.minucipios.length = 1 
      	 //coloco un guión en la única opción que he dejado 
      	 document.f1.minucipios.options[0].value = " " 
      	 document.f1.minucipios.options[0].text = "SIN ASIGNAR" 
   	   } 
   	}// FIN DE FUNCIONcambia_departamento

   function acentos(dpt){
   var acentuada
   let content = document.querySelector(".select-jugger")
   let select = document.querySelector('.add-select');
   let select2 = document.querySelector('.add-text');
   

   		if(dpt=="Amazonas" || dpt=="Áncash" || dpt=="Arequipa" || dpt=="Ayacucho" || dpt=="Cajamarca" || dpt=="Callao" || dpt=="Cusco" || dpt=="Huancavelica" || dpt=="Huánuco" || dpt=="Ica" || dpt=="Junín" || dpt=="La Libertad" || dpt=="Lambayeque" || dpt=="Loreto" || dpt=="Madre de Dios" || dpt=="Madre de Dios" || dpt=="Moquegua" || dpt=="Pasco" || dpt=="Piura" || dpt=="Puno" | dpt=="Tacna" | dpt=="Tumbes" | dpt=="Ucayali" || dpt=="Apurímac" )  { 
			const scriptHTML = `<input type="text"" name="distrito" placeholder="Agregue el distrito"></div>`;
   			content.innerHTML = scriptHTML;
			} else {
			const scriptHTML = `<input name="distrito" type="hidden" id="select-c"></input><select name="" id="minucipios" class="select2-city select-city w-100 add-select"><option value="0"></option></select>`;
			content.innerHTML = scriptHTML;
			acentuada=dpt;
		}
	
   	
   	
   		
return  acentuada

}// fin funcion acentos
</script>
<script>
$('.select2-departament').select2();

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
  	$(document).on('change','#zone-select',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#zone').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});

$(function(){
  	$(document).on('change','.select-departament-2',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#select-d').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});

$(function(){
  	$(document).on('change','#zone-select',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#zone').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
});

$(function(){
  	$(document).on('change','.select-city',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#select-c').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
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