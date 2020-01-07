<?php
/**
 * Template Name: Page Main
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kumle
 */

get_header(); ?>

<!-- <link rel="stylesheet" href="<?= KW_TEMPLATE_DIRECTORY_URI . '/css/main-page-bootstrap-grid.css'; ?>"> -->
<link rel="stylesheet" href="<?= KW_TEMPLATE_DIRECTORY_URI . '/css/main-page-style.css?ver=1.0.5'; ?>">

<div class="kw-menu menu clearfix">
	<div class="w1170 container">
		<ul class="nav naviLeft clearfix">
			<li class="active"><a href="#page" class="homemenu">Home</a></li>
			<li><a href="#block2">Über Uns</a></li>
			<li><a href="#block3">Leistungen</a></li>
		</ul>
		<div class="logo">
			<h2>Köln</h2>
			<h3>webstudio</h3>
		</div>
		<ul class="nav naviRight clearfix">
			<li><button class="goorder" type="button" data-toggle="modal" data-target="#myModal">anfragen</button></li>
			<li><a href="#block5">Kontakt</a></li>
			<li><a href="#block4">Extras</a></li>
		</ul>
	</div>
</div><!--/menu-->

<?php if(!wp_is_mobile()): ?>
<div class="slider" id="block1">
	<div class="w1170 container">
		<div class="girl"></div>
		<div class="arrow-up"></div>
		<div class="entwick"><div class="forhover"><div class="popup">
			<p>Bei uns ist Ihre Website bereits in einigen wenigen Schritten bestellt!  Der Schwierigkeitsgrad Ihrer Wunsch-Website spielt dabei keine Rolle. Teilen Sie uns Ihre Vision mit und wir rufen sie gemeinsam mit Ihnen ins Leben: zu Top-Konditionen und in kürzester Zeit!</p>
		</div></div></div>
		<div class="marketing"><div class="forhover"><div class="popup">
			<p>Eine Website zu erstellen ist nur ein halber Erfolg. Wir sorgen dafür, dass Ihre Website von der entsprechenden Zielgruppe entdeckt wird. Ob SEO, SMM, SMO, Werbekampagnen mithilfe von Facebook oder Google AdWords: Wir machen Ihre Website bekannt. Wir begleiten Sie zu Ihrem Durchbruch: Effizient, mit minimalen Preisen und einem ausgezeichneten Design.</p>
		</div></div></div>
		<div class="macbook"></div>
		<div class="design"><div class="forhover"><div class="popup">
			<p>Ein ansprechendes Design stellt eine der wichtigsten Voraussetzungen für den Erfolg Ihrer Website dar. Wir legen viel Wert auf die Details, ohne das gesamte Konzept aus den Augen zu verlieren. Ob Sie sich ein Design nach einer Vorlage wünschen oder nach einer individuellen, von einem Künstler angefertigten Lösung suchen: Wir haben das passende Angebot für Sie dabei!</p>
		</div></div></div>
		<div class="tablet"></div>
		<div class="arrow-down"></div>
		<div class="website">website
			<button class="orderbutton" data-toggle="modal" data-target="#myModal">anfragen</button>
		</div>
	</div>
</div><!--/slider-->
<?php endif; ?>

<div class="vorteile" id="block2">
	<div class="strip"><div class="w1170 container"><div class="stripinner"></div></div></div>
	<div class="w1170 container">
		<h2>Unsere vorteile</h2>
		<h3>individuell, günstig, zuverlässig</h3>
		<div class="clearfix">
			<div class="vort1 col-sm-4 kw-lazyload">
				<h3>Team</h3>
				<p>Unser Team setzt sich aus hochqualifizierten und erfahrenen Webdesigner/Entwicklern und IT-Spezialisten zusammen. Dies ermöglicht uns Ihr Projekt effizient und in kürzester Zeit zu realisieren. Wir sind nicht nur professionell, sondern behalten die aktuellsten Entwicklungen auf dem Gebiet der Webtechnologien stetig im Auge, damit wir Ihnen die modernsten und effektivsten Lösungen anbieten können.</p>
			</div>
			<div class="vort2 col-sm-4 kw-lazyload">
				<h3>Arbeitsstil</h3>
				<p>Von Anfang an bleiben wir stets in Kontakt mit Ihnen. Dank der modernen Kommunikationsmöglichkeiten können Sie den ganzen Prozess der Erstellung Ihrer Website mitverfolgen, kontrollieren und in den Prozess aktiv eingreifen, falls Sie den Bedarf danach spüren!</p>
			</div>
			<div class="vort3 col-sm-4 kw-lazyload">
				<h3>regionale Zugehörigkeit</h3>
				<p>Unser Sitz befindet sich in Köln, einer Stadt, die uns fasziniert und inspiriert. Für Sie sind wir dank der modernen Kommunikationstechnik aus jeder denkbaren Entfernung erreichbar. Ein kurzer Anruf, eine formlose E-Mail, eine knappe Message – und  schon kommen Sie der Realisierung Ihres Projektes ein Stückchen näher!</p>
			</div>
		</div>
	</div>
