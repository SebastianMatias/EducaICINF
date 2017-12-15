var counter = 1;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("Tu limite de opciones son " + counter + "");
     }
     else {
          var newdiv = document.createElement('input');
          var newdiv2 = document.createElement('input');
          newdiv.setAttribute("type", "text");
          newdiv.setAttribute("name", "myInputs[]");
          newdiv.setAttribute("size", "35");
          newdiv.setAttribute("id","'pregunta"+(counter + 1)+"");
          newdiv.setAttribute("class","form-control-input-sm text-center");
          document.getElementById("dynamicInput").appendChild(newdiv);
          newdiv2.setAttribute("type", "text");
          newdiv2.setAttribute("name", "myInputs[]");
          newdiv2.setAttribute("id","respuesta"+(counter + 1)+"");
          newdiv2.setAttribute("class","form-control-input-sm text-center");
          newdiv2.setAttribute("size", "35");
          document.getElementById("dynamicInput").appendChild(newdiv2);
          counter++;
          //console.log(counter++);
     }
}

var counter2 = 1;
var limit2 = 10;
function addInput2(divName){
     if (counter2 == limit2)  {
          alert("Tu limite de opciones son " + counter2 + "");
     }
     else {
          var afir = document.createElement('input');
          var sino = document.createElement('input');
          afir.setAttribute("type", "text");
          afir.setAttribute("name", "myInputs[]");
          afir.setAttribute("size", "35");
          afir.setAttribute("id","'palabra"+(counter + 1)+"");
          afir.setAttribute("class","form-control-input-sm text-center");
          document.getElementById("dynamicInput2").appendChild(afir);
          sino.setAttribute("type", "text");
          sino.setAttribute("name", "myInputs[]");
          sino.setAttribute("id","sinonimo"+(counter + 1)+"");
          sino.setAttribute("class","form-control-input-sm text-center");
          sino.setAttribute("size", "35");
          document.getElementById("dynamicInput2").appendChild(sino);
          counter2++;
     }
}
