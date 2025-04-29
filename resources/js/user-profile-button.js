const userProfileButton = document.querySelector('.user-profile-button');
const userProfileDropdown = document.querySelector('.user-profile-dropdown');

if (userProfileButton && userProfileDropdown) {
    userProfileButton.addEventListener('click', function (event) {
        const isActive = this.classList.toggle('active');
        userProfileDropdown.classList.toggle('hidden', !isActive);
        event.stopPropagation();
    });

    document.addEventListener('click', function (event) {
        const isClickInside = userProfileButton.contains(event.target) || userProfileDropdown.contains(event.target) || event.target === userProfileButton || event.target === userProfileDropdown;

        if (!isClickInside) {
            userProfileButton.classList.remove('active');
            userProfileDropdown.classList.add('hidden');
        }
    });
}
