document.addEventListener('DOMContentLoaded', () => {
    //to make the home page as default page
    const list = document.querySelectorAll('.list');
    const lists = document.querySelectorAll('.list');
    const sections = document.querySelectorAll('.section');

    function activeLink(){
        list.forEach((item) => item.classList.remove('active'));
        this.classList.add('active');
    }

    list.forEach((item) => item.addEventListener('click', activeLink));

    lists.forEach((item) => {
        item.addEventListener('click', () => {
            lists.forEach((el) => el.classList.remove('active'));
            item.classList.add('active');
            sections.forEach((sec) => sec.classList.remove('active-section'));
            const target = item.getAttribute('data-target');
            document.getElementById(target).classList.add('active-section');
        });
    });

    //this is for the registration page. since it has 2 pages (instruction and form)
    //proceed to form
    const reFormBtn = document.querySelector('[data-target="re-form"]');
    if(reFormBtn) {
        reFormBtn.addEventListener('click', () => {
            document.getElementById('re-main').style.display = 'none';
            document.getElementById('re-form').style.display = 'block';
        });
    }

    //back to 1st page of register
    const backBtn = document.getElementById('back-register');
    if(backBtn) {
        backBtn.addEventListener('click', () => {
            document.getElementById('re-form').style.display = 'none';
            document.getElementById('re-main').style.display = 'block';
        });
    }
});

