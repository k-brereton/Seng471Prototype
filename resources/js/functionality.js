function toggleInteriorColor(x)
{
  x.style.border = 4px solid black;
  document.getElementById(document.getElementById("inside_color_id").innerHTML).border = 2px solid black;
  document.getElementById("inside_color_id").innerHTML = x.id;
  document.getElementById("info").innerHTML = x.id;
}
