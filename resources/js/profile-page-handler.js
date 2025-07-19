// general variable
const skillList = window.skillListFromServer || [];

// main form section
// get All main input activator
const firstNameActivator = document.querySelector("#first-name-activator-btn");
const lastNameActivator = document.querySelector("#last-name-activator-btn");
const birthDateActivator = document.querySelector("#birth-date-activator-btn");
const jobTitleActivator = document.querySelector("#job-title-activator-btn");
const usernameActivator = document.querySelector("#username-activator-btn");
const descriptionActivator = document.querySelector(
    "#description-activator-btn",
);
const skillActivator = document.querySelector("#skill-activator-btn");

// get all main inputs
const firstNameInput = document.querySelector("#first-name-input");
const lastNameInput = document.querySelector("#last-name-input");
const birthDateInput = document.querySelector("#birth-date-input");
const jobTitleInput = document.querySelector("#job-title-input");
const usernameInput = document.querySelector("#username-input");
const descriptionInput = document.querySelector("#description-input");

// Insert all inputs activators in this array
const allActivatorButtons = [];

// insert all inputs in the array
const allInputs = [];

// Insert inputs activators if exists
if (firstNameActivator) {
    allActivatorButtons.push(firstNameActivator);
}

if (lastNameActivator) {
    allActivatorButtons.push(lastNameActivator);
}

if (birthDateActivator) {
    allActivatorButtons.push(birthDateActivator);
}

if (jobTitleActivator) {
    allActivatorButtons.push(jobTitleActivator);
}

if (usernameActivator) {
    allActivatorButtons.push(usernameActivator);
}

if (descriptionActivator) {
    allActivatorButtons.push(descriptionActivator);
}

if (skillActivator) {
    allActivatorButtons.push(skillActivator);
}

// Insert inputs if exists
if (firstNameInput) {
    allInputs.push(firstNameInput);
}

if (lastNameInput) {
    allInputs.push(lastNameInput);
}

if (birthDateInput) {
    allInputs.push(birthDateInput);
}

if (jobTitleInput) {
    allInputs.push(jobTitleInput);
}

if (usernameInput) {
    allInputs.push(usernameInput);
}

if (descriptionInput) {
    allInputs.push(descriptionInput);
}

// disabled every inputs
allInputs.forEach((element) => {
    element.disabled = true;
});

// add event listeners for all activator buttons
allActivatorButtons.forEach((element) => {
    element.addEventListener("click", inputUnlocker);
});

