var menuPaginas=[];
function vul_menuPaginas()  {
  var qq = document.getElementsByClassName("txtName");
  var rr;
  for (var i = 0; i < qq.length ; i++) {
    rr = qq[i].innerText;
    menuPaginas.push(rr);
  }
  menuPaginas.push("Contact");
  menuPaginas.push("Intranet");
}


function vulModal()  {
  var ul = document.getElementById("modal-content-id");	
  for (var i = 0; i < menuPaginas.length; i++)  {
    var li = document.getElementById("li");
    if (li) {
      li.parentNode.removeChild(li);
    };
    var li = document.createElement("li");
    var ahref = document.createElement("a");
    var lineBreak = document.createElement("br");
    var pageTitle = (i + 1) + " - " + menuPaginas[i];
    ahref.appendChild(document.createTextNode(pageTitle));
    ahref.appendChild(lineBreak);
    ahref.setAttribute("href", "#");
    ahref.setAttribute("id", "ahrefId" + (i+1));
    ahref.setAttribute("class", "ahrefClass");
    var openPagNr = "openPage('d" + (i + 1) + "\')"
    ahref.setAttribute("onclick", openPagNr);
    ahref.classList.add("listClass");
    li.appendChild(ahref);
    li.setAttribute("id", "hbMenu" + (i+1));
    li.setAttribute("class", "hbClass");
    ul.appendChild(li);
  }
}