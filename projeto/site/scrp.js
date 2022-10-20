function carregar() {

    setTimeout(function () {
        $('#content').load("texto.php");
      }, 4000);
      setTimeout(function () {
        $('#content').load("salvarBotao.php");
      },0);
      setTimeout(function () {
        $('#content').load("texto2.php");
      }, 0);

}

carregar();
