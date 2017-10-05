<?php
  require_once('contact.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Medilab</title>
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato%7cMontserrat:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="libs/EasyAutocomplete/easy-autocomplete.min.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <!-- Header start -->
    <header>

      <!-- Fixed collapsible menu module start -->
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center-align"><img class="responsive-img" src="assets/img/logos/logo-medilab.svg" alt="logo medilab" width="40%"/></a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons md-36">menu</i></a>
            <ul class="right hide-on-med-and-down table-of-contents">
              <li><a class="dark-green" href="#about">About</a></li>
              <li><a class="dark-green" href="#activities">Activities</a></li>
              <li><a class="dark-green" href="#products">Products</a></li>
              <li><a class="dark-green" href="#partners">Partners</a></li>
              <li><a class="dark-green" href="#contact">Contact</a></li>
            </ul>
            <ul class="side-nav " id="mobile-menu">
            <li class="active"><a class="dark-green" href="#about">About</a></li>
            <li><a class="dark-green" href="#activities">Activities</a></li>
            <li><a class="dark-green" href="#products">Products</a></li>
            <li><a class="dark-green" href="#partners">Partners</a></li>
            <li><a class="dark-green" href="#contact">Contact</a></li>
          </ul>
          </div>
        </nav>
      </div>
        <!-- Fixed collapsible menu module end -->

        <div class="row">

          <!-- Parallax module start -->
            <div class="parallax-container hide-on-small-only">
              <div class="parallax">
					 <img src="assets/img/we-care-for-you-medilab-1200.jpeg" alt="We care for you"/>
              </div>
            </div>

            <div class="parallax-container hide-on-med-and-up">
              <div class="parallax">
				      <img src="assets/img/we-care-for-you-medilab-600.jpeg" alt="We care for you"/>
              </div>
            </div>
          <!-- Parallax module end -->

          <div class="tagline">
            <div class="col s6">
                <h1>We care<br/>for you</h1>
            </div>
            <div class="col s12">
              <h2>Because your health matters</h2>
            </div>

          </div>
        </div>
    </header>
    <!-- Header end -->

    <!-- Main start -->

    <main>
      <section id="about" class="section row scrollspy">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">About us</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
           	<div class="col l7 offset-l1">
           	<h3>Committed to greater accessibility of healthcare in developing countries</h3>
           	</div>
           	<div class="col l10 offset-l1">
            <p>Since 1993, we offer a wide range of high quality pharmaceuticals through professional healthcare outlets, hospitals, pharmacies and much more.<br/>
              As a major player in the distribution of medicine, our mission is to improve access to and provide high quality pharmaceuticals and medical supplies at the lowest possible price to the healthcare sector in developing countries..</p>
          </div>
        </div>
        </section>

        <div id="parallax-2" class="parallax-container hide-on-small-only">
          <div class="parallax">
            <img src="assets/img/about-us-illustration-1200.jpeg" alt="Learn more about us"/>

          </div>
         </div>
 			<div id="parallax-3" class="parallax-container hide-on-med-and-up">
         	<div class="parallax ">
            <img src="assets/img/about-us-illustration-600.jpeg" alt="Learn more about us"/>
				</div>

        </div>


      <section id="activities" class="section row scrollspy">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">Activities</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
          <div id="pictos" class="col s12">
            <div class="col s12 l4">
              <div class="col s12  center-align">
                <img  src="assets/img/pictos/pills.png" alt="High quality generics"/>
              </div>
              <div class="container col s8 offset-s2">
                <p class="center-align">We maintain high quality standards for our whole products range<br/>
                  <!-- Modal Trigger -->
                  <button id="amm" class="btn waves-effect waves-light" data-target="modal1">Learn more...</button>
                </p>
              </div>

              <!-- Modal Structure -->
              <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h4>Regulation facts</h4>
                  <div class="row">
                    <div class="col s12">
                      <div class="card">
                        <div class="card-title center">
                          Approved medicines
                        </div>
                        <div class="card-content">
                          Our specialties received an MAA in 14 countries.
                          <div class="">
                            <ul id="productsList" class="collapsible" data-collapsible="accordion">
                              <li >
                                <div class="collapsible-header">Bethamethazone</div>
                                <div class="collapsible-body">
                                  <ul id="betamethasone">

                                  </ul>
                                </div>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 l6">
                      <a target="blank" type="application/pdf" class="btn waves-effect" href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/474366/Best_practice_guidance_labelling_and_packaging_of_medicines.pdf">Packaging best practices</a>
                    </div>
                    <div class="col s12 l6">
                      <a target="blank" type="application/pdf" class="btn waves-effect" href="https://www.fagg-afmps.be/sites/default/files/content/etiquetage_des_medicaments.pdf">Labelling best practices</a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
                </div>
              </div>

            </div>
            <div class="col s12 l4">
              <div class="col s12 center-align">
                <img src="assets/img/pictos/hands.png" alt="Trusted partners"/>
              </div>
              <div class="container col s8 offset-s2">
                <p class="center-align">We believe in long-term business and open-minded relationships with our suppliers.</p>
              </div>
            </div>
            <div class="col s12 l4">
              <div class="col s12  center-align">
                <img src="assets/img/pictos/earth-arrow-blue.png" alt="We deliver"/>
              </div>
              <div class="container col s8 offset-s2">
                <p class="center-align">we deliver a wide range of tailor-made safe and cost-effective products</p>
              </div>
            </div>
          </div>
      </section>


      <section id="network" class="row grey lighten-4 no-margin-bottom">
        <div class="col s12 m6 offset-m3 center-align">
          <img class="img-responsive" src="assets/img/pictos/carte-monde-medilab.svg" alt="earth network" width="70%"/>
        </div>
        <div id="picto-location" class="col s12 m8 offset-m2 l6 offset-l3">
              <div class="col s10 offset-s1 m5 offset-m1 ">
                <i class="material-icons md-36 dark-red center-align">location_on</i>Two main dispatch locations
              </div>
              <div class="col s10 offset-s1 m5 offset-m1">
                <i class="material-icons md-36 dark-green center-align">location_on</i>European based partners
              </div>
        </div>
      </section>
      <div id="parallax-2" class="parallax-container hide-on-small-only">
          <div class="parallax">
            <img src= "assets/img/medications-cure-tablets-pharmacy-feuille-1200.jpeg" alt="Discover our products"/>

          </div>
         </div>
 			<div id="parallax-3" class="parallax-container hide-on-med-and-up">
         	<div class="parallax ">
            <img src= "assets/img/medications-cure-tablets-pharmacy-feuille-600.jpeg" alt="Discover our products"/>
				</div>

        </div>
      <section id="products" class="section row scrollspy">
        <div class="row">
          <div class="col s12 ">
            <h2 class="dark-green">Products</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row">
          <form class="col s12 l8 offset-l2">
            <div class="input-field">
              <input id="search_bar">
            </div>
            <div >
              <input id="desc">
            </div>
          </form>
        </div>
      </section>
      <div class="slider-css">
        <div class="mask">

        </div>
        <div class="slides">
          <div class="slide">
            <img src="assets/img/produits/betanol.png" alt="" width="300px">
          </div>
          <div class="slide">
            <img src="assets/img/produits/betamed-creme.png" alt="" width="300px">
          </div>
          <div class="slide">
            <img src="assets/img/produits/parafene.png" alt="" width="300px">
          </div>
          <div class="slide">
            <img src="assets/img/produits/clomed-creme.png" alt="" width="300px">
          </div>
          <div class="slide">
            <img src="assets/img/produits/betamed-pommade.png" alt="" width="300px">
          </div>
          <div class="slide">
            <img src="assets/img/produits/gentamed.png" alt="" width="300px">
          </div>
          <div class="slide">
            <img src="assets/img/produits/clomed-pommade.png" alt="" width="300px">
          </div>
        </div>
      </div>
      <section id="partners" class="section row scrollspy no-margin-bottom">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">Partners</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row col s12">
        <div class="col l7 offset-l1">
          <h3>High quality through trusted partners</h3>
        </div>
        <div class="col l10 offset-l1">
          <p>We strive for building fair and close bounds with manufacturers of pharmaceuticals goods that comply with our quality standards.<br/>
            Medilab only collaborates with suppliers that are pre-qualified by us and meet the GMP and GDP norms laid by the <a href="http://www.who.int/en/" target=blank>World Health Organization</a>.<br/>
            The process covers screening of documentation, assessment of products along with site and on-site audits.
            </p>
        </div>
        </div>
        <div class="row">
          <div class="col s12 m6 dark-green center">
            <h2 style="justify-content: center;" class="valign-wrapper"><i class="material-icons md-60 pale-green">check_circle</i>GMP</h2>
            <h6>Good Manufacturing Practice</h6>
          </div>
          <div class="col s12 m6 dark-green center">
            <h2 style="justify-content: center;" class="valign-wrapper"><i class="material-icons md-60 pale-green">check_circle</i>GDP</h2>
            <h6>Good Distribution Practice</h6>
          </div>
        </div>
        <div class="row no-margin-bottom grey lighten-4">
          <div class="container" id="partners-logos" class="col s12 grey lighten-4">

            <div class="logo col s6 center-align">
              <a href="http://www.ubipharm.com"><img class="responsive-img" src="assets/img/logos/logo-ubipharm.png" alt="logo-ubipharm" width="100px" ></a>
            </div>
            <div class="logo col s6 center-align">
              <a href="http://www.ds-promo.fr"><img class="responsive-img" src="assets/img/logos/logo-ubipharm.png" alt="" width="100px"></a>
            </div>
            <!-- <div class="logo col s6 l3 center-align">
              <img class="responsive-img" src="assets/img/logos/logo-planet-pharma.png" alt="" width="100px" >
            </div>
            <div class="logo col s6 l3 center-align">
              <img class="responsive-img" src="assets/img/logos/logo-planet-pharma.png" alt="" width="100px">
            </div> -->

        </div>
      </section>
      <div id="parallax-2" class="parallax-container hide-on-small-only">
          <div class="parallax">
            <img src= "assets/img/clasped-hands-comfort-hands-people-1200.jpeg" alt="Discover our products"/>

          </div>
      </div>
 		<div id="parallax-3" class="parallax-container hide-on-med-and-up">
         <div class="parallax ">
            <img src= "assets/img/clasped-hands-comfort-hands-people-600.jpeg" alt="Discover our products"/>
			</div>

      </div>

      <section id="contact" class="section row scrollspy">
        <div class="row">
          <div class="col s12">
            <h2 class="dark-green">Contact us</h2>
            <div class="col s6 offset-s2 m2 offset-m1 underline"></div>
          </div>
        </div>
        <div class="row center">
          <form class="col s12 l10 offset-l1" action="#contact" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="name" name="name" type="text" class="validate">
                <label for="name">Your name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input placeholder="My company" id="company" name="company" type="text" class="validate">
                <label for="company">Your company</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate">
                <label for="email">Your email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">subject</i>
                <input placeholder="Subject of your message" id="subject" name="subject" type="text" class="validate">
                <label for="subject">How can we help ?</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea placeholder="Tell us more..."id="message" type="text" name="message" class="materialize-textarea"></textarea>
                <label for="message">Your message</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l4 offset-l4 center-align">
                <button class="btn waves-effect waves-light pulse" type="submit" name="submit">Send message
                  <i class="material-icons right">send</i>
                </button>
              </div>
              <div class="feedback col s10 offset-s1 center-align">
                <?php echo $feedback; ?>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
    <!-- Main end -->


    <!-- Footer start -->
    <footer class="section row grey darken-3 no-margin-bottom">
      <div class="col l4">
        <h2 class="center-align">Headquarters</h2>
        <div class="row">
          <div class="col s12">
            <p class="center-align">MEDILAB International UAE</p>
            41 Chalton Street, London, United Kingdom, NW1 1jD<br/>
            Phone : <a href="tel:+44 20 7554 2222">+44 20 7554 2222</a><br/>
            Fax : +44 20 7554 2201
            Mail : <a href="mailto:medilab@medilab.one">medilab@medliab.one</a>
          </div>
        </div>
      </div>
      <div class="col l4">
        <h2 class="center-align">Europe branches</h2>
        <div class="row">
          <div class="col s12">
            <p class="center-align">MEDILAB International UK</p>
            41 Chalton Street, London, United Kingdom, NW1 1jD<br/>
            Phone : <a href="tel:+44 20 7554 2222">+44 20 7554 2222</a><br/>
            Fax : +44 20 7554 2201
            Mail : <a href="mailto:medilab@medilab.one">medilab@medliab.one</a>
          </div>
          <div class="col s12">
            <p class="center-align">MEDILAB Belgium SPRL</p>
            Av de Roodebeek 131, 1030 Schaerbeek, Bruxelles Belgium<br/>
            Phone : <a href="tel:+32 49 21 66 161">+32 49 21 66 161</a><br/>
            Mail : <a href="mailto:id@medilab.one">medilab@medliab.one</a>
          </div>
        </div>
      </div>
      <div class="col l4">
        <h2 class="center-align">Africa branch</h2>
        <div class="row">
          <div class="col s12">
            <p class="center-align">Training school</p>
            Hann Mariste, Villa 11, Dakar Senegal<br/>
            Phone : <a href="tel:+32 49 21 66 161">+32 49 21 66 161</a><br/>
            Mail : <a href="mailto:id@medilab.one">medilab@medliab.one</a>
          </div>
        </div>
      </div>
      <div class="divider col s12 grey darken-2"></div>
        <div class="col s12 center-align">
          &copy&nbspCopyright 2017. All rights reserved. Legal informations. Terms of use
        </div>
    </footer>
    <!-- Footer end -->

    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="libs/EasyAutocomplete/jquery.easy-autocomplete.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- <script type="text/javascript">
    $(function(){

      var tableau = [{
        "betamethasone" :
        [{
          "name": "BETAMED",
          "description": "30mg"
        }],
        "clotrimazole":
        [{
          "name": "CLOTRIDERM",
          "description": "pommade"
        }]
      }];

      $(tableau[0]).each(function(){
        //console.log($(this)[0]);
        var item = $(this)[0];
        $.each(item, function(k, v){
          //console.log("mollecule : " + k);
          //console.log(v[0].name);
        })
      })
    })
    </script> -->
  </body>
</html>