</div><!--/vorteile-->

<div class="services" id="block3">
	<div class="w1170 container insert-table">
		<h2>Entwicklung</h2>
		<h3>Alles um Ihre Vorstellungen ins Leben zu rufen</h3>
		<div class="jbody">
			<div class="jrow firstrow">
				<div class="jcol firstcol fcolheader">Dienstleistungen</div>
				<div class="jcol">Webvisitenkarte <br> ab <b>100€*</b>
					<div class="popover">
						<p><b>Webvisitenkarte</b> ist die kleinste, aber dennoch eine ganz besondere und einzigartige Version Ihrer Internetpräsenz, die Sie bei uns erstellen lassen können. Die repräsentiert Ihr Unternehmen/ Ihre Person im Web und enthält kurze Information.  Am häufigsten findet sie  Verwendung  von Privatpersonen oder Kleinunternehmen,  um sich selbst oder die eigenen Produkte vorzustellen. Diese Websiten bestehen nur aus einer einzigen Seite mit wenig Text. Hier wirdganz besonderes auf ein ansprechenden Design geachtet, denn der erste Eindruck zählt und ist in diesem Fall entscheidend.</p>
					</div>
				</div>
				<div class="jcol">Homepage<br>ab <b>200€*</b>
					<div class="popover">
						<p>Eine <b>Homepage</b> erfüllt eine repräsentative Funktion. Sie besitzt eine deutlich komplexere Struktur als eine einzelne Internetseite und enthält mehr Bilder und Texte. Sie kann mit diversen Funktionen wie z.B. einem Login-Bereich für die Besucher effektvoller gestaltet werden.  Wenn Sie beabsichtigen, Ihre Internetpräsenz für die Beschreibung und den Verkauf von Ihren Dienstleitungen oder Produkten zu nutzen, dann ist eine Homepage genau die richtige Wahl für Sie.</p>
					</div>
				</div>
				<div class="jcol">Landingpage<br>ab <b>350€*</b>
					<div class="popover">
						<p>Eine <b>Landingpage</b> (Landing-Page) ist im Grunde  eine einzelne Seite, die sich einfach durchscrollen lässt. Diese einfache Struktur erlaubt es ein bestimmtes Angebot im Mittelpunkt zu stellen und ist somit gut geeignet für die Vermarktung von einem bis zu wenigen Produkten.  Neben der Produktbeschreibung enthält diese Seite ein Response-Element (z.B. Anfrageformular oder Call-Back-Button), das die einfache Interaktion mit dem Besucher sicherstellt.  Dank seiner hohen Effektivität und niedrigen Kosten haben solche Seiten immer mehr an Popularität gewonnen. Unsere eigene Seite ist ein anschauliches  Beispiel dafür, wie eine Landingpage aussehen kann.</p>
					</div>
				</div>
				<div class="jcol">WebShop<br>ab <b>900€*</b>
					<div class="popover">
						<p>Bei uns können Sie auch Ihren eigenen <b>Online-Shop</b> erstellen lassen. Wie schon der Name sagt, ähnelt ein Online-Shop der Funktion nach einem Laden. Der Vorteil liegt an wesentlich größeren Vertriebsmöglichkeiten  und übersichtlicheren Angebotsdarstellungsmöglichkeiten.  Über ein Online-Shop kann man alles verkaufen, von Textilprodukten bis Produkten der Schwerindustrie. Das wichtigste Ziel eines Online-Shops ist zweifellos die Generierung von Umsätzen.</p>

						<p>Ein ansprechendes Design, eine schnelle und unkomplizierte Abwicklung, mehrere Zahlungsmethoden- darauf legen die Kunden viel wert. Wir wollen jedoch auch höheren Ansprüchen gerecht werden!  Wir sorgen dafür,...:</p>
						<ul>
							  <li>dass  Ihr Online-Shop sich bequem verwalten lässt,</li> 
						      <li>dass Ihre Kunden Sie über einen eingebauten OnlineChat kontaktieren könnten,</li> 
						      <li>dass Sie unkompliziert die Newsletter erstellen und vieles mehr…</li>
     					 </ul>
					</div>
				</div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol"><h2>Design</h2></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">nach Vorlage</div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">individuell</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Art Design</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol"><h2>Technische Umsetzung</h2></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">HTML 5, CSS 3, Java Script</div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Slider</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Kontaktformular</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Sitemap</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Homepage Suchfunktion</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Mehrere Seiten und Bilder</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><i></i></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Google Karte</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Security</div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">unbegrenzt erweiterbar</div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Responsive Design</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol"><h2>Module</h2></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">zusätzliche Sprache</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol"><div class="pay-clip">kostenloses Anbinden von 2 Zahlungsystemen <nobr>(PayPal und SOFORT)</nobr></div></div>
				<div class="jcol"><i></i></div>
				<div class="jcol"><i></i></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Eingebauter Online-Chat</div>
				<div class="jcol"><i></i></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol"><h2>CMS-System</h2></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Wordpress</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol"><h2>Marketing</h2></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
				<div class="jcol"></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Facebook Like / Google+ Button</div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Anmeldung bei Google, Yahoo! und Bing</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Suchmaschinenfreundlichkeit</div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Einrichtung und Verknüpfung Googleadwords</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol">Besucherstatistik</div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><u>opt.</u></div>
				<div class="jcol"><s></s></div>
			</div>
			<div class="jrow">
				<div class="jcol firstcol dnone"></div>
				<div class="jcol bestellen" data-toggle="modal" data-target="#myModal">anfragen</div>
				<div class="jcol bestellen" data-toggle="modal" data-target="#myModal">anfragen</div>
				<div class="jcol bestellen" data-toggle="modal" data-target="#myModal">anfragen</div>
				<div class="jcol bestellen" data-toggle="modal" data-target="#myModal">anfragen</div>
			</div>
		</div>
		<p class="" style="
    text-indent: 94px;
