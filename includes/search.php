<!--HTML form and results-->
<form class="form-horizontal" action="" method="get">
	
<div class="form-group">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="search" placeholder="search by Last Name">
		</div>
</div>
<div class="form-group">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="fnsearch" placeholder="search by First Name">
		</div>
</div>
<div class="form-group">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="locationsearch" placeholder="search by Location of Practice">
		</div>
</div>
<div class="form-group">
	<div class="input-group mb-3">
		<!--<label class="form-label" for="specialty"><b>Specialty:</b></label>-->
	<select name="specialty" id="specialty" class="form-select">
	<option value="">Specialty...</option>
	<option value="Pathology">Pathology</option>
	<option value="Otolaryngology">Otolaryngology</option>
	<option value="Surgery">Surgery</option>
	<option value="Preventive Medicine">Preventive Medicine</option>
	<option value="Urology">Urology</option>
	<option value="Anesthesiology">Anesthesiology</option>
	<option value="Internal Medicine">Internal Medicine</option>
	<option value="Dermatology">Dermatology</option>
	<option value="Ophthalmology">Ophthalmology</option>
	<option value="Pediatrics">Pediatrics</option>
	<option value="Psychiatry and Neurology">Psychiatry and Neurology</option>
	<option value="Obstetrics & Gynecology">Obstetrics & Gynecology</option>
	<option value="Family Medicine">Family Medicine</option>
	<option value="Radiology">Radiology</option>
	<option value="Allergy & Immunology">Allergy & Immunology</option>
	<option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
	<option value="Thoracic Surgery">Thoracic Surgery</option>
	<option value="Plastic Surgery">Plastic Surgery</option>
	<option value="Physical Medicine and Rehabilitation">Physical Medicine and Rehabilitation</option>
	<option value="Neurological Surgery">Neurological Surgery</option>
	<option value="Emergency Medicine">Emergency Medicine</option>
	<option value="Plastic surgery">Plastic surgery</option>
	<option value="Colon & Rectal Surgery">Colon & Rectal Surgery</option>
	<option value="Medical Genetics">Medical Genetics</option>
	</select><br>
	</div>
</div>
<div class="form-group">
	<div class="input-group mb-3">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="M" name="gender" value="M">
  <label class="form-check-label" for="M">Male</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="F" name="gender" value="F">
  <label class="form-check-label" for="F">Female</label><br> 
  </div>
  </div>
</div>
<div class = "form-group">
	<div class="input-group mb-3">
	<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="Y" name="board" value="Y">
  <label class="form-check-label" for="Y">Yes, Certified TX Board</label>
	</div>
	<!--<b>Certified by the TX Board?</b>
		<div class="form-check">
  <input class="form-check-input" type="radio" id="Y" name="board" value="Y">
  <label class="form-check-label" for="Y">Yes</label>
		</div>
		<div class="form-check">
  <input class="form-check-input" type="radio" id="N" name="board" value="N">
  <label class="form-check-label" for="N">No</label><br>
		</div>-->
	</div>
</div>

<div class="form-group">
	<div class="input-group mb-3">
	<!--<label for="race"><b>Race:</b></label>-->
	<select name="race" id="race" class="form-select">
	<option value="">Race...</option>
	<option value="A">Asian</option>
	<option value="C">Caucasian</option>
	<option value="H">Hispanic</option>
	<option value="B">African-American</option>
	<option value="N">Indigenous American</option><br>
	</select>
	</div>
</div>
<div class="form-group">
	<div class="input-group mb-3">
	<!--<label for="sortBy">Sort By: </label>-->
	<select name="sortBy" id="sortBy" class="form-select">
	<option value="lastName">Sort by Last Name (default)</option>
	<option value="firstName">Sort by First Name</option>
	<option value="medSchool">Sort by Medical School Name</option>
	<option value="gradDate">Sort by Graduation Date</option>
	<option value="location">Sort by Location of Practice</option>
	</select><br>
	<!--<input type="submit" value="Submit">-->

	</div>
		<a href="/" class="btn btn-outline-secondary" role="button">Refresh</a>
		<!--<button type="reset" class="btn btn-secondary">Clear</button>-->
		<button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>