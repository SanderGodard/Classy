var palkia = document.getElementsByClassName("str")[0];
var victini = palkia.children[0];
var drapion = palkia.children[1];
var mChatot = palkia.children[2];
var dAmbipom = palkia.children[3];

victini.addEventListener("click", VCreate);

function VCreate() {
  victini.style.backgroundColor = "#000";
  victini.style.color = "#FFF";
  drapion.style.backgroundColor = "#FFF";
  drapion.style.color = "#000";
  mChatot.style.backgroundColor = "#FFF";
  mChatot.style.color = "#000";
  dAmbipom.style.backgroundColor = "#FFF";
  dAmbipom.style.color = "#000";
}

drapion.addEventListener("click", TSpikes);

function TSpikes() {
  victini.style.backgroundColor = "#FFF";
  victini.style.color = "#000";
  drapion.style.backgroundColor = "#000";
  drapion.style.color = "#FFF";
  mChatot.style.backgroundColor = "#FFF";
  mChatot.style.color = "#000";
  dAmbipom.style.backgroundColor = "#FFF";
  dAmbipom.style.color = "#000";
}

mChatot.addEventListener("click", Chatter);

function Chatter() {
  victini.style.backgroundColor = "#FFF";
  victini.style.color = "#000";
  drapion.style.backgroundColor = "#FFF";
  drapion.style.color = "#000";
  mChatot.style.backgroundColor = "#000";
  mChatot.style.color = "#FFF";
  dAmbipom.style.backgroundColor = "#FFF";
  dAmbipom.style.color = "#000";
}

dAmbipom.addEventListener("click", fakeOut);

function fakeOut() {
  victini.style.backgroundColor = "#FFF";
  victini.style.color = "#000";
  drapion.style.backgroundColor = "#FFF";
  drapion.style.color = "#000";
  mChatot.style.backgroundColor = "#FFF";
  mChatot.style.color = "#000";
  dAmbipom.style.backgroundColor = "#000";
  dAmbipom.style.color = "#FFF";
}