">* - Kein Ausweis von Umsatzsteuer, da Kleinunternehmer gemäß § 19 Abs. 1 UStG.</p>
	</div>
</div><!--/services-->

<div class="marketingblock kw-lazyload" id="block4">
	<div class="w1170 container">
		<h2>Zusatzleistungen</h2>
		<h3>lasse Sie uns Ihre Website pflegen</h3>
		<ul id="myTab" class="nav nav-tabs">
	      <li class="active"><a href="#jtab1" data-toggle="tab">SEO Optimierung</a></li>
	      <li class=""><a href="#jtab2" data-toggle="tab">Werbekampagne</a></li>
	      <li class=""><a href="#jtab3" data-toggle="tab">Logodesign</a></li>
	    </ul>
	    <div id="myTabContent" class="tab-content">
			<div class="tab-pane fade active in" id="jtab1">
			    <p>Die <b>SEO-Optimierung</b> (Suchmaschinen-Optimierung) ist  eine Reihe von Praktiken und Verfahren, die es ermöglichen, die Position einer Website in den Suchergebnissen der Suchmaschinen (z.B. Google, Bing, Yahoo usw. ) zu  optimieren. Häufig sind Websitebetreiber damit konfrontiert, dass Ihre Website  gar nicht bei den entsprechenden Suchanfragen angezeigt wird oder erst am Ende der Suchergebnisse erscheint. Somit bleibt die Seite unentdeckt  von potenziellen Besucher/Kunden. Das Hauptziel dieser Maßnahmen ist die Wahrscheinlichkeit über Suchmaschinen gefunden zu werden  zu erhöhen.</p>

				<p>Wie können wir Ihnen dabei helfen? Wir machen sowohl OnPage-Optimierung als auch OffPage-Optimierung, d.h. :</p>
				<ul>
					<li>wir wählen die passenden Keywords aus und optimieren die Seiteninhalte in Bezug auf Inhaltsqualität,  Formatierungen und Überschriften</li>
					<li>wir optimieren Header und Tags, sowie die interne Linkstruktur der Seite</li>
					<li>wir bauen eine Linkstruktur mit anderen  thematisch ähnlichen Webseiten auf</li>
					<li>und vieles mehr...</li>
				</ul>

				<p>Wie hoch sind die Kosten? Das hängt vom Umfang der zu optimierende Webseite ab.  Schicken Sie uns einfach eine unverbindliche Anfrage, wir schätzen den Umfang der Arbeit ein und machen Ihnen ein entsprechendes Angebot. Unsere  Preise werde Sie angenehm überraschen.</p>
			</div>
			<div class="tab-pane fade" id="jtab2">
				<p>„Wer nicht wirbt, stirbt!“-</p>

				<p>Die Werbung auf Google / Facebook bittet eine einzigartige Gelegenheit, seine Produkte und Dienstleistungen schnell und günstig bekannt zu machen. Google AdWords und Facebook- Werbeanzeigen  sind äußerst starke Instrumente, um eine Werbekampagne zu gestalten. Doch bei falschem Umgang damit kann die  Werbung  auch trotz großem Budget nur geringe Wirkung haben.   Überlassen Sie uns die Gestaltung Ihrer Marketingkampagne und wir sorgen für das optimale Preis-Leistungs-Verhältnis.</p>

				<p>Analyse Ihrer Website, Anbindung von statistiksammelnden Services, Analyse von relevanten Keywords, Analyse der Zielgruppe, Erstellung von Werbetexten,  Design von Werbeanzeigen, die eigentliche Verwaltung von Werbekampagne… das sind nur einige  Schritte, die wir unternehmen um Ihre Werbung zum Erfolgt zu bringen.</p>
			</div>
			<div class="tab-pane fade" id="jtab3">
			    <p>Ein <b>Logo</b> ist das wichtigste Element der Corporate Identity eines Unternehmens. Es dient in erster Linie der Identifizierung des Unternehmens auf dem Markt. In den Augen des Kunden ist die Existenz eines Marken-Logos ein Garant für die Qualität der Ware bzw. der Dienstleistung. Waren, die kein Logo haben, bezeichnet man als „noname“. Ein gut gelungenes Logo zieht den potenziellen Kunden bereits beim ersten Anblick auf unbewusster Ebene an.  Dabei ist es sehr wichtig seine Zielgruppe zu kennen. Letztendlich sollen sich diejenigen „angesprochen fühlen“, die Sie tatsächlich anzusprechen beabsichtigten.</p>

				<p>Oft will man ein hochmodernes Logo haben, solche Logos werden schnell nicht mehr aktuell. Das führt dazu, dass man sein Logo-Design ständig erneuern muss. Das Logo sollte man jedoch nicht verändern, wenn man sich dadurch eine Wiedererkennung erhofft.  Wir verleihen Ihrem Logo das nötige Etwas, das dem Kunden Solidität und Zuverlässigkeit vermittelt. Dabei sind die richtige Farbgebung und Komposition  wichtig.  Viele Logodesigner verwenden für das Design einige Elemente der bereits existierenden Logos. Unsere Designer hingegen sorgen dafür, dass Sie etwas wirklich Einzigartiges  bekommen.</p>
			</div>
		</div>
	</div>
