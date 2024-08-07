<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Empanelment Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
        .file-upload-section {
            margin-top: 20px;
        }
        label{
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">WELCOME TO VENDOR EMPANELMENT SYSTEM</h1>
        <h2 class="mb-4">Vendor Empanelment Form (IT and Portal Development)</h2>
        <form id="vendorForm" class="border py-5 px-3"  method="post" action="/about" enctype="multipart/form-data" onsubmit="checkform()">

        <?=csrf_field()?>
            <!-- Vendor Details -->
            <div class="form-row">
                <div class="col-lg-6 col-12 form-group">
                    <label for="vendorName">Vendor Name*</label>
                    <input type="text" onkeyup="namevalidation(this)" class="form-control" id="vendorName" name="vendorName" required>
                  <p style="color: #e92020;     font-weight: 600;   font-size: 14px;"></p>

                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="status">Status of Applicant*</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="" disabled selected>Select status</option>
                        <option value="Individual">Individual</option>
                        <option value="Private Limited company">Private Limited company</option>
                        <option value="Sole Proprietorship concern">Sole Proprietorship concern</option>
                        <option value="Public Ltd Company">Public Ltd Company</option>
                        <option value="PSU">PSU</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="email">Email Address*</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="address">Address for Communication*</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="website">Website*</label>
                    <input type="url" class="form-control" id="website" name="website" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="telephone">Telephone No.*</label>
                    <input type="text" onkeyup="limitInputLength(this)" maxlength="10" onkeydown="keywork()" class="form-control" id="telephone" name="telephone" required  pattern="[1-9]{1}[0-9]{9}">
                    <p style="color: #e92020;     font-weight: 600;   font-size: 14px;"></p>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="fax">Fax/ Telefax Number</label>
                    <input type="tel" class="form-control" id="fax" name="fax">
                </div>
            </div>


            <!-- Authorised Person -->
            <h3 class="my-4">Authorised Person</h3>
            <div class="form-row">
                <div class="col-lg-6 col-12 form-group">
                    <label for="authPersonName">Name</label>
                    <input type="text"  onkeyup="namevalidation(this)" class="form-control" id="authPersonName" name="authPersonName">
                    <p style="color: #e92020;     font-weight: 600;   font-size: 14px;"></p>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="authPersonDesignation">Designation</label>
                    <input type="text" class="form-control" id="authPersonDesignation" name="authPersonDesignation">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="authPersonEmail">Email</label>
                    <input type="email" class="form-control" id="authPersonEmail" name="authPersonEmail">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="authPersonMobile">Mobile No.</label>
                    <input type="tel" class="form-control" id="authPersonMobile" name="authPersonMobile" maxlength="10">

                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="authPersonTelephone">Telephone No.</label>
                    <input type="tel" class="form-control" id="authPersonTelephone" name="authPersonTelephone">
                </div>
            </div>

            <!-- Alternate Person -->
            <h3 class="my-4">Alternate Person</h3>
            <div class="form-row">
                <div class="col-lg-6 col-12 form-group">
                    <label for="altPersonName">Name</label>
                    <input type="text" onkeyup="namevalidation(this)" class="form-control" id="altPersonName" name="altPersonName">
                    <p style="color: #e92020;     font-weight: 600;   font-size: 14px;"></p>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="altPersonDesignation">Designation</label>
                    <input type="text" class="form-control" id="altPersonDesignation" name="altPersonDesignation">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="altPersonEmail">Email</label>
                    <input type="email" class="form-control" id="altPersonEmail" name="altPersonEmail">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="altPersonMobile">Mobile No.</label>
                    <input type="text" class="form-control" id="altPersonMobile"  name="altPersonMobile" maxlength="10">
                    <small  >Only numeric values allowed with a maximum of 10 digits.</small>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="altPersonTelephone">Telephone No.</label>
                    <input type="text" maxlength="10" class="form-control" id="altPersonTelephone" name="altPersonTelephone">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="panNo">PAN No.</label>
                    <input type="text" class="form-control" id="panNo" name="panNo">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="gemId">GeM ID</label>
                    <input type="text" class="form-control" id="gemId" name="gemId">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="gstNo">GST Regn. No. with Address*</label>
                    <input type="text" class="form-control" id="gstNo" name="gstNo" required>
                </div>
            </div>

            <!-- Beneficiary’s Complete Bank Details -->
            <h3 class="my-4">Beneficiary’s Complete Bank Details</h3>
            <div class="form-row">
                <div class="col-lg-6 col-12 form-group">
                    <label for="bankAccountNo">Bank Account No.*</label>
                    <input type="text" class="form-control" id="bankAccountNo" name="bankAccountNo" required pattern="[0-9]+">
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="ifscCode">IFSC / NEFT Code*</label>
                    <input type="text" class="form-control" id="ifscCode" name="ifscCode" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="bankName">Name of the Bank*</label>
                    <input type="text" class="form-control" id="bankName" name="bankName" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="bankAddress">Address of the Bank*</label>
                    <input type="text" class="form-control" id="bankAddress" name="bankAddress" required>
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <label for="turnover2023">Turnover 2023-2024*</label>
                    <input type="number" class="form-control" id="turnover2023" name="turnover2023" required>
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <label for="turnover2022">Turnover 2022-2023*</label>
                    <input type="number" class="form-control" id="turnover2022" name="turnover2022" required>
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <label for="turnover2021">Turnover 2021-2022*</label>
                    <input type="number" class="form-control" id="turnover2021" name="turnover2021" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="salesTurnover">Sales turnover in Crores*</label>
                    <input type="number" class="form-control" id="salesTurnover" name="salesTurnover" required>
                </div>
            </div>

            <!-- Detail of Person Filling This Application -->
            <h3 class="my-4">Detail of Person Filling This Application</h3>
            <div class="form-row">
                <div class="col-lg-6 col-12 form-group">
                    <label for="fillerName">Name*</label>
                    <input type="text" class="form-control" id="fillerName" name="fillerName" required>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label for="fillerDesignation">Designation*</label>
                    <input type="text" class="form-control" id="fillerDesignation" name="fillerDesignation" required>
                </div>
            </div>

            <!-- Document Uploads -->
            <h3 class="my-4">Document Uploads</h3>
            <div class="file-upload-section">
                <label for="msmeCertificate">Are you a MSME Unit? If yes, please furnish Registration Details, Name of the DIC/State. If yes, upload MSME Certificate*</label>
                <div class="form-row">
                    <div class="col-lg-6 col-12 form-group">
                        <select class="form-control"  onchange="myFunction(this)" id="msmeUnit" name="msmeUnit" required>
                            <option value="" disabled selected>Select option</option>

                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                    </div>
                    <div class="col-lg-6 col-12 form-group " >
                        <input type="file" class="form-control" onchange="checksize(this)" name="msmeCertificate" style="display: none;" id="msmeCertificate" >
                        <small  style="color: #e92020;     font-weight: 600;   font-size: 14px;"></small>
                    </div>
                </div>

            </div>

            <div class="file-upload-section">
                <label for="scStWomenCertificate">If you are MSME, is it owned by SC/ST Entrepreneurs or Women Entrepreneurs? If Yes, please specify the Name of the Owner who is SC or ST or Women Entrepreneur (as applicable)</label>
                <div class="form-row">
                    <div class="col-lg-6 col-12 form-group">
                        <select class="form-control" onchange="myFunction2(this)" id="scStWomen" name="scStWomen">
                            <option value="" disabled selected>Select option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                    </div>
                    <div class="col-lg-6 col-12 form-group " >
                        <input type="file" class="form-control" onchange="checksize(this)" id="scStWomenCertificate" name="scStWomenCertificate"  style="display: none;">
                        <small  style="color: #e92020;     font-weight: 600;   font-size: 14px;"></small>

                    </div>
                </div>

            </div>

            <div class="file-upload-section">
                <label for="startupCertificate">Are you a Startup? If yes, upload Startup Certificate*</label>
                <div class="form-row">
                    <div class="col-lg-6 col-12 form-group">
                        <select class="form-control"  onchange="myFunction3(this)" id="startup" name="startup" required>
                            <option  disabled selected>Select option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>


                    </div>
                    <div class="col-lg-6 col-12 form-group" >
                    <input type="file" class="form-control" onchange="checksize(this)" style="display: none;" id="startupCertificate" name="startupCertificate" accept=".zip,.rar,.pdf">

                    <small  style="color: #e92020;     font-weight: 600;   font-size: 14px;"></small>
                    </div>



                    </div>

                    <div class=" col-lg-12 px-0 form-group">
                <label for="captcha">Please enter the Captcha Code*</label>
                <div class="col-lg-4 col-6 px-0">
                <input type="text" class="form-control" id="captcha" name="captcha" required>
                </div>

            </div>

                </div>
                <div class="row justify-content-center">

<div class="col-lg-2"> <center>  <button type="submit" id="submitbtn" class="btn btn-success px-3">Submit</button> </center></div>

<div class="col-lg-2"> <center>  <a href="" class="btn btn-danger px-3">Exit</a> </center></div>

            </div>

            </div>






        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript for validation -->
    <script>



function namevalidation(data){
    const regex = /[@#%^&*\-+={}[\]:;"'<>,.?\/|\\]/;

if(regex.test(data.value)) {
    data.nextElementSibling.innerHTML="Dont use special characters @ , # ";
 document.getElementById('submitbtn').disabled = true;
}else{
     data.nextElementSibling.innerHTML="";
     document.getElementById('submitbtn').disabled = false;
}
}



// file input  msme

function myFunction(inputfiled){

  // Assuming `inputfield` is a reference to the input element you are targeting
if (inputfiled.value == "Yes") {
    document.getElementById("msmeCertificate").style.display = 'block';

} else {
    // Hide the next sibling element

    document.getElementById("msmeCertificate").style.display = 'None';

}
}


function myFunction(inputfiled){

  // Assuming `inputfield` is a reference to the input element you are targeting
if (inputfiled.value == "Yes") {
    document.getElementById("msmeCertificate").style.display = 'block';
    document.getElementById("msmeCertificate").required = false;

} else {
    // Hide the next sibling element

    document.getElementById("msmeCertificate").style.display = 'None';
    document.getElementById("msmeCertificate").required = true;
}
}



function myFunction2(inputfiled){

  // Assuming `inputfield` is a reference to the input element you are targeting
if (inputfiled.value == "Yes") {
    document.getElementById("scStWomenCertificate").style.display = 'block';
    document.getElementById("scStWomenCertificate").required = false;

} else {
    // Hide the next sibling element

    document.getElementById("scStWomenCertificate").style.display = 'None';
    document.getElementById("scStWomenCertificate").required = true;

}
}



function myFunction3(inputfiled){
    console.log();
  // Assuming `inputfield` is a reference to the input element you are targeting
if (inputfiled.value == "Yes") {
    document.getElementById("startupCertificate").style.display = 'block';
    document.getElementById("startupCertificate").required = false;

} else {
    // Hide the next sibling element

    document.getElementById("startupCertificate").style.display = 'None';
    document.getElementById("scStWomenCertificate").required = true;

}
}


function checksize(filename) {
    var fileLimit = 500000; // Limit in kilobytes
    var files = filename.files; // This is a FileList object
    var allowedExtensions = ['pdf', 'zip' ,'rar'];
// Create an object to store file sizes
var fileSizes = {};
var filezie;
var fileName;
// Iterate over the FileList object
for (var i = 0; i < files.length; i++) {
    var file = files[i];
    fileName=file.name;
    filezie= file.size; // Store the size in bytes
}

if(fileLimit<filezie){
    filename.nextElementSibling.innerHTML="file Size must be  less then 500kb ";
 document.getElementById('submitbtn').disabled = true;
}else{

    var extension = fileName.split('.').pop().toLowerCase();
    if (!allowedExtensions.includes(extension)) {
            allFilesValid = false; // If any file has an invalid extension
            filename.nextElementSibling.innerHTML = "Only PDF , RAR and ZIP files are allowed.";
            document.getElementById('submitbtn').disabled = true;
            return; // Exit function if any file is invalid
        }else{

            document.getElementById('submitbtn').disabled = false;
        }



}

}




function checkform(){

    var startup=  document.getElementById("startupCertificate").files;
console.log(startup);


}



       document.getElementById('telephone').addEventListener('keydown', function(event) {
            // Allow control keys like backspace, delete, tab, etc.
            if (event.key === 'Backspace' || event.key === 'Tab' || event.key === 'ArrowLeft' || event.key === 'ArrowRight' || event.key === 'Delete') {
                return;
            }

            // Check if the pressed key is a numeric key
            if (!/^\d$/.test(event.key)) {
                event.preventDefault(); // Prevent the default action if it's not a number
            }
        });





       document.getElementById('altPersonMobile').addEventListener('keydown', function(event) {
            // Allow control keys like backspace, delete, tab, etc.
            if (event.key === 'Backspace' || event.key === 'Tab' || event.key === 'ArrowLeft' || event.key === 'ArrowRight' || event.key === 'Delete') {
                return;
            }

            // Check if the pressed key is a numeric key
            if (!/^\d$/.test(event.key)) {
                event.preventDefault(); // Prevent the default action if it's not a number
            }
        });





       document.getElementById('altPersonTelephone').addEventListener('keydown', function(event) {
            // Allow control keys like backspace, delete, tab, etc.
            if (event.key === 'Backspace' || event.key === 'Tab' || event.key === 'ArrowLeft' || event.key === 'ArrowRight' || event.key === 'Delete') {
                return;
            }

            // Check if the pressed key is a numeric key
            if (!/^\d$/.test(event.key)) {
                event.preventDefault(); // Prevent the default action if it's not a number
            }
        });

        document.getElementById('authPersonMobile').addEventListener('keydown', function(event) {
            // Allow control keys like backspace, delete, tab, etc.
            if (event.key === 'Backspace' || event.key === 'Tab' || event.key === 'ArrowLeft' || event.key === 'ArrowRight' || event.key === 'Delete') {
                return;
            }

            // Check if the pressed key is a numeric key
            if (!/^\d$/.test(event.key)) {
                event.preventDefault(); // Prevent the default action if it's not a number
            }
        });


    </script>
</body>
</html>
