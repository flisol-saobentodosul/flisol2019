<?php
/**
* Template Name: Sobre o Flisol
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); ?>
    <div class="banner-principal">
      <div class="content-banner">
        <div class="cronometro">
          <div id="countbox"></div>
          São Bento do Sul
        </div>
        <div class="center subscribe-button">
          <a class="link-button" href="<?php echo get_permalink(26); ?>">
            inscreva-se
          </a>
        </div>
        <div class="redes-sociais">
          <span>Compartilhar: </span>
          <a href="http://www.facebook.com/share.php?u=https://saobentodosul.flisol.org.br/&amp;title=Flisol São Bento do Sul" target="_blank" title="Flisol São Bento do Sul" >
            <i class="social-icon">
              <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png" alt="Facebook Flisol"/>
            </i>
          </a>
          <a href="http://twitter.com/home?status=Flisol São Bento do Sul+https://saobentodosul.flisol.org.br/" title="Flisol São Bento do Sul" target="_blank">
            <i class="social-icon">
              <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-512.png" alt="Twitter Flisol"/>
            </i>
          </a>
        </div>
      </div>
    </div>
    <div class="container about" id="about">
      <div class="title">
        >_ Sobre o Flisol
      </div>

      <p class="about-content">
        O <strong>Festival Latino-americano de Instalação de Software Livre (FLISoL)<strong> é o maior evento da 
        América Latina de divulgação de <a class="http" href="http://pt.wikipedia.org/wiki/Software_livre" target="_blank" style="color:#f1a719;">Software Livre</a>. 
        Ele é realizado desde o ano de 2005, e 
        desde 2008 sua realização acontece no 4º sábado de abril de cada ano. 
        Seu principal objetivo é promover o uso de Software Livre, mostrando ao público em 
        geral sua filosofia, abrangência, avanços e desenvolvimento. 
        Para alcançar estes objetivos, diversas comunidades locais de Software Livre 
        (em cada país/cidade/localidade), organizam simultâneamente eventos em que se instala, 
        de maneira gratuita e totalmente legal, Software Livre nos computadores dos participantes. 
        Além disso, paralelamente acontecem palestras, apresentações e workshops, sobre temas locais, 
        nacionais e latino-americanos sobre Software Livre, em toda a sua expressão: artística, 
        acadêmica, empresarial e social.
      </p>
    </div>



  <script>
    dateFuture = new Date(2020,03,25,09,00,00); // Adicione aqui a data do evento - formato yyyy/mm/dd hh/mm/ss (favor adicionar um mes a menos, pois o contador começa em zero)
    function GetCount() {
      dateNow = new Date(); //pegar data atual
      amount = dateFuture.getTime() - dateNow.getTime(); //milissegundos de calc entre datas
      delete dateNow;
      // o tempo já passou
      if (amount < 0) {
        document.getElementById('countbox').innerHTML = "Bem Vindo ao Flisol";
      } else { // a data ainda é boa
        days = 0; hours = 0; mins = 0; secs = 0; out = "";
        amount = Math.floor(amount / 1000);//matar os "milissegundos", então apenas segundos
        days = Math.floor(amount / 86400);//dias
        amount = amount % 86400;
        hours = Math.floor(amount / 3600);//horas
        amount = amount % 3600;
        mins = Math.floor(amount / 60);//minutos
        amount = amount % 60;
        secs = Math.floor(amount);//segundos
        if (days != 0) { 
          out += days + " dia" + ((days != 1) ? "s" : "") + ", "; 
        }
        if (days != 0 || hours != 0) { 
          out += hours + " hora" + ((hours != 1) ? "s" : "") + ", "; 
        }
        if (days != 0 || hours != 0 || mins != 0) { 
          out += mins + " minuto" + ((mins != 1) ? "s" : "") + ", "; 
        }
        out += secs + " segundos";
        document.getElementById('countbox').innerHTML = `<strong>Faltam</strong> </br> ${out}`;
        setTimeout("GetCount()", 1000);
      }
    }
    window.onload = function () { 
      GetCount(); 
    }
  </script>

<?php get_footer(); ?>