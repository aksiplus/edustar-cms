
<!DOCTYPE html>
<html>
	<head>
		<title>Application Wizard Bootstrap v3.x</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
		<link href="../src/bootstrap-wizard.css" rel="stylesheet" />
		<link href="chosen/chosen.css" rel="stylesheet" />
		<style type="text/css">
			.wizard-modal p {
				margin: 0 0 10px;
				padding: 0;
			}

			#wizard-ns-detail-servers, .wizard-additional-servers {
				font-size: 12px;
				margin-top: 10px;
				margin-left: 15px;
			}
			#wizard-ns-detail-servers > li, .wizard-additional-servers li {
				line-height: 20px;
				list-style-type: none;
			}
			#wizard-ns-detail-servers > li > img {
				padding-right: 5px;
			}

			.wizard-modal .chzn-container .chzn-results {
				max-height: 150px;
			}
			.wizard-addl-subsection {
				margin-bottom: 40px;
			}
			.create-server-agent-key {
				margin-left: 15px;
				width: 90%;
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv-3.7.0.js"></script>
		<script src="js/respond-1.3.0.min.js"></script>
		<![endif]-->
	</head>
    <body style="padding:30px;">


		<div class="wizard" id="satellite-wizard" data-title="Instalasi EduStar CMS v1.0.0">

            <!-- Step 1 Name & FQDN -->

            <div class="wizard-card" data-cardname="welcome">

                @include('install.section.welcome')

            </div>

			<div class="wizard-card" data-cardname="name">
                <h3>Kompatibilitas Sistem</h3>

                @include('install.section.system_compatibility')

            </div>

            <div class="wizard-card" data-cardname="name">
                <h3>Konfigurasi Database</h3>

                @include('install.section.database_configuration')

            </div>

			<div class="wizard-card" data-cardname="group">
				<h3>Server Group</h3>

				<div class="wizard-input-section">
					<p>
						Where would you like server <strong class="create-server-name"></strong>
						to go?
					</p>

					<img class="wizard-group-list" src="img/groups.png" />
				</div>
			</div>

			<div class="wizard-card wizard-card-overlay" data-cardname="services">
				<h3>Identitas Sekolah</h3>

				@include('install.section.school_identity')

			</div>

			<div class="wizard-card wizard-card-overlay" data-cardname="location">
				<h3>Setting User Admin</h3>

				@include('install.section.user_configuration')
			</div>

			<div class="wizard-card wizard-card-overlay">
				<h3>Proses Instalasi</h3>

				<div class="wizard-input-section">
					<p>
						Select the  notification schedule to be used for outages.
					</p>

					<select name="notification" class="wizard-ns-select chzn-select form-control" data-placeholder="Notification schedule" style="width:350px;">
						<option value=""></option>
						<option>ALIS Production</option>
						<option>ALIS Development &amp; Staging</option>
						<option>Panopta Development &amp; Staging</option>
						<option>Jira</option>
						<option>QSC Enterprise Production</option>
						<option>QSC Enterprise Development &amp; Staging</option>
						<option>Panopta Production</option>
						<option>Panopta Monitoring Nodes</option>
						<option>Common</option>
					</select>
				</div>

				<div class="wizard-ns-detail hide">
					Also using <strong>ALIS Production</strong>:

					<ul id="wizard-ns-detail-servers">
						<li><img src="img/folder.png" />Corporate sites</li>
						<li><img src="img/folder.png" />dt01.sat.medtelligent.com</li>
						<li><img src="img/server_new.png" />alisonline.com</li>
						<li><img src="img/server_new.png" />circa-db04.sat.medtelligent.com</li>
						<li><img src="img/server_new.png" />circa-services01.sat.medtelligent.com</li>
						<li><img src="img/server_new.png" />circa-web01.sat.medtelligent.com</li>
						<li><img src="img/server_new.png" />heartbeat.alisonline.com</li>
						<li><img src="img/server_new.png" />medtelligent.com</li>
						<li><img src="img/server_new.png" />dt02.fre.medtelligent.com</li>
						<li><img src="img/server_new.png" />dev03.lin.medtelligent.com</li>
                    </ul>img
                </div>
			</div>

			<div class="wizard-card">
				<h3>Agent Setup</h3>

				<div class="wizard-input-section">
					<p>The <a target="_blank" href="http://www.panopta.com/support/knowledgebase/support-questions/how-do-i-install-the-panopta-monitoring-agent/">Panopta Agent</a> allows
						you to monitor local resources (disk usage, cpu usage, etc).
						If you would like to set that up now, please download
						and follow the <a target="_blank" href="http://www.panopta.com/support/knowledgebase/support-questions/how-do-i-install-the-panopta-monitoring-agent/">install instructions.</a>
					</p>

					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Download<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">.rpm</a></li>
							<li><a href="#">.deb</a></li>
							<li><a href="#">.tar.gz</a></li>
						</ul>
					</div>
				</div>


				<div class="wizard-input-section">
					<p>You will be given a server key after you install the Agent
						on <strong class="create-server-name"></strong>.
						If you know your server key now, please enter it
						below.</p>

					<div class="form-group">
						<input type="text" class="create-server-agent-key form-control" placeholder="Server key (optional)" data-validate="">
					</div>
				</div>


				<div class="wizard-error">
					<div class="alert alert-error">
						<strong>There was a problem</strong> with your submission.
						Please correct the errors and re-submit.
					</div>
				</div>

				<div class="wizard-failure">
					<div class="alert alert-error">
						<strong>There was a problem</strong> submitting the form.
						Please try again in a minute.
					</div>
				</div>

				<div class="wizard-success">
					<div class="alert alert-success">
						<span class="create-server-name"></span>Server Created <strong>Successfully.</strong>
					</div>

					<a class="btn btn-default create-another-server">Create another server</a>
					<span style="padding:0 10px">or</span>
					<a class="btn btn-success im-done">Done</a>
					<a class="btn btn-success">Done</a>
				</div>
			</div>
		</div>

		<script src="js/jquery-2.0.3.min.js" type="text/javascript"></script>
		<script src="chosen/chosen.jquery.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/prettify.js" type="text/javascript"></script>
		<script src="../src/bootstrap-wizard.js" type="text/javascript"></script>
        <script type="text/javascript">


			$(document).ready(function() {
				$.fn.wizard.logging = true;
				var wizard = $('#satellite-wizard').wizard({
					keyboard : false,
					contentHeight : 400,
					contentWidth : 1024,
					backdrop: 'static'
                });

                wizard.show();

				$(".chzn-select").chosen();

				$('#fqdn').on('input', function() {
					if ($(this).val().length != 0) {
						$('#ip').val('').attr('disabled', 'disabled');
						$('#fqdn, #ip').parents('.form-group').removeClass('has-error has-success');
					} else {
						$('#ip').val('').removeAttr('disabled');
					}
				});

				var pattern = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/;
				x = 46;

				$('#ip').on('input', function() {
					if ($(this).val().length != 0) {
						$('#fqdn').val('').attr('disabled', 'disabled');
					} else {
						$('#fqdn').val('').removeAttr('disabled');
					}
				}).keypress(function(e) {
					if (e.which != 8 && e.which != 0 && e.which != x && (e.which < 48 || e.which > 57)) {
						console.log(e.which);
						return false;
					}
				}).keyup(function() {
					var $this = $(this);
					if (!pattern.test($this.val())) {
						//$('#validate_ip').text('Not Valid IP');
						console.log('Not Valid IP');
						$this.parents('.form-group').removeClass('has-error has-success').addClass('has-error');
						while ($this.val().indexOf("..") !== -1) {
							$this.val($this.val().replace('..', '.'));
						}
						x = 46;
					} else {
						x = 0;
						var lastChar = $this.val().substr($this.val().length - 1);
						if (lastChar == '.') {
							$this.val($this.val().slice(0, -1));
						}
						var ip = $this.val().split('.');
						if (ip.length == 4) {
							//$('#validate_ip').text('Valid IP');
							console.log('Valid IP');
							$this.parents('.form-group').removeClass('has-error').addClass('has-success');
						}
					}
				});

				wizard.on('closed', function() {
					wizard.reset();
				});

				wizard.on("reset", function() {
					wizard.modal.find(':input').val('').removeAttr('disabled');
					wizard.modal.find('.form-group').removeClass('has-error').removeClass('has-succes');
					wizard.modal.find('#fqdn').data('is-valid', 0).data('lookup', 0);
				});

				wizard.on("submit", function(wizard) {
					var submit = {
						"hostname": $("#new-server-fqdn").val()
					};

					this.log('seralize()');
					this.log(this.serialize());
					this.log('serializeArray()');
					this.log(this.serializeArray());

					setTimeout(function() {
						wizard.trigger("success");
						wizard.hideButtons();
						wizard._submitting = false;
						wizard.showSubmitCard("success");
						wizard.updateProgressBar(0);
					}, 2000);
				});

				wizard.el.find(".wizard-success .im-done").click(function() {
					wizard.hide();
					setTimeout(function() {
						wizard.reset();
					}, 250);

				});

				wizard.el.find(".wizard-success .create-another-server").click(function() {
					wizard.reset();
				});

				$(".wizard-group-list").click(function() {
					alert("Disabled for demo.");
				});

				$('#open-wizard').click(function(e) {
					e.preventDefault();
					wizard.show();
				});
			});

			function validate(el) {
				var name = el.val();
				var retValue = {};

				if (name == "") {
					retValue.status = false;
					retValue.msg = "Tidak boleh kosong";
				} else {
					retValue.status = true;
				}

				return retValue;
			};

        </script>

        <script>
                $( "#cekKoneksi" ).click(function(e) {
                    e.preventDefault()
                    alert( "Handler for .click() called." );
                });
            </script>
	</body>
</html>