//this function is for the main assistance. if the value is clicked, it will display the sub assistances of the main
function enableParent(answer) {
    if (answer.value == 'unemployed') {
        document.getElementById('unemploy').classList.toggle('unempl', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    if (answer.value == 'Transport Worker') {
        document.getElementById('transport').classList.toggle('tw', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    if (answer.value == 'Natural Disaster Victims') {
        document.getElementById('main-disaster').classList.toggle('main-disaster', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    if (answer.value == 'Senior Citizen') {
        document.getElementById('senior').classList.toggle('seniors', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    if (answer.value == 'PWD') {
        document.getElementById('commonpwd').classList.toggle('commonpwd', !answer.checked);
        if (!answer.checked) {
        enableChild({ value: 'NULL' });
        enablePWD({ value: 'NULL' }); 
        }
    }
    if (answer.value == 'Medical Assistance') {
        document.getElementById('hospital').classList.toggle('hospitals', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    if (answer.value == 'Educational Assistance') {
        document.getElementById('education').classList.toggle('educations', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    if (answer.value == 'Burial Assistance') {
        document.getElementById('burial').classList.toggle('burial', !answer.checked);
        if (!answer.checked) enableChild({ value: 'NULL' });
    }
    //for typing specific
    if (!answer.checked) {
        document.getElementById('other-specify-parent').classList.add('other-specify-parent');
        document.getElementById('other_input_parent').value = '';
    }
}
    
//typing
function enableOther(answer) {
    const isOther = answer.value === 'Other (Please Specify)';
    document.getElementById('other-specify-child').classList.toggle('other-specify-child', !isOther);
    if (!isOther) document.getElementById('other_input_child').value = '';
}

//function for assistance
function enableTherapy(answer){
    const isTherapy = answer.value === 'Therapy and Rehabilitation Assistance'
                   || answer.value === 'Therapy and Rehabilitation';
    document.getElementById('therapy').classList.toggle('therapy', !isTherapy);
}

//function for devices
function enableDevice(answer){
    document.getElementById('devices_equipment').classList.toggle('devices_equipment', answer.value !== 'Assistive Devices Assistance');
}

//other function for medical
function enableMedicalImageUpload(answer){

    const isBill = answer.value === 'Medical Bills' || answer.value === 'Medical Bill';
    document.getElementById('bill').classList.toggle('bill', !isBill);

    document.getElementById('medicine').classList.toggle('medicine', answer.value !== 'Medicines / Prescription Drugs');

    document.getElementById('equipment').classList.toggle('equipment', answer.value !== 'Medical Equipment');
}

//function for education
function enableEducation(answer){
    document.getElementById('study').classList.toggle('study', answer.value !== 'Educational Assistance');
    document.getElementById('tuition').classList.toggle('tuition', answer.value !== 'Tuition Fee Assistance');
    document.getElementById('supplies').classList.toggle('supplies', answer.value !== 'School Supplies Assistance');
    document.getElementById('loans').classList.toggle('loans', answer.value !== 'Student Loan Assistance');
}
//other function for senior
function enableseniormedical(answer){
    document.getElementById('seniormedicalcondition').classList.toggle('seniormedicalcondition', answer.value !== 'Medical Assistance Senior');
}

function enablePWD(answer) {
    enableOther({ value: 'NULL' });
    const pwdDivs = ['physical', 'visual', 'hearing', 'speech', 'intellectual', 'learning', 'psychosocial', 'multiple'];
    const pwdClasses = ['physical', 'visual', 'hearing', 'speech', 'intellectual', 'learning', 'psychosocial', 'multiple'];

    // hide all first
    pwdDivs.forEach((id, i) => {
        document.getElementById(id).classList.add(pwdClasses[i]);
    });

    // show the selected one
    if (answer.value === 'Physical Disability') {
        document.getElementById('physical').classList.remove('physical');
    }
    if (answer.value === 'Visual Disability') {
        document.getElementById('visual').classList.remove('visual');
    }
    if (answer.value === 'Hearing Disability') {
        document.getElementById('hearing').classList.remove('hearing');
    }
    if (answer.value === 'Speech and Language Disability') {
        document.getElementById('speech').classList.remove('speech');
    }
    if (answer.value === 'Intellectual Disability') {
        document.getElementById('intellectual').classList.remove('intellectual');
    }
    if (answer.value === 'Learning Disability') {
        document.getElementById('learning').classList.remove('learning');
    }
    if (answer.value === 'Psychosocial Disability') {
        document.getElementById('psychosocial').classList.remove('psychosocial');
    }
    if (answer.value === 'Multiple Disabilities') {
        document.getElementById('multiple').classList.remove('multiple');
    }

    enableOther({ value: 'NULL' });
    enableTherapy({ value: 'NULL' });   
    enableEducation({ value: 'NULL' }); 
    enableDevice({ value: 'NULL' });    


}

//for the sub assistance
function enableChild(answer) {
   
    const isFinancial = answer.value === 'Financial Assistance (Cash Aid)' 
                     || answer.value === 'Financial Assistance';
    document.getElementById('financial').classList.toggle('financial', !isFinancial);

    const isMedical = answer.value === 'Medical Assistance' 
               || answer.value === 'Medical Assistance Senior'
               || answer.value === 'Medical Bill';
    document.getElementById('medical').classList.toggle('medical', !isMedical);

    document.getElementById('food').classList.toggle('food', answer.value !== 'Food Assistance');

    const isTransport = answer.value === 'Transportation Assistance'
                 || answer.value === 'Transportation Allowance';
    document.getElementById('transportation').classList.toggle('transport', !isTransport);

    const isLivelihood = answer.value === 'Livelihood Assistance' 
                        || answer.value === 'Livelihood Recovery Assistance'
                        || answer.value === 'Livelihood and Employment Assistance';
    document.getElementById('live').classList.toggle('live', !isLivelihood);

    const isEmployment = answer.value === 'Employment Assistance' 
                      || answer.value === 'Alternative Employment Assistance';
    document.getElementById('employment').classList.toggle('employment', !isEmployment);

    document.getElementById('devices').classList.toggle('devices', answer.value !== 'Assistive Devices Assistance');

    const isTherapy = answer.value === 'Therapy and Rehabilitation Assistance'
                   || answer.value === 'Therapy and Rehabilitation';
    document.getElementById('therapy').classList.toggle('therapy', !isTherapy);

    document.getElementById('fuel').classList.toggle('fuel', answer.value !== 'Fuel Subsidy Assistance');

    document.getElementById('vehicle').classList.toggle('vehicle', answer.value !== 'Vehicle Repair and Maintenance Assistance');

    document.getElementById('shelter').classList.toggle('shelter', answer.value !== 'Temporary Shelter Assistance');

    document.getElementById('house').classList.toggle('house', answer.value !== 'Housing Repair and Rehabilitation Assistance');

    document.getElementById('funeral').classList.toggle('funeral', answer.value !== 'Funeral Services Assistance');

    enableOther(answer); 
    enableEducation(answer);          
    enableseniormedical(answer);  
    enableMedicalImageUpload(answer);     
}

//status change color
function getStatus(status){
    if(status== 'Pending') return 'orange';
    if(status == 'Processing') return 'blue';
    if(status == 'Completed') return 'green';
    return 'black';
}

//searching of the reference ID/number
function searchID() {
    const id = document.getElementById("searchInput").value;
    const result = document.getElementById("result");

    if (!id) {
        alert("Please enter a Reference ID");
        return;
    }

    result.innerHTML = "<p>Searching...</p>";

    //connecting to the database
    fetch("searching.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "id=" + id
    })
    .then(response => response.json())
    .then(data => {
        //outputs of the search
        if (!data.found) {
            result.innerHTML = `<p style="color:red;"> Reference ID not found.</p>`;
        } else {
            result.innerHTML = `
                <h3> Application Found!</h3>
                <br><br>
                <p><strong>Name:</strong> ${data.name}</p>
                <p><strong>Status:</strong>
                    <span style="color: ${getStatus(data.status)}; font-weight: bold;">
                        ${data.status}
                    </span>
                </p>
                <p><strong>Condition:</strong> ${data.condition.join(", ")}</p>
                <p><strong>Response:</strong> <br>${data.response.join("<br><br>")}</p>
                <br><br><br>
                <center><h3>Thank You For Registering!</h3></center>
            `;
        }
        document.getElementById("searchInput").value = "";
    })
    .catch(error => {
        result.innerHTML = `<p style="color:red;">Error: ${error.message}</p>`;
        console.error("Error:", error);
    });
}

//function to update filename display
function updateFileDisplay(inputElement) {
    const display = inputElement.nextElementSibling;
    if (display) {
        if (inputElement.files.length > 0) {
            display.textContent = inputElement.files[0].name;
        } else {
            display.textContent = 'No file chosen';
        }
    }
}

//this part is for image uploads
document.getElementById('eamage').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})

document.getElementById('bill_image').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})

document.getElementById('medicine_image').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})


document.getElementById('equipment_image').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})

document.getElementById('tuition_image').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})

document.getElementById('supplies_image').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})

