  <html>
  <head>
  <style>
  table, th, td {
    /* border: 1px solid black; */
    border-collapse: collapse;
  }
  th, td {
    padding: 15px;
    text-align: left;
  }
  input[type=checkbox][disabled]{
 filter: invert(100%) hue-rotate(18deg) brightness(1.7);}
  </style>
<h2>PIZZA</h2>
 
<table>
  <tr>
    <td><img src="p.jpg"></td>
    <td><img src="p.jpg"></td>
    <td><img src="p.jpg"></td>
  </tr>
  <tr>
    <td>PIZZA 1</td>
    <td>PIZZA 2</td>
    <td>PIZZA 3</td>
  </tr>
  <tr>
    <td>$8</td>
    <td>$10</td>
    <td>$12</td>
  </tr>
  
  <tr>
    <td><input type="radio" name="pizza" value=8 onclick = "check()"></td>
    <td><input type="radio" name="pizza" value=10 onclick = "check()"></td>
    <td><input type="radio" name="pizza" value=12 onclick = "check()"></td>
  </tr>
</table>
<h2>SIZE</h2>
<table>
  <tr>
    <td><input type="radio" name="size" value="1" onclick = "check()"></td>
    <td><input type="radio" name="size" value="2" onclick = "check()"></td>
    <td><input type="radio" name="size" value="3" onclick = "check()"></td>
  </tr>
    <tr>
    <td>Small</td>
    <td>Medium</td>
    <td>Large</td>
  </tr>
  </table>
<h2>Toppings</h2>
<table>
  <tr>
    <td><input type="checkbox" name="topping" value="1" onclick = "check()">Avocado</td>
    <td><input type="checkbox" name="topping" value="2" onclick = "check()">Lobster</td>
    <td><input type="checkbox" name="topping" value="3" onclick = "check()">Bacon</td>
  </tr>
    <tr>
    <td><input type="checkbox" name="topping" value="1" onclick = "check()">Brocoli</td>
    <td><input type="checkbox" name="topping" value="2" onclick = "check()">Olyster</td>
    <td><input type="checkbox" name="topping" value="3" onclick = "check()">Duck</td>
  </tr>
      <tr>
    <td><input type="checkbox" name="topping" value="1" onclick = "check()">Onions</td>
    <td><input type="checkbox" name="topping" value="2" onclick = "check()">Salmon</td>
    <td><input type="checkbox" name="topping" value="3" onclick = "check()">Ham</td>
  </tr>
        <tr>
    <td><input type="checkbox" name="topping" value="1" onclick = "check()">Zucchini</td>
    <td><input type="checkbox" name="topping" value="2" onclick = "check()">Tuna</td>
    <td><input type="checkbox" name="topping" value="3" onclick = "check()">Sausage</td>
  </tr>
  </table>
  <h2>PRIZE</h2>
  <p id=prize></p>

  </head>
  </html>
  <script>
function check(){
var tot = 0; 
var pizzaz = document.getElementsByName('pizza');
var pizzaz_value;
for(var i = 0; i < pizzaz.length; i++){
    if(pizzaz[i].checked){
       pizzaz_value = pizzaz[i].value;
      tot = pizzaz_value;
    }
}
var sizes = document.getElementsByName('size');
var sizes_value;
for(var i = 0; i < sizes.length; i++){
    if(sizes[i].checked){
       sizes_value = sizes[i].value;
    }
}
  if(sizes_value>2){
    tot = parseInt(tot)+2;
  }else if(sizes_value<2){
  tot = parseInt(tot)-1;
}
  var toping = document.getElementsByName('topping');
  for (i=0;i<toping.length;i++){
  toping[i].disabled=false;
  if(pizzaz_value>10){
       toping[4].disabled=true;
       toping[5].disabled=true;
       toping[6].disabled=true;
       toping[8].disabled=true;
       toping[9].disabled=true;
       toping[11].disabled=true;
  }else if(pizzaz_value=10){
       toping[0].disabled=true;
       toping[7].disabled=true;
       toping[9].disabled=true;
       toping[11].disabled=true;
  }else if(pizzaz_value<10){
       toping[0].disabled=true;
       toping[4].disabled=true;
       toping[5].disabled=true;
       toping[6].disabled=true;
  } 
  if(toping[i].disabled){
    toping[i].checked=false;
  }}
var toping_value;
for(var i = 0; i < toping.length; i++){
    if(toping[i].checked){
       toping_value = toping[i].value;
      tot = parseInt(tot)+parseInt(toping_value);
    }
}
document.getElementById("prize").innerHTML = "$"+tot;

}
  </script>