// input unlocer function
function inputUnlocker() {
    // get clicked element by this
    let activatorBtn = this;

    // first name handler
    if (activatorBtn === allActivatorButtons[0]) {
        // remove disabled attribute for input
        allInputs[0].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // last name handler
    if (activatorBtn === allActivatorButtons[1]) {
        // remove disabled attribute for input
        allInputs[1].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // birth date handler
    if (activatorBtn === allActivatorButtons[2]) {
        // remove disabled attribute for input
        allInputs[2].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // job title handler
    if (activatorBtn === allActivatorButtons[3]) {
        // remove disabled attribute for input
        allInputs[3].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // username handler
    if (activatorBtn === allActivatorButtons[4]) {
        // remove disabled attribute for input
        allInputs[4].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // description handler
    if (activatorBtn === allActivatorButtons[5]) {
        const descriptionSaveButton = document.querySelector(
            "#description-form-save-button",
        );

        // add hidden class to activator btn
        activatorBtn.classList.add("hidden");

        // undisabled the inputs
        allInputs[5].disabled = false;

        // remove hidden class to description form save button
        descriptionSaveButton.classList.remove("hidden");

        // focus on input and chane color of text

        allInputs[5].classList.add("text-slate-100");
        allInputs[5].focus();
    }

    // skill handler
    if (activatorBtn === allActivatorButtons[6]) {
        const modal = document.querySelector("#skill-modal"); // get model element
        modal.classList.remove("hidden");
    }
}

// add event listeners for inputs when change values
allInputs.forEach((element) => {
    element.addEventListener("change", (e) => {
        // get main form save button
        const saveBtn = document.querySelector("#main-form-save-button");

        // check save btn disabled or not
        saveBtn.removeAttribute("disabled");
        saveBtn.classList.add("cursor-pointer");
        saveBtn.classList.remove("bg-gray-400");
        saveBtn.classList.add("bg-blue-400");
    });
});

// skill modal
const closeSkillModalBtn = document.querySelector("#close-skill-modal-btn");
const skillSelectionAddBtn = document.querySelector(
    "#skill-selection-add-button",
);
const modalSaveBtn = document.querySelector("#modal-skill-save-button");

// add change listerner for handling skill selection
skillSelectionAddBtn.addEventListener("click", skillSelectionHandler);

// close modal
closeSkillModalBtn.addEventListener("click", closeSkillModal);

// modal save action
modalSaveBtn.addEventListener("click", modalSaveHandler);

function closeSkillModal() {
    // get parent modal
    const modal = this.closest(".modal");

    // now close modal with adding hidden class to hide modal
    modal.classList.add("hidden");
}

function skillSelectionHandler() {
    const skillSelector = document.querySelector("#skill-selection");

    // we need to add this value to the skill list array
    if (!skillList.includes(skillSelector.value)) {
        const modalSkillListELement =
            document.querySelector("#modal-skill-list");
        skillList.push(skillSelector.value);
        modalSkillListELement.innerHTML = "";
        skillList.forEach((skill) => {
            const listItem = document.createElement("li");
            listItem.textContent = skill;
            listItem.classList.add(
                "px-4",
                "py-2",
                "flex",
                "justify-center",
                "items-center",
                "bg-cyan-600",
                "rounded-lg",
                "font-bold",
                "text-sm",
            );
            modalSkillListELement.appendChild(listItem);
        });
    } else {
        console.log("The value selected before");
    }
}

function modalSaveHandler() {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    const url = "/user/profile/skills";

    fetch(url, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
            "X-Requested-With": "XMLHttpRequest",
        },
        body: JSON.stringify({ skills: skillList }),
    })
        .then((response) => {
            if (!response.ok) throw new Error("خطا در ذخیره مهارت‌ها");
            return response.json();
        })
        .then((data) => {
            console.log("مهارت‌ها ذخیره شدند:", data);
            // بستن مدال
            document.querySelector("#skill-modal").classList.add("hidden");
            location.reload();
        })
        .catch((error) => {
            console.error("خطا:", error);
        });
}

document.addEventListener("DOMContentLoaded", () => {
    const modalSkillListELement = document.querySelector("#modal-skill-list");
    modalSkillListELement.innerHTML = "";
    skillList.forEach((skill) => {
        const listItem = document.createElement("li");
        listItem.textContent = skill;
        listItem.classList.add(
            "px-4",
            "py-2",
            "flex",
            "justify-center",
            "items-center",
            "bg-cyan-600",
            "rounded-lg",
            "font-bold",
            "text-sm",
        );
        modalSkillListELement.appendChild(listItem);
    });
});

// avatar handler
const avatarBtn = document.querySelector("#avatar");
avatarBtn.addEventListener("click", avatarHandler);

function avatarHandler() {
    // get avatar modal
    const avatarModal = document.querySelector("#avatar-modal");
    avatarModal.classList.remove("hidden");
}

// avatar input handle for large size prevent to submit
const avatarModal = document.querySelector("#avatar-modal");
avatarModal.addEventListener("submit", handleSubmitAvatarModal);

function handleSubmitAvatarModal(e) {
    // get image input
    const fileInput = document.querySelector("#avatar-input");
    const file = fileInput.files[0];

    if (file && file.size > 512000) {
        // 500kb = 500 * 1024 = 512000 bytes
        e.preventDefault();
        alert("Image size is to large, your image should be less then 500kb");
    }
}

// get save button from form
// main form section end

// desc form section
// desc form section end

// avatar form section
// avatar form section end

// functions, actions
// listeners of activators