document.getElementById('certificate-image').addEventListener('change', function(e){
    updateFileDisplay(e.target);
})

//idk whats this
document.querySelector('form[name="form1"]').addEventListener('submit', function(e) {
    var allAssistance = document.querySelectorAll('select[name="assistance"]');
    allAssistance.forEach(function(select) {
        var parentDiv = select.closest('div');
       
        if (parentDiv && parentDiv.classList.contains(parentDiv.id)) {
            select.disabled = true;
        } else if (select.value === 'NULL') {
            select.disabled = true;  
        }
    });

    var allSpecific = document.querySelectorAll('select[name="specific_assistance"]');
    allSpecific.forEach(function(select) {
        var parentDiv = select.closest('div');
        if (parentDiv && parentDiv.classList.contains(parentDiv.id)) {
            select.disabled = true;
        } else if (select.value === 'NULL') {
            select.disabled = true;  
        }
    });

});

//validation for condition picking, limit is 1
function validateCheckboxes() {
    const checkboxes = document.querySelectorAll('input[name="kondition[]"]');
    const atLeastOneChecked = Array.from(checkboxes).some(cb => cb.checked);

    if (!atLeastOneChecked) {
        alert('Please select at least one condition before submitting.');
        return false; // prevents form submission
    }
    return true;
}