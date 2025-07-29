// general variable
let skillList = [];
let skillListFromServer = window.skillListFromServer;

if (skillListFromServer !== null || skillListFromServer !== "undefined") {
    skillList = window.skillListFromServer;
} else {
    skillList = [];
}

// main form section
// get All main input activator
const firstNameActivator = document.querySelector("#first-name-activator-btn");
const lastNameActivator = document.querySelector("#last-name-activator-btn");
const jobTitleActivator = document.querySelector("#job-title-activator-btn");
const usernameActivator = document.querySelector("#username-activator-btn");
const descriptionActivator = document.querySelector(
    "#description-activator-btn",
);
const skillActivator = document.querySelector("#skill-activator-btn");

// get all main inputs
const firstNameInput = document.querySelector("#first-name-input");
const lastNameInput = document.querySelector("#last-name-input");
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
function inputUnlocker(e) {
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

    // job title handler
    if (activatorBtn === allActivatorButtons[2]) {
        // remove disabled attribute for input
        allInputs[2].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // username handler
    if (activatorBtn === allActivatorButtons[3]) {
        // remove disabled attribute for input
        allInputs[3].removeAttribute("disabled");
        // remove active class for activator btn
        activatorBtn.classList.remove("active");
        activatorBtn.classList.remove("cursor-pointer");
        activatorBtn.disabled = true;
    }

    // description handler
    if (activatorBtn === allActivatorButtons[4]) {
        const descriptionSaveButton = document.querySelector(
            "#description-form-save-button",
        );

        // add hidden class to activator btn
        activatorBtn.classList.add("hidden");

        // undisabled the inputs
        allInputs[4].disabled = false;

        // remove hidden class to description form save button
        descriptionSaveButton.classList.remove("hidden");

        // focus on input and chane color of text
        allInputs[4].classList.add("text-slate-100");
        allInputs[4].focus();
    }

    // skill handler
    if (activatorBtn === allActivatorButtons[5]) {
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
const closeSkillModalBtn = document.querySelector("#skill-modal-close-button");
const skillSelectionAddBtn = document.querySelector(
    "#skill-selection-add-button",
);
const modalSaveBtn = document.querySelector("#modal-skill-save-button");

// add change listerner for handling skill selection
skillSelectionAddBtn.addEventListener("click", skillSelectionHandler);

// modal save action
modalSaveBtn.addEventListener("click", modalSaveHandler);

// close modal
closeSkillModalBtn.addEventListener("click", closeSkillModal);

// close modal
function closeSkillModal(e) {
    // get parent modal
    const modal = e.target.closest(".modal");

    // now close modal with adding hidden class to hide modal
    modal.classList.add("hidden");
}

// skill selection input handler
function skillSelectionHandler() {
    const modalSkilllist = document.querySelector("#modal-skill-list");
    createSkillList("modal-list", skillList, modalSkilllist);
}

// inja boodam
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
    createSkillList("modal-list", skillList, modalSkillListELement);
});

function createSkillList(type, skillArray, targetListElement) {
    if (targetListElement) {
        targetListElement.innerHTML = "";
    } else {
        console.log("Add Element as a list");
        return;
    }

    if (skillArray === null || skillArray === "undefined") {
        console.log("Skill list is undefined or null!");
        return;
    }

    if (!type) {
        console.log("Please define type of list");
        return;
    }

    if (type === "modal-list") {
        targetListElement.innerHTML = "";
        const skillSelector = document.querySelector("#skill-selection");
        // check the selection input
        if (!skillSelector) {
            console.log("you need to add or create an select input");
        }

        if (!skillArray.includes(skillSelector.value)) {
            skillArray.push(skillSelector.value);
        }

        createList();
    }

    if (type === "base-list") {
        createList();
    }

    function createList() {
        skillArray.forEach((skill) => {
            const listItem = document.createElement("li");
            listItem.textContent = skill;
            listItem.classList.add(
                "p-2",
                "flex",
                "justify-between",
                "items-center",
                "gap-1",
                "bg-cyan-600",
                "rounded-lg",
                "font-bold",
                "text-sm",
                "w-fit",
            );

            if (type === "modal-list") {
                const deleteButton = document.createElement("button");
                deleteButton.innerHTML =
                    "<i class='fa-solid fa-rectangle-xmark text-white hover:text-red-400 transition duration-200 text-lg'></i>";
                deleteButton.classList.add(
                    "modal-skill-button",
                    "justify-center",
                    "flex",
                    "items-center",
                );
                deleteButton.id = "skill-" + skill;
                listItem.appendChild(deleteButton);
                listItem.addEventListener("click", handleDeleteSkillItem);
            }

            targetListElement.appendChild(listItem);
        });
    }
}

// handle delete skill item from modal list
function handleDeleteSkillItem(e) {
    const currButton = e.target.closest("button.modal-skill-button");
    if (currButton) {
        const currValue = currButton.id.split("skill-")[1];
        const modal = e.target.closest("#modal-skill-list");

        const newArr = skillList.filter((item) => {
            return item !== currValue;
        });

        skillList = newArr;

        createSkillList("modal-list", skillList, modal);
    }
}

// avatar handler
const avatarBtn = document.querySelector("#avatar");
const closeAvatarModalBtn = document.querySelector("#close-avatar-modal-btn");
avatarBtn.addEventListener("click", avatarHandler);

// close avatar modal
closeAvatarModalBtn.addEventListener("click", (e) =>
    e.target.closest(".modal").classList.add("hidden"),
);

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
