<!DOCTYPE html>
<html>
	<head>
		<title>Remind Me - Calendrier</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="components/bootstrap3/css/bootstrap.css">
		<link rel="stylesheet" href="components/bootstrap3/css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/calendar.css">
	</head>
	<body>
	
		<div class="container">
			<div class="page-header">
				<div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Remind Me</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Accueil</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
				<div class="pull-right form-inline">
				
					<div class="btn-group">
						<button class="btn btn-primary" data-calendar-nav="prev">Precedent</button>
						<button class="btn btn-default" data-calendar-nav="today">Aujourd'hui</button>
						<button class="btn btn-primary" data-calendar-nav="next">Suivant</button>
					</div>
					
					<div class="btn-group">
						<button class="btn btn-warning" data-calendar-view="year">Année</button>
						<button class="btn btn-warning active" data-calendar-view="month">Mois</button>
						<button class="btn btn-warning" data-calendar-view="week">Semaine</button>
						<button class="btn btn-warning" data-calendar-view="day">Jour</button>
					</div>
					
				</div>
				<h3></h3>
			</div>
			
			<div class="row">
				<div class="col-md-9">
					<div id="calendar"></div>
				</div>
				<div class="col-md-3">
				
					<div class="row">
						<div class="hideit">
						<select id="first_day" class="form-control">
							<option value="2">La semaine commence le Dimanche</option>
							<option value="1" selected="selected">La semaine commence le lundi</option>
						</select>
						</div>
						<div class="rdv">
						<h4>Créer un Evenement</h4>
						<form name="frm_rdv" class="form-control">
						<label>
							<h5>Heure de début</h5>
							<select id="hoursstart" name="debutselheure">
							<option value="00" selected="selected">00</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
						</select>
						<select id="minutestart" name="debutselmin">
							<option value="00" selected="selected">00</option>
							<option value="30">30</option>
						</select>
						<h5>Heure de fin</h5>
							<select id="hoursend" name="finselheure">
							<option value="00" selected="selected">00</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
						</select>
						<select id="minutesend" name="finselmin">
							<option value="00" selected="selected">00</option>
							<option value="30">30</option>
						</select>
						</label>
						<h5>Type d'évènement</h5>
						<div id="typeevent">
						<select id="eventtype" name="eventype">
						<option value="event-import">Important</option>
						<option value="event-success">Succès</option> 
						<option value="event-warning">Alerte</option>
						<option value="event-info">Info</option>
						<option value="event-special">Spécial</option>
						</select>
						</div>
						<label>
							<h5>Titre </h5>
							<input type="text" id="rdvtitle"> 
						</label>
						<div class="btn-rdv">
							<div class="btn-group">
							<button class="btn btn-primary" data-event-save="save">Enregistrer</button>
							</div>
						</div>
						</div>
						</form>
					</div>

			<h4>Evenements</h4>
			<ul id="eventlist" class="nav nav-list"></ul>
			</div>
		</div>
		<div class="clearfix"></div>
		<br><br>

			<script type="text/javascript" src="components/jquery/jquery.min.js"></script>
			<script type="text/javascript" src="components/underscore/underscore-min.js"></script>
			<script type="text/javascript" src="js/calendar.js"></script>
			<script type="text/javascript" src="components/bootstrap3/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
			<script type="text/javascript" src="js/app.js"></script>
			<script type="text/javascript" src="js/language/fr-FR.js"></script>
		</div>
	</body>
</html>