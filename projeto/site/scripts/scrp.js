function carregar() {

    setTimeout(function () {
        $('#content').load("src/texto.php");
      }, 4000);
      setTimeout(function () {
        $('#content').load("scripts/salvarBotao.php");
      },0);
      setTimeout(function () {
        $('#content').load("src/texto2.php");
      }, 0);

}

carregar();