</div><!--/marketingblock-->

<div class="contactblock kw-lazyload" id="block5">
	<div class="w1170 container clearfix">
		<div class="contactform">
			<p>Sie erreichen uns ganz einfach über dieses Kontaktformular. Senden Sie uns eine Nachricht und wir melden uns in Kürze.</p>
			<div class="ruckkopplung">Kontakte</div>

			<form class="jform clearfix" id="n-form" role="form">
				<div class="forml">
					<label for="inputName">Name</label>
					<label for="inputEmail">E-Mail</label>
					<label>Ich bin interessiert an</label>
					<label for="inputMsg">Nachricht</label>
				</div>
				<div class="formr">
			    	<input type="text" name="name" id="inputName" class="inputs">
					<input type="email" name="email" id="inputEmail" class="inputs">
					<select name="choice" id="inputChoice" class="inputs">
						<option value="webvisitenkarte">Webvisitenkarte</option>
						<option value="homepage">Homepage</option>
						<option value="landingpage" selected="selected">Landingpage</option>
						<option value="webShop">WebShop</option>
						<option value="seooptimierung">SEO Optimierung</option>
						<option value="werbekampagne">Werbekampagne</option>
						<option value="Logodesignv">Logodesign</option>
						<option value="anderes">anderes</option>
		            </select>
		            <textarea name="msg" id="inputMsg" cols="30" rows="10" class="inputs"></textarea>
		            <input type="hidden" name="phone" value="no phone now">
		            <button type="submit" class="inputs sbmt">Senden</button>
				</div>
	
			</form>

		</div>
	</div>
</div>


<!-- contactmodal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hinterlassen Sie Ihre Kontaktdaten und in kürzester Zeit melden wir uns bei Ihnen</h4>
      </div>
      <div class="modal-body clearfix">

		<div class="form-horizontal">
		  <div class="form-group">
		    <label for="inputName2" class="control-label">Name</label>
		    <div class="">
		      <input name="name" type="text" class="form-control" id="inputName2" placeholder="Name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail2" class="control-label">E-Mail</label>
		    <div class="">
		      <input name="email" type="email" class="form-control" id="inputEmail2" placeholder="E-Mail">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPhone" class="control-label">Telefonnummer <small style="color: rgba(255, 0, 0, 0.5);">(optional)</small></label>
		    <div class="">
		      <input name="phone" type="text" class="form-control" id="inputPhone" value=" " placeholder="Telefonnummer">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="">
		    	<input type="hidden" name="msg" value="no msg now">
		    	<input type="hidden" name="choice" value="no choice now">
		    </div>
		  </div>
		</div>

      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-successt">Senden</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div><!--/contactmodal-->

<?php get_footer();
