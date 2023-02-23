var inputs = 1;

function removeInput() {
  inputs--;
  fotos.lastElementChild.remove();
  fotos.lastElementChild.remove();

  if (inputs < 10) mas.removeAttribute('disabled');
  if (inputs < 2) menos.setAttribute('disabled', 'disabled');
}

function addInput() {
  inputs++;

  var hidden = document.createElement('input');
  hidden.setAttribute('type', 'hidden');
  hidden.setAttribute('name', 'MAX_FILE_SIZE');
  hidden.setAttribute('value', '1240000');

  var input = document.createElement('input');
  input.setAttribute('type', 'file');
  input.setAttribute('accept', 'image/*');
  input.setAttribute('name', 'fichero' + inputs);
  input.setAttribute('class', 'form-control');

  fotos.appendChild(hidden);
  fotos.appendChild(input);

  if (inputs > 1) menos.removeAttribute('disabled');
  if (inputs >= 10) mas.setAttribute('disabled', 'disabled');
}
