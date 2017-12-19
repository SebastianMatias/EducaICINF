var counter = 0;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("Tu limite de opciones son " + counter + "");
     }
     else {
          var newdiv = document.createElement('input');
          var newdiv2 = document.createElement('input');
          newdiv.setAttribute("type", "text");
          newdiv.setAttribute("name", "pregunta"+(counter + 1)+"");
          newdiv.setAttribute("size", "35");
          newdiv.setAttribute("class","form-control-input-sm text-center");
          document.getElementById("dynamicInput").appendChild(newdiv);
          newdiv2.setAttribute("type", "text");
          newdiv2.setAttribute("name", "respuesta"+(counter + 1)+"");
          newdiv2.setAttribute("class","form-control-input-sm text-center");
          newdiv2.setAttribute("size", "35");
          document.getElementById("dynamicInput").appendChild(newdiv2);

          counter++;
          //console.log(counter++);
     }
}

var counter2 = 0;
var limit2 = 10;
function addInput2(divName){
     if (counter2 == limit2)  {
          alert("Tu limite de opciones son " + counter2 + "");
     }
     else {
          var sino = document.createElement('input');
          var res = document.createElement('input');
          var palabra = document.createElement('input');
          palabra.setAttribute("type", "text");
          palabra.setAttribute("name", "palabra"+(counter2 + 1)+"");
          palabra.setAttribute("class","form-control-input-sm text-center");
          palabra.setAttribute("size", "20");
          document.getElementById("dynamicInput2").appendChild(palabra);
          sino.setAttribute("type", "text");
          sino.setAttribute("name", "sinonimo"+(counter2 + 1)+"");
          sino.setAttribute("size", "20");
          sino.setAttribute("class","form-control-input-sm text-center");
          document.getElementById("dynamicInput2").appendChild(sino);
          res.setAttribute("type", "text");
          res.setAttribute("name", "respuesta"+(counter2 + 1)+"");
          res.setAttribute("class","form-control-input-sm text-center");
          res.setAttribute("size", "20");
          document.getElementById("dynamicInput2").appendChild(res);


          counter2++;
     }
}
