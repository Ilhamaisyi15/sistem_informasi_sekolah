<style>
	/* CSS Document */
	div.joincontent {
		position: relative;
		width: 65%;
		min-height: 85vh;
		height: auto;
		margin-top: 2%;
		margin-left: auto;
		margin-right: auto;
		background-color: #fcfcfc;
		border-radius: 20px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 15px 0 rgba(0, 0, 0, 0.12);

	}

	div.progresscont {
		width: 98%;
		padding-top: 5.5%;
		margin-left: auto;
		margin-right: auto;

		height: 7rem;

	}

	div.joincontent h5 {
		font-family: 'Noto Serif JP', sans-serif;
		color: #34393f;
	}

	div.circulo {
		width: 5em;
		height: 5em;
		border: 2px solid #45597a;
		background-color: #fcfcfc;
		border-radius: 2.5em;
		padding-top: 30%;
		cursor: pointer;
	}

	.activecirculo {
		transition: .5s ease all;
		background-color: #45597a !important;
	}

	.activecirculo i {
		color: #fcfcfc !important;
	}

	div.circulo i {
		font-size: 1.75rem;
		color: #45597a;
	}

	div.circleblocks {
		width: 100%;
		position: absolute;
		top: 0;
		margin-top: 3.5%;
	}

	.progress-bar {
		background-color: #45597a !important;
	}

	.wizard-navigation {
		position: relative;
		bottom: 0;
		width: 98%;
		margin-left: auto;
		margin-right: auto;
		padding-bottom: 2.5%;
	}

	.wizard-navigation button {
		border-radius: 2rem;
		width: 10rem;
	}

	#submitForm {
		width: 15rem;
	}

	div.registration-content {
		width: 95%;
		min-height: 51vh;
		margin-left: auto;
		margin-right: auto;
		position: relative;
		margin-top: 5%;
		padding-top: 2.5%;
	}

	div.registration-content>div {
		width: 100%;
		min-height: inherit;

	}

	div.registration-content input {
		border-radius: 2rem;
	}

	#addrescont,
	#verifycont,
	#aboutcont {
		display: none;
	}

	#aboutcont {}

	#addrescont {}

	#verifycont {}

	#submitForm {
		display: none;
	}

	.btn-file {
		position: relative;
		overflow: hidden;
		background-color: #c5ccd8 !important;
		border-top-right-radius: 0 !important;
		border-bottom-right-radius: 0 !important;
	}

	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}

	#id-cont,
	#proof-cont {
		width: 100%;
		height: 18em;
		padding: 2.5%;
	}

	.uploadid {
		border: 1px solid #c9ced6;
		height: 40vh;
		position: relative;
	}

	.uploadid .form-group {
		height: inherit !important;
	}

	/*Extra small devices (portrait phones, less than 576px)*/
	@media (max-width: 575.98px) {
		div.joincontent {
			width: 98%;
			height: 155vh;

		}

		div.registration-content {
			padding-top: 17.5%;
		}
	}

	/* Medium devices (tablets, less than 992px)*/
	@media (max-width: 991.98px) {}

	/*Large devices (desktops, less than 1200px)*/
	@media (max-width: 1350px) {

		#id-cont,
		#proof-cont {
			height: 15em;

		}
	}

	/*Large devices (desktops, less than 1200px)*/
	@media (max-width: 1750px) {
		div.joincontent {

			height: 94vh;
		}
	}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<div class="joincontent">
	<h5 class="text-center">Registration Form</h5>
	<div class="progresscont">

		<div class="progress" style="height: 5px;">
			<div id="progresswizard" class="progress-bar" role="progressbar" style="width: 15%;" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="circleblocks">
			<div class="d-flex justify-content-around mb-3">
				<div class="p-2 ">
					<div class="aboutblock">
						<div class="circulo activecirculo text-center"><i class="fas fa-user"></i></div>
						<div class="title text-center">About</div>
					</div>
				</div>
				<div class="p-2 ">
					<div class="addressblock">
						<div class="circulo text-center"><i class="fas fa-location-arrow"></i></div>
						<div class="title text-center">Address</div>
					</div>
				</div>
				<div class="p-2 ">
					<div class="verifyblock">
						<div class="circulo text-center"><i class="far fa-id-card"></i></div>
						<div class="title text-center">Verify</div>
					</div>
				</div>
			</div>
		</div>
		<form action="registerUser" method="POST">
			<input type="hidden" name="_token" value="iJquRbgH4Np4OcWzjk8Bd03CaexHzse7gz2vHrml">

			<div class="registration-content">
				<div id="aboutcont" data-progress="15%">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">

								<label for="firstname">First Name <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="firstname" id="firstname" required>

							</div>

						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="lastname">Last Name <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="lastname" id="lastname" required>

							</div>

						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="username">Username <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="username" id="username" required>

							</div>

						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="email">Email <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="email" id="email" required>
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

							</div>

						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="password">Password <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="password" id="password" required>

							</div>

						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="repassword">Re-Password <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="repassword" id="repassword" required>

							</div>

						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="phone">Phone <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="phone" id="phone" required>

							</div>

						</div>
					</div>



				</div>
				<div id="addrescont" data-progress="50%">
					<div class="row">
						<div class="col-lg-8">
							<div class="form-group">

								<label for="streetname">Street Name <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="streetname" id="streetname" required>

							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">

								<label for="streetno">Street Number <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="streetno" id="streetno" required>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="city">City <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="city" id="city" value="Toronto" required>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="postalcode">Postal Code <span style="color: #cc1818;">*</span></label>
								<input type="text" class="form-control form-control-lg" name="postalcode" id="postalcode" required>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="state">State</label>
								<input type="text" class="form-control form-control-lg" name="state" id="state" value="Ontario" required>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">

								<label for="country_residence">Country <span style="color: #cc1818;">*</span></label>
								<select name="country_residence" class="selectpicker countrypicker form-control form-control-lg">
									<option value="">Canada</option>
									<option value="">United States</option>
									<option value="">United Kingdom</option>
									<option value="">Germany</option>
									<option value="">France</option>
								</select>

							</div>
						</div>

					</div>

				</div>
				<div id="verifycont" data-progress="85%">
					<h6 class="text-center">In order to verify your identity based on the (Know your Customer) rules you have to upload one Government ID(Passport, ID Card or Driver's License) as well as a Proof of Address(Any bill that is clearly on your name and address that you register at our site).</h6>


				</div>
			</div>

			<div class="d-flex justify-content-between mb-3 wizard-navigation ">
				<div class="p-2"><button id="prevbtn" type="button" class="btn btn-outline-dark btn-lg">Previous</button></div>

				<div class="p-2"><button id="nextbtn" type="button" class="btn btn-primary btn-lg text-center">Next</button>
					<button id="submitForm" name="submitForm" style="" type="submit" class="btn btn-primary btn-lg ">Create Profile</button>
				</div>
			</div>
		</form>


	</div>

	<script>
		// JavaScript Document
		(function() {

			var wizard = {
				formstate: 0,
				emptyInputs: 0,
				inactiveSections: [1, 2],
				setInactiveSections: function() {
					if (this.formstate === 0) {
						this.inactiveSections = [1, 2];
					} else if (this.formstate === 1) {
						this.inactiveSections = [0, 2];
					} else {
						this.inactiveSections = [0, 1];
					}
				},
				setInactiveCircles: function() {
					if (this.formstate === 0) {
						var inactiveCirclea = document.querySelector(this.circlesections[this.inactiveSections[0]]);
						var inactiveCircleb = document.querySelector(this.circlesections[this.inactiveSections[1]]);
						inactiveCirclea.classList.remove("activecirculo");
						inactiveCircleb.classList.remove("activecirculo");
					} else if (this.formstate === 1) {
						var inactiveCircles = document.querySelector(this.circlesections[this.inactiveSections[1]]);
						inactiveCircles.classList.remove("activecirculo");

					}

				},
				formsections: ['#aboutcont', '#addrescont', '#verifycont'],
				circlesections: ['.aboutblock .circulo', '.addressblock .circulo', '.verifyblock .circulo'],
				prevbtn: 'prevbtn',
				nextbtn: 'nextbtn',

				initiateForm: function() {

					var currsection = document.querySelector(this.formsections[this.formstate]);
					var inactiveSecta = document.querySelector(this.formsections[this.inactiveSections[0]]);
					var inactiveSectb = document.querySelector(this.formsections[this.inactiveSections[1]]);


					var currcircle = document.querySelector(this.circlesections[this.formstate]);


					var progressbar = document.querySelector('#progresswizard');
					var currsectionprogress = currsection.getAttribute('data-progress');

					progressbar.style.width = currsectionprogress;
					currsection.style.display = "block";
					inactiveSecta.style.display = "none";
					inactiveSectb.style.display = "none";


					if (this.formstate === 0) {
						document.getElementById(this.prevbtn).style.display = "none";
					} else {
						document.getElementById(this.prevbtn).style.display = "inline-block";
					}

					currcircle.classList.add("activecirculo");
					this.setInactiveCircles();


					if (this.formstate === 2) {
						document.querySelector("#nextbtn").style.display = "none";
						document.querySelector("#submitForm").style.display = "inline-block";
					} else {
						document.querySelector("#nextbtn").style.display = "inline-block";
						document.querySelector("#submitForm").style.display = "none";
					}

					this.checkInput();
				},
				nextSection: function() {
					this.validateInput();
					if (this.emptyInputs === 0) {
						if (this.formstate < 2) {

							this.formstate++;
							this.setInactiveSections();
							wizard.initiateForm();
						}
					}

				},
				prevSection: function() {
					if (this.emptyInputs === 0) {
						if (this.formstate > 0) {
							this.formstate--;
							this.setInactiveSections();
							wizard.initiateForm();
						}
					}
				},
				validateInput: function() {

					var currsection = this.formsections[this.formstate];


					var inputfields = document.querySelectorAll(currsection + " input");
					for (var i = 0; i < inputfields.length; i++) {
						if (inputfields[i].value.length === 0) {
							inputfields[i].classList.add("is-invalid");
							this.emptyInputs++;
						}
					}


				},
				checkInput: function() {

					var currsection = this.formsections[this.formstate];
					var inputfields = document.querySelectorAll(currsection + " input");
					for (var i = 0; i < inputfields.length; i++) {
						var currElement = inputfields[i];
						currElement.addEventListener('focusout', inputValidation, false);
					}

					function inputValidation(event) {
						console.log(event.target.id);

						var currentInput = document.getElementById(event.target.id);

						if (currentInput.value.length > 3) {
							currentInput.classList.remove("is-invalid");
							if (wizard.emptyInputs > 0) {
								wizard.emptyInputs--;
							}
						}
						console.log(wizard.emptyInputs);
					}
				}
			};


			wizard.initiateForm();

			document.getElementById(wizard.nextbtn).addEventListener("click", function() {
				wizard.nextSection();
			});
			document.getElementById(wizard.prevbtn).addEventListener("click", function() {
				wizard.prevSection();
			});




		})();
	</script>