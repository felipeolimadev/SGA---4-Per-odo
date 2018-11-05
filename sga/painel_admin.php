<div class="jumbotron">
      	<h2>Bem Vindo(a): <?php echo$_SESSION['nome'] ?>  | <i class="fas fa-user-circle"></i> <?php echo$_SESSION['code'] ?></h2>
        
        <font face="Tahoma" size="4px" color="f00" float="left"> <?php
			$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
			$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
			 $hoje = getdate();
			 $dia = $hoje["mday"];
			 $mes = $hoje["mon"];
			 $nomemes = $meses[$mes];
			 $ano = $hoje["year"];
			 $diadasemana = $hoje["wday"];
			 $nomediadasemana = $diasdasemana[$diadasemana];
			 echo "$nomediadasemana, $dia de $nomemes de $ano";
			 ?><div id="time" font face="Tahoma" size="6px" color="f00" float="left" ></div>
				<script>
				function checkTime(i) {
				    if (i < 10) {
				        i = "0" + i;
				    }
				    return i;
				}

				function startTime() {
				    var today = new Date();
				    var h = today.getHours();
				    var m = today.getMinutes();
				    var s = today.getSeconds();
				    // add a zero in front of numbers<10
				    m = checkTime(m);
				    s = checkTime(s);
				    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
				    t = setTimeout(function () {
				        startTime()
				    }, 500);
				}
				startTime();
				</script>
				<a class="navbar-brand">  
		<a class="navbar-brand"></a>
        </div>
        
     <!-- <div class="page-header">
        <h1>Informativos UNIPAC</h1>
      </div>
      <div class="well">
        <p>Iniciando</p>
        <p>Iniciando</p>
      </div>
      -->