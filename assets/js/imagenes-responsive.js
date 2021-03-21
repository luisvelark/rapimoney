document.addEventListener("DOMContentLoaded", (e) => {
  console.log("hola");
  responsiveImagenes("imagenes", "(min-width:1024px)");
  responsiveEdificios(
    "divEdificios",
    "(min-width:768px)",
    "http://localhost/RapiMoneyWeb/assets/img/main/fondoedificios.png"
  );
  // let btnGana = document.getElementById("btn-gana");
});

// ******************FUNCIONES **************
function responsiveImagenes(id, mq) {
  let breakPoint = window.matchMedia(mq);
  console.log("entro");
  const responsive = (e) => {
    let imagenes = document.getElementById(id);
    console.log(imagenes);

    if (e.matches) {
      // *CREANDO LOS NODOS IMG
      imgs = [
        "http://localhost/RapiMoneyWeb/assets/img/header/desktop/virtual-D.png",
        "http://localhost/RapiMoneyWeb/assets/img/header/desktop/rapido-D.png",
        "http://localhost/RapiMoneyWeb/assets/img/header/desktop/virtual-D.png",
        "http://localhost/RapiMoneyWeb/assets/img/header/desktop/virtual-D.png",
        "http://localhost/RapiMoneyWeb/assets/img/header/desktop/rapido-D.png",
        "http://localhost/RapiMoneyWeb/assets/img/header/desktop/pago-D.png",
      ];
      const fragment = document.createDocumentFragment();

      for (const imgUrl of imgs) {
        const img = document.createElement("img");
        img.setAttribute("class", "mi-img");
        img.setAttribute("src", imgUrl);
        fragment.appendChild(img);
      }

      console.log("fin de frag");
      let misImagenes = document.getElementsByClassName("mi-img");
      console.log(misImagenes);
      console.log("aparecio" + misImagenes.length);

      // let img = document.createElement("img");
      // img.setAttribute("id", "mi-img");
      // img.setAttribute(
      //   "src",
      //   "http://localhost/RapiMoneyWeb/assets/img/header/desktop/pago-D.png"
      // );
      // img.setAttribute("alt", "pago");

      // *AGREGANDO LA IMG EN EL NODO PADRE!
      // imagenes.appendChild(img);
      imagenes.appendChild(fragment);
    } else {
      let misImagenes = document.getElementsByClassName("mi-img");
      console.log(misImagenes);

      if (misImagenes.length != 0) {
        console.log("lo borro");
        imagenes.removeChild(misImagenes.item(0));
        imagenes.removeChild(misImagenes.item(1));
        imagenes.removeChild(misImagenes.item(2));
        imagenes.removeChild(misImagenes.item(0));
        imagenes.removeChild(misImagenes.item(1));
        imagenes.removeChild(misImagenes.item(0));

        // imagenes.removeChild(misImagenes.item(3));
        // imagenes.removeChild(misImagenes.item(4));
        // imagenes.removeChild(misImagenes.item(5));
        console.log(misImagenes);
      }
    }
  };

  //*cuando ocurre el cambio de pantalla!
  breakPoint.addEventListener("change", responsive);
  responsive(breakPoint);
}

// ********************************************

function responsiveEdificios(id, mq, imgs) {
  let breakPoint = window.matchMedia(mq);

  const agregarImg = (bkp) => {
    // *CAPTURO AL NODO PADRE!
    let divEdificio = document.getElementById(id);
    if (bkp.matches) {
      // *CREO LA IMAGEN EN UN FRAGMENTO MÁS EFICIENTE!
      const frag = document.createDocumentFragment();
      const img = document.createElement("img");
      img.setAttribute("id", "miEdificio");
      img.setAttribute("class", "edificio");
      img.setAttribute("src", imgs);
      frag.appendChild(img);

      // *AGREGO LA IMG EN EL NODO PADRE!
      divEdificio.appendChild(frag);
    } else {
      // *CONDICION DE SI EXISTE EL ELEMENTO EN EL DOM
      if (document.getElementById("miEdificio")) {
        let imgEdificio = document.getElementById("miEdificio");
        console.log(imgEdificio);
        // *ELIMINANDO EL ELEMENTO CREADO ANTERIORMENTE!
        divEdificio.removeChild(imgEdificio);
      }
    }
  };

  //*SI OCURRE EL CAMBIO DE PANTALLA!
  breakPoint.addEventListener("change", agregarImg);
  // *ANALIZA EL BKP CUANDO INICIA LA PANTALLA
  agregarImg(breakPoint);
}
