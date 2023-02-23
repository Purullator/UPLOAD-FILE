window.addEventListener('load', function () {
  const selectArch = document.querySelector('#selectArch'),
    imagenPrevisual = document.querySelector('#imagenPrev');

  imagenPrevisual.classList.add('hidden');

  selectArch.addEventListener('change', () => {
    const arch = selectArch.files;

    if (!arch || !arch.length) {
      imagenPrevisual.classList.add('hidden');
      imagenPrevisual.src = '';
      return;
    }

    const firstArch = arch[0];
    const objectURL = URL.createObjectURL(firstArch);

    imagenPrevisual.classList.remove('hidden');
    imagenPrevisual.src = objectURL;
  });
});
