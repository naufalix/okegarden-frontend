/*Created by Naufal Ulinnuha*/

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

var dataSkills = [
  [1, 'HTML'],
  [2, 'CSS'],
  [3, 'Javascript'],
  [4, 'PHP'],
  [5, 'Java'],
  [6, 'MySQL'],
  [7, 'MongoDB'],
  [8, 'NodeJS'],
  [9, 'Laravel'],
  [10, 'VueJS'],
  [11, 'Bootstrap'],
  [12, 'Photoshop'],
  [13, 'Premiere Pro'],
  [14, 'VBA']
]

function setSkill() {
  dataSkills.forEach(addSkill);
}

function addSkill(item) {
    var img = document.createElement("img");
    img.src = "assets/img/"+item[0]+".png";

    var node = document.createElement("div");
    node.className = "border rounded row bgc";

    const textnode = document.createTextNode(item[1]);
    var a = document.createElement("a");
    a.appendChild(textnode);

    node.appendChild(img);
    node.appendChild(a);
    document.getElementById("skills").appendChild(node);
}